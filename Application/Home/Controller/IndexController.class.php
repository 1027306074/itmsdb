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
				$remember = $_POST['remember'];
				$name =$_POST['info']['username'];
				$password =$_POST['info']['password'];
				if($remember == 1){
					 setcookie('name',$name,time()+3600);
					 setcookie('password',$password,time()+3600);
					 setcookie('remember',$remember,time()+3600);
					 }else{
					 setcookie('name',$name,time()-3600);
					 setcookie('password',$password,time()-3600);
					 setcookie('remember',$remember,time()-3600);
					 }
              
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
		if($_POST){
			$data['money'] = $_POST['money'];
			$data['carid'] =$_POST['car_id'];
			$data['chargetime'] = date("Y-m-d,H:i:s");
			$data['charge_man'] = $_SESSION['user']['username'];
			$charge=M('scarcharge');
			$fee = M('scarfee');
			$scarfee=$fee->where("carid = '{$_POST['car_id']}'")->find();
			$scarf['money']=$scarfee['money']+$_POST['money'];
			$fee->where("carid = '{$_POST['car_id']}'")->save($scarf);
			$res = $charge->add($data);
			$re=array();
			if($res){
				echo 1;die;
			}else{
				echo 2;die;
			}
			
		}
		
		$data011 = M('carinfo');
		$carinfo = $data011->join('scarfee on carinfo.number = scarfee.carid')->
		join('suser on carinfo.number = suser.car_num')->order('carinfo.number asc')->select();
		$this->assign('carinfo',$carinfo);
		$this->display();	
	}
	public function data012(){
		$charge=M('scarcharge');
		$info = $charge->join("carinfo on scarcharge.carid = carinfo.number")->select();
		$this->assign("info",$info);
		$this->display();	
	}
	public function data013(){
		$peccancy = M('peccancy');
		$pec_info = $peccancy->join('peccancytype on peccancy.pcode=peccancytype.pcode')->select();
		$this->assign('pec_info',$pec_info);
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
		$user=M('suser');
		$info = $user->select();
		$this->assign('info',$info);
		if($_POST){
			$username = $_POST['username'];
			$data['role'] = $_POST['key'];
			$re = $user ->where("username = '{$username}'")->save($data);
			if($re){
				echo 1;die;
			}else{
				echo 0;die;
			}
			
		}
		$this->display();	
	}
	public function data082(){
		$this->display();	
	}
	public function data091(){
		$this->display();	
	}
	public function data101(){
		$data011 = M('carinfo');
		$carinfo = $data011->join('scarfee on carinfo.number = scarfee.carid')->
		join('suser on carinfo.number = suser.car_num')->order('carinfo.number asc')->select();
		$this->assign('carinfo',$carinfo);
		if($_POST){
			$num = $_POST['data'];
			foreach($num as $k =>&$v){
				$is_black['is_black']=1;
				$car_info = M('suser')->where("car_num = '{$v}'")->find();
				$black_info['carid']=$v;
				$black_info['username']=$car_info['username'];
				$black_info['datetime']=date("Y-m-d,H:i:s");
				M('scarblacklist')->add($black_info);
				$res=$data011->where("number = '{$v}'")->save($is_black);
			}
			if($res){
				echo 1;die;
			}else{
				echo 0;die;
			}
		}
		$this->display();	
	}
	public function data102(){
		$log=M('setctralog');
		$info = $log->select();
		$this->assign('info',$info);
		$this->display();	
	}
	
}