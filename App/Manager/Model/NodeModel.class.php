<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		Node模型
 *		editor	wxy
 *		date		2015-5-6 13:34:57
 *****/
class NodeModel extends Model {
	const TBL_NODE="node";
	const TBL_ADMIN="admin";
	const TBL_ACCESS="access";
	const TBL_ROLE="role";
	
	

	//获取菜单			@wxy	2015-5-7 09:03:49
	public function getMenu($id){
		$where['n.status']=array('eq','开启');
	    $where['n.type']=array('eq','是');
	    $where['a.id']=array('eq',$id);
		$menu=M(self::TBL_ADMIN)->alias('a')
		->join(' left join '.C('DB_PREFIX').self::TBL_ROLE.' r on r.id=a.role_id')
		->join(' left join '.C('DB_PREFIX').self::TBL_ACCESS.' ac on ac.role_id=r.id')
		->join(' left join '.C('DB_PREFIX').self::TBL_NODE.' n on n.id=ac.node_id')
		->field('n.name,n.title,n.id,n.pid,n.icon')
		->where($where)->order('n.sort')->select();
		//echo M(self::TBL_ADMIN)->getLastSql();exit;
		return $menu;
	}

	

}
?>