<?php
namespace Home\Controller;
use Think\Controller;
class LogoutController extends Controller {

	public function logout(){
		$_SESSION['user']['username']='';
		$sc=new \Home\Controller\IndexController(); 
		 $sc->index();die;
	}

	
}