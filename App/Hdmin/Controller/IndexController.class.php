<?php
namespace Hdmin\Controller;
use Hdmin\Controller\ComController;
class IndexController extends ComController {
    public function index(){
		$log = M('Log')->order('time desc')->select();
		$this->assign('log',$log);
		$this->display();
    }
}