<?php
namespace Manager\Controller;
use Think\Controller;
/**
 * 更新缓存
 */
class CacheController extends BaseController {
	
	public function _initialize(){
	 	parent::_initialize();
	 	
    }
    /*更新缓存*/
    public function index(){
         sp_clear_cache();
        $this->success('缓存更新成功',U('Index/index'));
     
    }
   
 
}