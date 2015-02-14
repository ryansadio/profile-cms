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


    public function index($id)
    {
        if($this->isPostRequest()){
            //save data to the database
            $profileData = array("username" => $this->input->post('username'),
                                    "name" => $this->input->post('name'),
                                    "job" => $this->input->post("job"),
                                    "email" => $this->input->post("email"),
                                    "linkedin" => $this->input->post("linkedin"),
                                    "twitter" => $this->input->post("twitter"),
                                    "github" => $this->input->post("github"),
                                );


            $this->profile->saveProfile($profileData);


            //inform user save was successful
            $this->smarty->assign("notification", "Your settings have been saved successfuly");
            $this->loadPage($id);
        }else{
            $this->loadPage($id);
        }

    }

    private function isPostRequest(){
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }

    private function loadPage($username){

        $profile = $this->profile->getProfile($username);

        // Story & About
        $this->smarty->assign("title", $profile["firstname"] . " " . $profile["lastname"]);
        $this->smarty->assign("username", $profile["username"]);
        $this->smarty->assign("name", $profile["firstname"] . " " . $profile["lastname"]);
        $this->smarty->assign("image", $profile["userpicture"] == null ? "" : $profile["userpicture"]);
        $this->smarty->assign("job", $profile["jobtitle"]);
        $this->smarty->assign("email", $profile["email"]);
        $this->smarty->assign("base_colour", "midnight_blue");
        $this->smarty->assign("accent_colour_text", "alizarin-text");
        $this->smarty->assign("linkedin", $profile["urllinkedin"]);
        $this->smarty->assign("googleplus", $profile["urlgoogleplus"]);
        $this->smarty->assign("twitter", $profile["urltwitter"]);

        // Project(s); Pass an array for the projects???
        $this->smarty->assign("p1_image", "http://placehold.it/350x250");
        $this->smarty->assign("p1_title", "Codefire");
        $this->smarty->assign("p1_description", "Insert description here.");
        $this->smarty->assign("p1_link", "http://codefire.io/");
        $this->smarty->assign("p1_github", "http://github.com/codefire");

        // Resume
        $this->smarty->assign("url", "../../assets/pdfs/Untitled.pdf");

        // Render page
        $this->smarty->display("profileeditor.tpl");
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */