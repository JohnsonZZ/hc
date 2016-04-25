<?php
namespace Admin\Controller;
use Admin\Controller\ComController;
class ListController extends ComController {
    public function index(){
		$List = M('List');
		$count = $List->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count,8); // 实例化分页类 传入总记录数和每页显示的记录数(10)
		$list = $List->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$Page->setConfig('prev', '<');
		$Page->setConfig('next', '>');
		$Page->setConfig('header','');
		$show = $Page->show(); // 分页显示输出
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('list',$list);
		$this->display();
    }
	public function add(){
		$this->display();
    }
	public function edit(){
		$data['id'] = I('get.id');
		$List = M('List');
		$list = $List->where($data)->find();
		$this->assign('list',$list);
		$this->display();
	}
	public function update(){
		$id = I('post.id');
		$data['title'] = I('post.title');
		$data['content'] = $_POST['content'];
		$List = M('List');
		if($id){
			$result = $List->where('id ='.$id)->save($data);
			if($result){
				$this->success('修改成功', 'index');
			} else {
				$this->error('修改失败');
			}
		}else{
			$result = $List->add($data);
			if($result){
				$this->success('新增成功', 'add');
			} else {
				$this->error('新增失败');
			}
		}
	}
	public function del(){
		$lids = I('param.id');
		if(is_array($lids)){
			$lids = implode(',',$lids);
			$map['id']  = array('in',$lids);
		}else{
			$map['id'] = $lids;
		}
		$List = M('List');
		$result = $List->where($map)->delete();
		if($result){
			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
	}
}