<?php
class testProtected{
	protected $name = "zhangsan";
	protected $age = 20;
	protected function demo(){
		echo "<br />aaaaa";
	}
	function demo1(){
		echo $this->name; //类内部访问  正常
	} 
}
$p = new testProtected();
//echo $p->demo(); 类外不能访问
//$p->demo1();
class testSon extends testProtected{
	function demo2(){
		echo $this->name; //子类可以访问受保护的成员
		$this->demo();
	}
}

$ts = new testSon();
$ts -> demo2();


















