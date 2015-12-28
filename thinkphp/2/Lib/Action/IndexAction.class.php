<?php
header('Content-type:text/html; charset=utf-8');
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$str="hello javascript";
		$me['name']="liao dong";
		$me['age']=24;
		//$this->name=$name;
		$time=time();
		$person=array(
			1=>array('name'=>'Jack','age'=>'18'),
			2=>array('name'=>'Tom','age'=>'19'),
			3=>array('name'=>'Peter','age'=>'20'),
			4=>array('name'=>'Mary','age'=>'21')
		);
		$num=50;
		$name='xiaohong';
		$this->assign('name',$name);
		$this->assign('num',$num);
		$this->assign('person',$person);
		$this->assign('time',$time);
		$this->assign('me',$me);
		$this->assign('str',$str);
		$this->display();
    }
	
	//thinkphp调试
	/*public function user(){
		//echo C('name');
		//trace('name',C('name'));
		//dump($_SERVER);
		G('run');
		echo 1;
		echo "<br/>";
		echo G('run','end');
		$this->display('user');
		}*/
		
	//数据库连接
	public function user(){
		//实例化基础模型
		//$user=new Model('user');   //表名、表前缀、数据库连接信息
		//$user=M('user');
//		$data=$user->select();
//		dump($data);
		
		//实例化用户自定义模型，需要在Model文件夹下定义类
			//$user=new UserModel();
//			$user=D('User');
//			$user->getinfo();


		//实例化公共模型，需要在Model文件夹下定义类
			//$user=D('User');
//			$user->strmak('yuytuu');
//			echo "<br/>";
//			$user->getinfo();


		//实例化空模型
		//$model=M();
		//$data=$model->query('select * from think_user');   //读取日常 selet
		//dump($data);
		//$ui=$model->execute('update think_user set user="liaodong" where id=1');  //写入  insert update
//		dump($ui);


		//数据库CURD操作
		//add 创建多条数据
		$data=array(
			0=>array(
				'user'=>'东皇太一',
				'pass'=>md5(12345),
				'address'=>'秦朝咸阳'
			),
			1=>array(
				'user'=>'秦始皇',
				'pass'=>67888,
				'address'=>'秦朝咸阳'
			),
			2=>array(
				'user'=>'扶苏',
				'pass'=>8999,
				'address'=>'丽都'
			),
			3=>array(
				'user'=>'葛聂',
				'pass'=>'yuanhong',
				'address'=>'晋阳'
			),
			4=>array(
				'user'=>'卫庄',
				'pass'=>788,
				'address'=>'七杀门'
			)
		);
		
		//echo M('User')->add($data);
		//echo M('User')->addall($data);
		//echo M()->getLastSql();    //这条是调试语句，打印出mysql语句，只适合mysql语法
		//$this->display();    //使用调试工具也可查看插入语句，需要在配置项中开启'SHOW_PAGE_TRACE'=>true
		
		
		
		
		
		
		
		
		
		
		//select 查询
		//1、全部查找
		//$data=M('User')->select();
		//dump($data);
		
		//2、根据字符串查找
		//$data=M('User')->where('id=1')->select();
		
		//3、使用数组进行查询,并设置多重条件
		//$where['address']='秦朝咸阳';
//		$where['user']='东皇太一';
//		$where['_logic']='or';
		
		//4、表达式方式查询：gt egt lt elt eq neq in notin between not between like 
		//$where['字段名']=array('表达式','查询条件')
		//$where['id']=array('between','24,49');
		//$where['user']=array('like','%mr%');
		
		//5、区间查询
		//$where['id']=array(array('gt',49),array('lt',22),'or');
		
		//6、混合用法
		/*$where['id']=array('gt',22);
		$where['_string']='id<48';
		$data=M('User')->where($where)->select();*/
		
		//7、统计用法(count-统计数量；max-最大值； min-最小值； avg-平均值； sum-求和)
		//$data=array();
//		$data[0]=M('User')->count();	
//		$data[1]=M('User')->max('id');	
//		$data[2]=M('User')->min('id');	
//		$data[3]=M('User')->avg('id');	
//		$data[4]=M('User')->sum('id');	
		//dump($data);
		
		
		
		
		
		
		//save 更新
//		$update['pass']=78767657;
//		$where['id']=49;
//		$data=M('User')->where($where)->save($update);
//		dump($data);



		//delete 删除
		//$where['id']=21;
		//$data=M('User')->where($where)->delete();
		$data=M('User')->delete(51);
		dump($data);
		$this->display();
		
		
		
		
		
		
		
		}
		
}