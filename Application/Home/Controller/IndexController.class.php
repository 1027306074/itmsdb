<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		if(IS_POST){
			$info = I('info');
            $user = D('suser')->where($info)->find();
            $res = array();
            if(empty($user)){
                $this->error("账号密码不匹配，请重试！");die;
            }else{
              
                $_SESSION['user']['username'] = $user['username'];
              $this->success("登录成功！",U('Index/index2'));die;
              
            }
		}
		$this->display();
    }
	public function logout(){
		session(null);
		$this->success('退出成功', U('Index/index'));
	}
	public function index2(){
		$this->display();	
	}
	public function data011(){
		$this->display();	
	}
	public function data012(){
		$this->display();	
	}
	public function data013(){
		$this->display();	
	}
	public function data021(){
		$this->display();	
	}
	public function data031(){
		$this->display();	
	}
	public function data041(){
		$this->display();	
	}
	public function data051(){
		$this->display();	
	}
	public function data052(){
		$this->display();	
	}
	public function data061(){
		$this->display();	
	}
	public function data071(){
		$this->display();	
	}
	public function data072(){
		$this->display();	
	}
	public function data081(){
		$this->display();	
	}
	public function data082(){
		$this->display();	
	}
	public function data091(){
		$this->display();	
	}
	public function data101(){
		$this->display();	
	}
	public function data111(){
		$this->display();	
	}
	
}