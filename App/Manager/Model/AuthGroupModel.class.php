<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		权限组模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class AuthGroupModel extends Model {
	
	protected $_validate = array(
      array('title','require','角色名称必须填写'), //默认情况下用正则进行验证
    
   );

}
?>