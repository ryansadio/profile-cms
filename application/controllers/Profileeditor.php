<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology

 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Profileeditor - is the profile editing page for the user who is creating a profile. This controller will deal
 * with all interactions involving changes to the users profile account
 */
class Profileeditor extends CI_Controller {


    public function index($username)
    {
        if($this->isPostRequest()){

            //upload image to the assets folder

            //if no directory made for user, create one
            if(!is_dir("uploads/" . $username)){
                mkdir("uploads/" . $username);
            }

            //configure uploader
            $config['upload_path'] = './uploads/' . $username . '/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $config['max_size']     = '200';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $config['overwrite'] = TRUE;

            //configure for image upload
            $config["file_name"] = "profile_" . $username;
            $this->load->library("upload", $config);

            $this->upload->do_upload("photo");
            //var_dump($this->upload->display_errors('<p>', '</p>'));
            $fullPath = $this->upload->data('full_path');
            $fileName = substr($fullPath, mb_strrpos($fullPath, "/")+1, strlen($fullPath));
            $profilePhoto = "../../../uploads/" . $username . "/" . $fileName;

            //configure for resume upload
            $config["file_name"] = "resume_" . $username;
            $this->upload->initialize($config);
            $this->upload->do_upload("resume");
            //var_dump($this->upload->display_errors('<p>', '</p>'));
            $fullPath = $this->upload->data('full_path');
            $fileName = substr($fullPath, mb_strrpos($fullPath, "/")+1, strlen($fullPath));
            $resumeFile = "../../../uploads/" . $username . "/" . $fileName;

            $fullName = $this->input->post('name');
            $spacePos = strpos($fullName, " ");
            $firstName = substr($fullName,0, $spacePos);
            $lastName = substr($fullName, $spacePos+1, strlen($fullName));

            $homeData = array(  "username" => $this->input->post('username'),
                                "firstname" => $firstName,
                                "lastname" => $lastName,
                                "jobtitle" => $this->input->post("job"),
                                "email" => $this->input->post("email"),
                                "usertitle1" => $this->input->post("tab1_title"),
                                "userdescription1" => $this->input->post("tab1_description"),
                                "usertitle2" => $this->input->post("tab2_title"),
                                "userdescription2" => $this->input->post("tab2_description"),
                                "usertitle3" => $this->input->post('tab3_title'),
                                "userdescription3" => $this->input->post("tab3_description"),
                                "urllinkedin" => $this->input->post("linkedin"),
                                "urltwitter" => $this->input->post("twitter"),
                                "urlgithub" => $this->input->post("github"),
                                "userpicture" => $profilePhoto,
                                "resume" => $resumeFile
                            );

            $this->profile->saveProfile($username, $homeData);



            $user = $this->user->getProfile($username);
            $id = $user["userid"];

            //get all known projects
            $projects = $this->profile->getProjects($id);

            foreach($projects as $project){

                //re-upload the project image
                $config["file_name"] = $project["projectname"] . "_" . $username;
                $this->upload->initialize($config);

                //try to upload an image. If no image was set this will fail returning FALSE
                $wasImageSet = $this->upload->do_upload($project["projectname"] . "_image");

                //update the project data with new data or already set data
                $projectData = array(
                    "userid" => $id,
                    "projectname" => $this->input->post($project["projectname"] . "_title"),
                    "projectpicture" => $wasImageSet ? $this->upload->data('full_path') : $project["projectpicture"], //load in the dir to the project picture
                    "projectdescription" => $this->input->post($project["projectname"] . "_description")

                );

                //save the changes to the database where userid and projectid match this project and user
                $this->profile->saveProject(array("userid" => $id, "projectid" => $project["projectid"]),$projectData);


                //get all links belonging to project
                $links = $this->profile->getProjectLinks($project["projectid"]);

                foreach($links as $link){

                    $linkData = array(
                        "linkname" => $link["linkname"],
                        "linkurl" => $this->input->post($project["projectname"] . "_" . $link["linkname"] . "_link")

                    );

                    //save the changes to the database where the projectid and linkid match this project and link
                    $this->profile->saveProjectLinks(array("projectid" => $project["projectid"], "linkid" => $link["linkid"]), $linkData);

                }

            }

            //inform user save was successful
            $this->smarty->assign("notification", "Your settings have been saved successfuly");
            $this->loadPage($username);
        }else{
            $this->loadPage($username);
        }

    }

    private function isPostRequest(){
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }

    public function addProject($username){

        //save to database the new project
        //newprojectname
        //newprojectdescription

        $newProjectName = $this->input->post('newprojectname');
        $newProjectDescription = $this->input->post('newprojectdescription');

        $user = $this->user->getProfile($username);

        $id = $user["userid"];

        $this->profile->addNewProject($id, $newProjectName, $newProjectDescription);

        //$this->loadPage($username, true);

        $this->load->helper('url');
        redirect('/profileeditor/' . $username);

    }

    private function loadPage($username, $fromProject = false){

        if($fromProject){
            $this->smarty->assign("active", "active");
        }

        $profile = $this->profile->getProfile($username);

        // Story & About
        //$this->smarty->assign("image", "../../../uploads/bensoer/profile_bensoer.jpg");
        $this->smarty->assign("title", $profile["firstname"] . " " . $profile["lastname"]);
        $this->smarty->assign("username", $profile["username"]);
        $this->smarty->assign("name", $profile["firstname"] . " " . $profile["lastname"]);
        $this->smarty->assign("image", $profile["userpicture"] == null ? "" : $profile["userpicture"]);
        $this->smarty->assign("job", $profile["jobtitle"]);
        $this->smarty->assign("email", $profile["email"]);
        $this->smarty->assign("base_colour", "midnight_blue");
        $this->smarty->assign("accent_colour_text", "alizarin-text");
        $this->smarty->assign("linkedin", $profile["urllinkedin"]);
        $this->smarty->assign("github", $profile["urlgithub"]);
        $this->smarty->assign("twitter", $profile["urltwitter"]);

        $this->smarty->assign("t1_title", $profile["usertitle1"]);
        $this->smarty->assign("t1_description", $profile["userdescription1"]);
        $this->smarty->assign("t2_title", $profile["usertitle2"]);
        $this->smarty->assign("t2_description", $profile["userdescription2"]);
        $this->smarty->assign("t3_title", $profile["usertitle3"]);
        $this->smarty->assign("t3_description", $profile["userdescription3"]);


        $projects = $this->profile->getProjects($profile["userid"]);

        $allProjects = array();

        for($i = 0; $i < count($projects); $i++){
            $aProject = array();
            $aProject["image"] = $projects[$i]["projectpicture"];
            $aProject["title"] = $projects[$i]["projectname"];
            $aProject["description"] = $projects[$i]["projectdescription"];
            //$this->smarty->assign("p" . ($i+1) . "_image", $projects[$i]["projectpicture"]); // p1_image, p2_image, ...
            //$this->smarty->assign("p" . ($i+1) . "_title", $projects[$i]["projectname"]); // p1_title, p2_title, ...
            //$this->smarty->assign("p" . ($i+1) . "_description", $projects[$i]["projectname"]);

            //get all links belonging with this project
            $links = $this->profile->getProjectLinks($projects[$i]["projectid"]);

            $allLinks = array();
            foreach($links as $link){
                // p<number>_<linkname>
                //$this->smarty->assign("p" . ($i+1) . "_" . $link["linkname"], $link["linkurl"]);
                $aLink = array();
                $aLink["linkname"] = $link["linkname"];
                $aLink["linkurl"] = $link["linkurl"];
                //$aProject[$link["linkname"]] = $link["linkurl"];

                $allLinks[] = $aLink;

            }

            $aProject["links"] = $allLinks;

            $allProjects[] = $aProject;

        }

        $this->smarty->assign("projects", $allProjects);

        // Project(s); Pass an array for the projects???
        /*$this->smarty->assign("p1_image", "http://placehold.it/350x250");
        $this->smarty->assign("p1_title", "Codefire");
        $this->smarty->assign("p1_description", "Insert description here.");
        $this->smarty->assign("p1_link", "http://codefire.io/");
        $this->smarty->assign("p1_github", "http://github.com/codefire");*/

        // Resume
        $this->smarty->assign("url", $profile["resume"]);

        // Render page
        $this->smarty->display("profileeditor.tpl");
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */