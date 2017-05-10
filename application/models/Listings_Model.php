<?php

/**
 * Created by PhpStorm.
 * User: matthewserna
 * Date: 4/14/17
 * Time: 10:13 PM
 */
class Listings_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function get_sorted_items($search, $category){
        $search = trim($search);

        //searches the database's 'items' table for similarity in 'name' and 'category' columns
        if($category=="All")
        {
            $this->db->select('*');
        }
        else if($category=="Other")
        {
            $category=NULL; //If category was set to Other, choose any database item with no category
            $this->db->where('category', $category);
        }
        else
        {
            $this->db->where('category', $category);
        }
        $this->db->from('Items');
        if(isset($search) && $search != "")
        {
            $this->db->like('name', $search);
            $this->db->or_like('description', $search);
        }
        //gets results from above query
        $query = $this->db->get();

        //sorts query
        sort($query);

        //returns query results in an array
        return $query->result_array();

    }
}