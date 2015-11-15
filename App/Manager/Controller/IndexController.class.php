<?php
namespace Manager\Controller;
use Think\Controller;
class IndexController extends BaseController {
	public function _initialize(){
       parent::_initialize();
    }
    public function index(){
    	$this->userCount=M('users')->count();
    	$this->articleCount=M('article')->count();
    	$this->display();  
    }
}