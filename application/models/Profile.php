<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 31/01/15
 * Time: 9:33 PM
 */

class Profile extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    // TODO implement saving to database
    function saveProfile($profileInfo){

    }

    // TODO implement with database
    function getProfile($username){
        return array("username" => "bensoer",
            "name" => "Ben Soer",
            "job" => "Web Developer",
            "email" => "ikben@shaw.ca",
            "linkedin" => "http://linkedin.com/bensoer",
            "twitter" => "http://twitter.com/bensoer",
            "github" => "http://github.com/bensoer",
        );
    }
}