<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 31/01/15
 * Time: 8:59 PM
 */

class User extends CI_Model{

    //private $credentials = array("ikben@shaw.ca" => array("password" => "password", "name" => "Ben Soer", "username" => "bensoer", "email" => "ikben@shaw.ca"));

    function __construct(){
        parent::__construct();
    }


    function getCredentials($email){
        //$profile = $this->credentials[$email];
        //$creds = array("username" => $profile["username"], "password" => $profile["password"]);
        $this->db->select(array('username','password','securityrole'));
        $this->db->where('email', $email);

        $queryArray = $this->db->get('users')->result_array();
        if(empty($queryArray)){
            return array();
        }else{
            return $queryArray[0];
        }
    }


    function getProfile($username){
        $this->db->where('username', $username);
        $queryArray = $this->db->get('users')->result_array();
        if(empty($queryArray)){
            return array();
        }else{
            return $queryArray[0];
        }
    }

    //returns true on success, false on failure or error
    function createUser($info = array()){
        if(empty($info)){
            return false;
        }else{
            //$credentials[$info["email"]] = array("password" => $info["password"], "name" => $info["name"], "email" => $info["email"]);

            return true;
        }
    }


}