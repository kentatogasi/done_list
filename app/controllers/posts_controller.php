<?php

class PostsController extends AppController
{
	var $name = 'Posts';
	var $autoLayout = false;
	var $paginate = array(
		'page' => 1,
		'conditions' => array(),
		'fields' => array('id','title','created'),
		'sort' => 'id',
		'limit' => 5,
		'direction' => 'asc',
		'recursive' => 0
	);
	
	function index() {
		$data = $this->paginate();
		$this->set('data',$data);//$this->set('posts',$this->Post->find('all',array('order' => "id")));
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
		if(!empty($this->data)){
			$this->Post->delete($this->data['Post']['id']);
		}
		$this->redirect('.');
	}
}