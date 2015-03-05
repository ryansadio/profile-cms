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

    function saveProfile($userid, $profileInfo){
        $this->db->where('username', $userid);
        $this->db->update('users', $profileInfo);
    }

    //save projects via updating them. Pass where condition and then what info to update
    function saveProject($whereArray, $projectInfo){
        $this->db->where($whereArray);
        $this->db->update('projects', $projectInfo);

    }

    function addNewProject($userid, $projectName, $projectDescription){
        $data = array(
            "userid" => $userid,
            "projectname" => $projectName,
            "projectdescription" => $projectDescription,
            "projectpicture" => "/assets/images/new_project_default.png"
        );

        $this->db->insert('projects', $data);
    }

    //save links via updating them. Pass where condition and then what info to update
    function saveProjectLinks($whereArray, $linkInfo){
        $this->db->where($whereArray);
        $this->db->update('links', $linkInfo);
    }

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

    function getProjects($userid){
        $this->db->where('userid', $userid);
        $queryArray = $this->db->get('projects')->result_array();
        if(empty($queryArray)){
            return array();
        }else{
            return $queryArray;
        }

    }

    function getProjectLinks($projectid){
        $this->db->where('projectid', $projectid);
        $queryArray = $this->db->get('links')->result_array();
        if(empty($queryArray)){
            return array();
        }else{
            return $queryArray;
        }
    }
}