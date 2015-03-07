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

    /**saves the users profile
     * @param $userid the username of the user's profile being saved
     * @param $profileInfo an associative array of all the information being saved / updated
     */
    function saveProfile($userid, $profileInfo){
        $this->db->where('username', $userid);
        $this->db->update('users', $profileInfo);
    }

    /**saves 1 project from a user
     * @param $whereArray an associative array of conditions identifying the project
     * @param $projectInfo an associative array of all the information being saved / updated belonging to the project
     */
    function saveProject($whereArray, $projectInfo){
        $this->db->where($whereArray);
        $this->db->update('projects', $projectInfo);

    }

    /**adds a new project to the database and sets the default image for the project
     * @param $userid the userid the project belongs to
     * @param $projectName the name of the project
     * @param $projectDescription a description of the project
     */
    function addNewProject($userid, $projectName, $projectDescription){
        $data = array(
            "userid" => $userid,
            "projectname" => $projectName,
            "projectdescription" => $projectDescription,
            "projectpicture" => "/assets/images/new_project_default.png"
        );

        $this->db->insert('projects', $data);
    }



    /** fetches the users profile information
     * @param $username the username of the user
     * @return array an associative array of the user's profile. If the profile does not exist, an empty array is
     * returned
     */
    function getProfile($username){
        $this->db->where('username', $username);
        $queryArray = $this->db->get('users')->result_array();
        if(empty($queryArray)){
            return array();
        }else{
            return $queryArray[0];
        }
    }

    /**gets all of the projects belonging to a user
     * @param $userid the userid of the user we are trying to find all the projects for
     * @return array an array of projects which each are associative arrays of all the information to do with a project.
     * If there are no results, an empty array is returned
     */
    function getProjects($userid){
        $this->db->where('userid', $userid);
        $queryArray = $this->db->get('projects')->result_array();
        if(empty($queryArray)){
            return array();
        }else{
            return $queryArray;
        }

    }


}