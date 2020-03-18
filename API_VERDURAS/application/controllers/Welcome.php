<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelo');
		$this->output->set_content_type("application/json");
		$this->output->set_header("Access-Control-Allow-Origin: *");
		$this->output->set_header("Access-Control-Allow-Methods: GET, OPTIONS");
		$this->output->set_header("Access-Control-Allow-Headers: Content-Type, Content-Length,Accept-Encoding");
	}

	public function insert(){
		echo $this->modelo->insert(
			array(
				
				'nombre' => $this->input->post('nombre'),
				'precio' => $this->input->post('precio'),
				'unidades' => $this->input->post('unidades'),
			)
		);

	}

	public function delete(){
		echo $this->modelo->delete(
			array(
				'id' => $this->input->post('id')
			)
		);
	}

	public function update(){ //recibe dos arreglos
		echo $ths->modelo->update(
			array( //condicion
				'id' => $this->input->post('id')
			), 
			array( //datos a actualizar
					
				'nombre' => $this->input->post('nombre'),
				'precio' => $this->input->post('precio'),
				'unidades' => $this->input->post('unidades'),
			)
		);
	}

	public function get_all(){
		echo $this->modelo->get_all();
	}
}
