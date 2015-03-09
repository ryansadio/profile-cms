<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 31/01/15
 * Time: 8:59 PM
 */

class User extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    /**gets the credentials of a user based on thier email
     * @param $email the email of the user's credentials we are trying to find
     * @return array an associative array with the users username, password, and securityrole. If there are no results
     * an empty array is returned
     */
    function getCredentials($email){
        $this->db->select(array('username','password','securityrole'));
        $this->db->where('email', $email);

        $queryArray = $this->db->get('users')->result_array();
        if(empty($queryArray)){
            return array();
        }else{
            return $queryArray[0];
        }
    }

    /**gets the users profile based on thier username
     * @param $username the username for the profile we are looking for
     * @return array an associative array of all the information about the user's profile. If there are no results, an
     * empty array is returned
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

    /**creates a user in the database
     * @param array $info the information about the user being inserted into the database. By default this value is set
     * to an empty array so that this function is not misused
     * @return bool the status of whether the creation succeeded or failed
     */
    function createUser($info = array()){
        if(empty($info)){
            return false;
        }else{
            //$credentials[$info["email"]] = array("password" => $info["password"], "name" => $info["name"], "email" => $info["email"]);
            $this->db->insert('users', $info);
            return true;
        }
    }

    /** gets all of accounts in the database
     * @return mixed an array of associative arrays pertaining information about each account
     */
    function getAccounts(){
        $this->db->select('username');
        $queryArray = $this->db->get('users')->result_array();
        return $queryArray;
    }

    /**deletes an account from the database
     * @param string $username the username of the account being deleted. This is given a default value of empty string
     * so that the parameter is not used incorrectly
     * @return bool the state of whether the deletion fo the account was successful or not
     */
    function deleteAccount($username = ""){
        if($username === ""){
            return false;
        }

        // get the userid
        $this->db->where('username', $username);
        $queryArray = $this->db->get('users')->result_array();

        if(empty($queryArray)){
            return false;
        }
        $userid = $queryArray[0]["userid"];


        // get all projects
        $this->db->where('userid', $userid);
        $projectsArray = $this->db->get('projects')->result_array();

         //delete any links
        foreach($projectsArray as $project){
            $this->db->delete('links', array("projectid" => $project["projectid"]));
        }

        //delete any projects
        $this->db->delete('projects', array('userid' => $userid));

        //delete the user
        $this->db->delete('users', array('userid' => $userid));

        return true;
    }


}