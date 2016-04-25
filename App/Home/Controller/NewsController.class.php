<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
		$List = M('List');
		$count = $List->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count,10); // 实例化分页类 传入总记录数和每页显示的记录数(10)
		$list = $List->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$Page->setConfig('prev', '<');
		$Page->setConfig('next', '>');
		$Page->setConfig('header','');
		$show = $Page->show(); // 分页显示输出
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('list',$list);
		$this->display();
	}
	public function news(){
		$data['id'] = I('get.theme');
		$List = M('List');
		$list = $List->where($data)->find();
		$news = $List->order('id desc')->limit(4)->select();
		$like = $List->order('rand()')->limit(4)->select();
		$this->assign('news',$news);
		$this->assign('like',$like);
		$this->assign($list);
		$this->display();
	}
}