<?php
class registration_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }


    /*
     * Create New Researcher
     */
    public function insert_user($data, $table)
    {
        $this->db->trans_start();

        // $sql = "INSERT INTO researcher(userName,emailId) VALUES ('$userName', '$emailId');";
        $this->db->insert($table, $data);

        if ($this->db->affected_rows() > 0) {
            $userId = 'userid';
            $this->db->trans_complete();
            $maxval = $this->getmaxid($userId, $table);
            return $maxval;
        } else {
            return $this->db->_error_message() . print_r("");
        }

    }
    public function getmaxid($col, $table)
    {
        $this->db->select_max($col);
        $query = $this->db->get($table);
        foreach ($query->result() as $row) {
            $maxval = $row->$col;

        }
        return $maxval;
    }

}