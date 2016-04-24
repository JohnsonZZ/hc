<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		if(cookie('account')||session('account')){
			$this->display();
		}else{
			$this->redirect('Login/index');
		}
    }
	
}