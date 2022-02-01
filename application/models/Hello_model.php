<?php
class Hello_model extends CI_Model {

	public function get_hello ()
	{
		$hello = "Hello World!";
		return $hello;
	}
}