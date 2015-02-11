<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 31/01/15
 * Time: 8:59 PM
 */

class User extends CI_Model{

    private $credentials = array("ikben@shaw.ca" => array("password" => "password", "name" => "Ben Soer", "username" => "bensoer", "email" => "ikben@shaw.ca"));

    function __construct(){
        parent::__construct();
    }

    // TODO implement functionality to deal with no results found. Can be done with proper database
    function getCredentials($email){
        $profile = $this->credentials[$email];
        $creds = array("username" => $profile["username"], "password" => $profile["password"]);
        return $creds;
    }

    // TODO fully implement this function appropriatly.
    function getProfile($username){
        return $this->credentials['ikben@shaw.ca'];
    }

    //returns true on success, false on failure or error
    function createUser($info = array()){
        if(empty($info)){
            return false;
        }else{
            $credentials[$info["email"]] = array("password" => $info["password"], "name" => $info["name"], "email" => $info["email"]);
            return true;
        }
    }


}