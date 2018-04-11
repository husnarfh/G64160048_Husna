<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function data_base(){
		
		$this->data['hasil'] = $this->model->getUser('booksie');
		$this->load->view('data-base', $this->data);
	}

	public function form_input(){
		$this->load->view('form-input');
	}

	public function insert(){
		$title = $_POST['title'];
		$email = $_POST['email'];
		$isbn = $_POST['isbn'];
		$genre = $_POST['genre'];
		$synopsis = $_POST['synopsis'];
		$data = array('title' => $title, 'email' => $email, 'isbn' => $isbn, 'genre' => $genre, 'synopsis' => $synopsis);
		$create = $this->model->createData('booksie',$data);
		if($create > 0){
			redirect('welcome/data_base');
		} else{
			echo 'Fail';
		}
	}

	public function delete($id){
		$hapus = $this->model->deleteData('booksie',$id);
		if($hapus > 0){
			redirect('welcome/data_base');
		} else{
			echo 'Fail';
		}
	}

	public function form_edit($id){
		$this->data['dataEdit'] = $this->model->dataEdit('booksie',$id);
		$this->load->view('form-edit',$this->data);
	}

	public function update($id){
		$title = $_POST['title'];
		$email = $_POST['email'];
		$isbn = $_POST['isbn'];
		$genre = $_POST['genre'];
		$synopsis = $_POST['synopsis'];
		$data = array('title' => $title, 'email' => $email, 'isbn' => $isbn, 'genre' => $genre, 'synopsis' => $synopsis);
		$edit = $this->model->editData('booksie',$data,$id);
		if($edit > 0){
			redirect('welcome/data_base');
		} else{
			echo 'Fail';
		}
	}
}
