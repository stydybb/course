<?php
namespace Hyx\Course\Components;
use Hyx\Course\Models\Course as Courses;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
class Course extends ComponentBase
{
	public function componentDetails(){
		return [
				'name'        => 'Course',
				'description' => 'PowerBuilder Fundamentals Course'
		];
	}
	
	public function onRun(){
		$this->addCss('assets/css/course.css');
		$this->addCss('assets/css/font-awesome.min.css');
		$this->addCss('assets/css/bootstrap.min.css');
		$this->addJs('assets/js/course.js');
		$menu = array();
		$menus = array();
		$node = array();
		$nodes = array();
		$id = input('to',1);
		$course = Courses::get();
		(array)$course;
		foreach($course as $k){
			   $node['unit'] = $k['unit'];
			   $node['id'] = $k['id'];
			   $node['title'] = $k['title'];
			   $node['body'] = $k['body'];
			   $node['category'] = $k['category'];
			   $nodes[] = $node;
			if(!in_array($k['unit'], $menu)){
			     $menu['unit'] = $k['unit'];
			     $menu['id'] = $k['id'];
			     $menu['title'] = $k['title'];
			     $menus[] = $menu;
			  }  
		}
		foreach ($menus as $k=>$v){
			$menus[$k]['node'] = $this->getNode($nodes,$v['unit']);
		}
		
		$this->id = $this->page['id'] = $id;
		$this->menuArray = $this->page['menuArray'] = $menus;
		$cousers = new Courses();
		$videoArray =$cousers->getVideo($id);
		$this->page->title = $videoArray['title'];
		$this->page->meta_title = $videoArray['title'];
		$this->page->meta_description ='';
		$this->videoArray = $this->page['videoArray'] = $videoArray;
	}
	
	public function getNode($nodes,$unit){
		   $nodeArray = array();
			foreach($nodes as $k){
				if($k['unit']==$unit){
					$nodeArray[] =$k;
				}
			}
		return $nodeArray;
	}
}
