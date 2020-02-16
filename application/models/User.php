<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User extends CI_Model {
	public $data = array();
	// protected $table = 'users';  for sql purposes

	function __construct() {
		parent::__construct();
		$data = array(
			'R1JC04' => array(
				'first_name' => 'John Carlo',
				'last_name' => 'De Leon',
				'age' => '23',
				'address' => 'Singapore',
			),
			'R2MK11' => array(
				'first_name' => 'Mikha',
				'last_name' => 'Bartolo',
				'age' => '22',
				'address' => 'America',
			),
			'R3JS29' => array(
				'first_name' => 'Joshua',
				'last_name' => 'De Leon',
				'age' => '20',
				'address' => 'China',
			),
			'R4CM17' => array(
				'first_name' => 'Mae',
				'last_name' => 'De Leon',
				'age' => '12',
				'address' => 'Korea',
			),
		);
	}

	function getUser($ref_code) {
		// via sql
		// $query = $this->db->get_where($this->table, array('ref_code'=>$ref_code));
		// return $query->row();

		if(isset($this->data[$ref_code])) {
			return $this->data[$ref_code];
		} else {
			return false;
		}
	}

}