<?php 
class M_home extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
}
?>