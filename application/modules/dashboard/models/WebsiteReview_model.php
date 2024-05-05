<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteReview_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load database library
    }

    /**
     * Get all reviews from the 'websitereview' table
     */
    public function get_reviews()
    {
        $query = $this->db->get('websitereview');
        return $query->result(); // Return all reviews as an array of objects
    }

    /**
     * Add a new review to the 'websitereview' table
     */
    public function add_review($data)
    {
        return $this->db->insert('websitereview', $data); // Insert review data into 'websitereview' table
    }

    /**
     * Update an existing review in the 'websitereview' table
     */
    public function update_review($review_id, $data)
    {
        $this->db->where('id', $review_id);
        return $this->db->update('websitereview', $data); // Update review data in 'websitereview' table
    }

    /**
     * Delete a review from the 'websitereview' table
     */
    public function delete_review($review_id)
    {
        $this->db->where('id', $review_id);
        return $this->db->delete('websitereview'); // Delete review from 'websitereview' table
    }

}
?>
