<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NegativeAspect_model extends CI_Model {

    protected $table = 'negative_aspects';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Insert a positive aspect into the database
    public function insert_positive_aspect($data) {
        return $this->db->insert($this->table, $data);
    }

    // Get a positive aspect by ID
    public function get_positive_aspect($id) {
        return $this->db->get_where($this->table, array('id' => $id))->row();
    }

    // Get all positive aspects for a specific listing ID
    public function get_positive_aspects_by_listing($listing_id) {
        return $this->db->get_where($this->table, array('listing_id' => $listing_id))->result();
    }

    // Update a positive aspect
    public function update_positive_aspect($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    // Delete a positive aspect
    public function delete_positive_aspect($id) {
        return $this->db->delete($this->table, array('id' => $id));
    }

}
?>
