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
        $this->db->update('users', $profileInfo);
    }

    function saveProjects($projectInfo){
        $this->db->update('projects', $projectInfo);

    }

    function saveLinks($linkInfo){
        $this->db->update('links', $linkInfo);
    }

    // TODO implement with database
    function getProfile($username){
        $this->db->where('username', $username);
        $queryArray = $this->db->get('users')->result_array();
        if(empty($queryArray)){
            return array();
        }else{
            return $queryArray[0];
        }

        /*return array("username" => "bensoer",
            "name" => "Ben Soer",
            "job" => "Web Developer",
            "email" => "ikben@shaw.ca",
            "linkedin" => "http://linkedin.com/bensoer",
            "twitter" => "http://twitter.com/bensoer",
            "github" => "http://github.com/bensoer",
        );*/
    }
}