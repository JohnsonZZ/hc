<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
		$List = M('List');
		$count = $List->count(); // ��ѯ����Ҫ����ܼ�¼��
		$Page = new \Think\Page($count,10); // ʵ������ҳ�� �����ܼ�¼����ÿҳ��ʾ�ļ�¼��(10)
		$list = $List->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$Page->setConfig('prev', '<');
		$Page->setConfig('next', '>');
		$Page->setConfig('header','');
		$show = $Page->show(); // ��ҳ��ʾ���
		$this->assign('page', $show); // ��ֵ��ҳ���
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