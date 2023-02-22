<?php
    class Assignment extends CI_Model 
    {
        //get all rows from table
        function fetch_all()
        {
            return $this->db->query("SELECT * FROM assignments")->result_array();
        }
        //get rows from table that satisfies the parameters
        function fetch_rows_with_conditions()
        {
            $query = "SELECT * FROM assignments WHERE ";
            $values = array();
            if($this->input->post('easy') == 'easy' && $this->input->post('intermediate') == 'intermediate')
            {
                $query = $query . "( ";
            }
            if($this->input->post('easy') == 'easy')
            {
                $query = $query . "level = ? ";
                array_push($values, $this->input->post('easy'));
            }
            if($this->input->post('easy') == 'easy' && $this->input->post('intermediate') == 'intermediate')
            {
                $query = $query . "OR ";
            }
            if($this->input->post('intermediate') == 'intermediate')
            {
                $query = $query . "level = ? ";
                array_push($values, $this->input->post('intermediate'));
            }
            if($this->input->post('easy') == 'easy' && $this->input->post('intermediate') == 'intermediate')
            {
                $query = $query . ") ";
            }
            if(empty($this->input->post('easy')) && empty($this->input->post('intermediate')))
            {
                $query = $query . "level = ? ";
                array_push($values, null);
            }
            if($this->input->post('track') != 'All')
            {
                $query = $query . "AND track = ? ";
                array_push($values, $this->input->post('track'));
            }
            $rows = $this->db->query($query, $values)->result_array();
            $this->session->set_flashdata('assignments',$rows);
        }
        // generate table view data for use in view file
        function generate_assignments_view_data()
        {
            if(is_null($this->session->flashdata('assignments')))
            {
                $view_data = array('assignments' => $this->Assignment->fetch_all());
            }
            else
            {
                $assignments = $this->session->flashdata('assignments');
                $view_data = array('assignments' => $assignments);
            }
            return $view_data;
        }
    }
?>