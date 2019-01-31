public function viewTutor() {
        $config = array();
        $config["base_url"] = base_url() . "superadmin/Tutor/viewTutor";
        $config["total_rows"] = $this->Tutor_model->record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 4 ;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data["results"] = $this->Tutor_model->
            fetch_countries($config["per_page"], $page);
            //print_r($this->data["results"]);
        $this->data["links"] = $this->pagination->create_links();
      
}


Model:
function search_tutor($search_term='default')
{

    $search = $this->input->post('search');
    $location=$this->input->post('location');
    //echo $location;exit;

    if($location)
    {
        $this->db->select('*');
        $this->db->from('rl_tutor_tbl');
        $this->db->like('location_name',$search_term);
        // Execute the query.
        $query = $this->db->get();
        return $query->result_array();
}
    // }else if($filter == 'author')
//     {
//         //echo 'author';
//         $this->db->select('*');
//         $this->db->from('book');
//         $this->db->like('author',$search_term);
//         // Execute the query.
//         $query = $this->db->get();
//         return $query->result_array();

//     }else if($filter == 'type')
//     {
//         //echo 'type';
//         $this->db->select('*');
//         $this->db->from('book');
//         $this->db->like('book_type',$search_term);
//         // Execute the query.
//         $query = $this->db->get();
//         return $query->result_array();

//     }else if($filter == 'status')
//     {
//         //echo 'status';
//         $this->db->select('*');
//         $this->db->from('book');
//         $this->db->like('book_status',$search_term);
//         // Execute the query.
//         $query = $this->db->get();
//         return $query->result_array();
//     }else
//     {
//         //echo 'all';
//         $this->db->select('*');
//         $this->db->from('book');
//         $this->db->like('book_status',$search_term);
//         $this->db->or_like('book_type',$search_term);
//         $this->db->or_like('author',$search_term);
//         $this->db->or_like('title',$search_term);
//         // Execute the query.
//         $query = $this->db->get();
//         return $query->result_array();
//     }

// }