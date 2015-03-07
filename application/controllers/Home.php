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
 * Class Home - displays all pages for the users profile and all interactions from the "public" side of the user's profile
 */
class Home extends CI_Controller {

    /**loads the profile page of the user's pages
     * @param $profileName the username of the user
     */
    public function profile($profileName)
    {
        $profile = $this->user->getProfile($profileName);
        // Header items
        $this->setHeaderInformation($profile);

        // Body items
        $this->smarty->assign("t1", $profile["usertitle1"]);
        $this->smarty->assign("d1", $profile["userdescription1"]);
        $this->smarty->assign("t2", $profile["usertitle2"]);
        $this->smarty->assign("d2", $profile["userdescription2"]);
        $this->smarty->assign("t3", $profile["usertitle3"]);
        $this->smarty->assign("d3", $profile["userdescription3"]);
        $this->smarty->assign("base_colour", "midnight_blue");
        $this->smarty->assign("accent_colour", "alizarin");

        $this->setProfileLinks($profile);

        // Render page
        $this->smarty->display("home.tpl");
    }

    /**loads the resume page of the user's pages
     * @param $profileName the username of the user
     */
    public function resume($profileName)
    {
        $profile = $this->user->getProfile($profileName);
        // Header items
        $this->setHeaderInformation($profile);

        //Body items
        $this->smarty->assign("base_colour", "midnight_blue");
        $this->smarty->assign("accent_colour", "alizarin");
        $this->smarty->assign("url", $profile["resume"]); // the resume url

        //Footer items
        $this->setProfileLinks($profile);

        // Render page
        $this->smarty->display("resume.tpl");
    }

    /** load sthe projects page of the user's pages
     * @param $profileName the username of the user
     */
    public function projects($profileName)
    {
        $profile = $this->user->getProfile($profileName);
        // Header items
        $this->setHeaderInformation($profile);

        //Body items
        $this->smarty->assign("base_colour", "midnight_blue");
        $this->smarty->assign("accent_colour", "alizarin");

        $user = $this->user->getProfile($profileName);
        $projects = $this->profile->getProjects($user["userid"]);

        $allProjects = array();
        foreach($projects as $project){

            $links = $this->link->getProjectLinks($project["projectid"]);

            $project["links"] = $links;

            $allProjects[] = $project;
        }


        $this->smarty->assign("projects", $allProjects);

        //Footer items
        $this->setProfileLinks($profile);

        // Render page
        $this->smarty->display("project.tpl");
    }

    /**sets links if they have been filled in by the user to the smarty template
     * @param $profile the profile information of the user
     */
    private function setProfileLinks($profile){
        if($profile["urllinkedin"] != null || $profile["urllinkedin"] != ""){
            $this->smarty->assign("urllinkedin", $profile["urllinkedin"]);
        }
        if($profile["urltwitter"] != null || $profile["urltwitter"] != ""){
            $this->smarty->assign("urltwitter", $profile["urltwitter"]);
        }
        if($profile["urlgithub"] != null || $profile["urlgithub"] != ""){
            $this->smarty->assign("urlgithub", $profile["urlgithub"]);
        }

    }

    /**sets the information needed for the header section of the users profile page
     * @param $profile the profile information of the user
     */
    private function setHeaderInformation($profile){

        $this->smarty->assign("title", $profile["firstname"] . " " . $profile["lastname"]);
        $this->smarty->assign("profile_name", $profile["username"]); // entered name is then assigned to links that lead to its own page
        $this->smarty->assign("image", $profile["userpicture"] == null ? "" : "../.." . $profile["userpicture"]);
        $this->smarty->assign("name", $profile["firstname"] . " " . $profile["lastname"]);
        $this->smarty->assign("job", $profile["jobtitle"]);
        $this->smarty->assign("email", $profile["email"]);
    }
}