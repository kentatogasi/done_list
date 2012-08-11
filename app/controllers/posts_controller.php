<?php

class PostsController extends AppController
{
	var $name = 'Posts';
	public $autoLayout = false;
	function index() {
		$this->set('posts',$this->Post->find('all',array('order' => "id")));
	}
	
	function view($id = null){
		$this->Post->id = $id;
		
		$this->set('post' , $this->Post->read());
	}
	function add(){
		if(!empty($this->data)){
			$this->Post->save($this->data);
		}
		$this->redirect('.');
	}
	function delete(){
		
	}
}