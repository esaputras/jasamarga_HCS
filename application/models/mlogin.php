<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mlogin extends CI_Model {
	
	function cek_login($tableName, $where){
		return $this->db->get_where($tableName, $where);
	}
	
}
