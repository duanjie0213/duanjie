<?php
class getSet{
	private $name = "zhangsan";
	private $age = 20;
	function  demo(){
		echo 1111;
	}
	//__set();
	function __set($n,$v){  //$n 属性名称    $v 属性值。 
		$this->$n = $v;
	}
	//__get();
	function __get($na){
            if(!isset( $this->$na )){echo "未定义的变量".$na;return;}  // 对没有定义的变量 进行判断
		return $this->$na;
	}
        function demo1(){
            echo $this->name;
        }
}


$gs = new getSet();
$gs->name = "jack1";     // 自动调用__set()   $n = "name"  $v = "jack"
$gs->name1 = "lisi";
$gs->age = 111; 
echo $gs->name;         //自动调用__get();   $na = name
echo $gs->age;
echo "<br />-------------------------------<br />";
$gs->demo1();
echo $gs->name1;
echo $gs->name2;
echo $gs->name3;



