<?php
class GigsData extends CI_Model{
    public function __construct()
    {
		parent::__construct();
        // $this->load->database('production',TRUE);   
    }

    public function get_trending_gigs(){
		// $query = $this->db->get("gigs_test");
		$query = $this->db->query("SELECT * FROM gigs_test WHERE `avg_rating` = '5.0' ORDER BY `avg_rating` ASC LIMIT 12");
        $result = $query->result();
        return $result;
    }

    public function get_recommended_gigs(){}

    public function get_gig_by_id($id){}
    public function new_gig(){}
    public function edit_gig($id){}
    public function update_gig($id){}
    public function delete_gig($id){}
}
