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


    public function index()
    {
        // Story & About
        $this->smarty->assign("title", "Ben Soer");
        $this->smarty->assign("username", "bensoer");
        $this->smarty->assign("name", "Ben Soer");
        $this->smarty->assign("image", "../../assets/images/me.jpg");
        $this->smarty->assign("job", "Web Developer");
        $this->smarty->assign("email", "bsoer@bensoer.com");
        $this->smarty->assign("base_colour", "midnight_blue");
        $this->smarty->assign("accent_colour_text", "alizarin-text");
        $this->smarty->assign("linkedin", "http://linkedin.com/bensoer");
        $this->smarty->assign("github", "http://github.com/bensoer");
        $this->smarty->assign("twitter", "http://twitter.com/bensoer");

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