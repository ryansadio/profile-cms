<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 06/03/15
 * Time: 11:10 PM
 */

class Link extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    /**saves a link belonging to a single project
     * @param $whereArray an associative array to identify which link to save / update to
     * @param $linkInfo an associative array of all the information being saved / updated for the link
     */
    function saveProjectLinks($whereArray, $linkInfo){
        $this->db->where($whereArray);
        $this->db->update('links', $linkInfo);
    }

    /**gets all of the links belonging to a project
     * @param $projectid the id of the project we are trying to find all the links for
     * @return array an array of links which each are associative arrays of all the ifnromation to do with a link. If
     * there are no results, an empty array is returned
     */
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