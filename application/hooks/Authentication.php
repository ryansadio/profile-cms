<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 06/03/15
 * Time: 8:32 PM
 */

class Authentication extends CI_Controller{

    /**
     * validates all controllers except the welcome, signup and home controller as to whether the user is logged in
     * or not. User's who are not logged in do not have access to editing features of the website and therefor are
     * forwarded to the home page to sign up or login
     */
    public function validate(){

        $this->ci = &get_instance();
        $route = $this->ci->router->fetch_class();

        //if this is not the login or signup page
        if($route != "welcome" && $route != "signup" && $route != "home"){

            //users should have a cookie from the signup page saying they are allowed in

            $this->load->helper('cookie');

            $loggedIn = get_cookie('valid_login');

            if($loggedIn){
                $this->smarty->assign('loggedIn', '#');
                return;
            }else{
                $this->load->helper('url');
                redirect("/welcome");
            }

        }
    }
}