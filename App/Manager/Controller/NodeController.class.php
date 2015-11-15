<?php
namespace Manager\Controller;
use Think\Controller;
/**
 * 节点控制器
 */
class NodeController extends BaseController {
	private $model;
    private $pageAll;
    private $order;
    private $where;
	public function _initialize(){
	 	parent::_initialize();
	 	$this->model=M('auth_rule');
	 	
       
    }
    public function index(){
        
     
    	
        $this->order=array('sort','id'=>'desc');

        $this->list=$this->cate_list($this->model,'',$this->order);
       
    	$this->display();
    }
    
    public function add(){
        
        if(IS_POST){
            $data=I('post.');
           
            if($this->add_com($this->model,$data)){
                $this->success('添加成功',U('Node/index'));
            }else{
                 $this->error('添加失败');
            }
        }else{
           
            $this->list=$this->cate_list($this->model,array('status'=>'1'),array('sort','id'=>'desc'));

            $this->display();
        }
    }
  
    public function edit(){
      
        $id=I('id',0,'intval');
        $this->where=array('id'=>$id);
        if(IS_POST){
            $data=I('post.');
          
            if(empty($data['icon'])){
                unset($data['icon']);
            }
            if($this->update_com($this->model,$this->where,$data)){
                $this->success('修改成功',U('Node/index'));
            }else{
                 $this->error('修改失败');
            }
        }else{
            $this->list=$this->cate_list($this->model,array('status'=>'1'),array('sort','id'=>'desc'));

            $this->info=$this->edit_com($this->model,$this->where);

            $this->display();
        }
    }
   
    public function del(){
        $id=I('id',0,'intval');
        $info=$this->info_com($this->model,array('pid'=>$id));
        if(empty($info)){
            if($this->del_com($this->model,array('id'=>$id))){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }else{
             $this->error('该分类下面有子类,请先删除子类');
        }
        
    }
}