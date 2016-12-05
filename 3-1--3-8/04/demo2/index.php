<?php
echo "<br />------------for 1------------------<br />";
for($i=1;$i<=5;$i++){
	echo $i."<br />";
}
echo $i;
/*
 * 
 * 	起始 	终止						循环体				步长
		 1      1《=5				打印1				1++
		 2		2《=5					打印2				2++
		.....
		5		5<=5					打印5				5++
		6 		6《=5  false 终止
 * 
 * */

echo "<br />------------for 2------------------<br />";
echo "<table border='1' align='center'>";
echo "<tr>";
	for($j=1;$j<=100;$j++){
		echo "<td>".$j."</td>";
	}
echo "</tr>";
echo "</table>";

echo "<br />------------for 3  9*9------------------<br />";
for($m=1;$m<=3;$m++){
	for($n=1;$n<=$m;$n++){
		echo $m."*".$n."=".$m*$n."&nbsp;&nbsp;";
	}
	echo "<br />";
}
/*
 * 起始条件 		终止条件					循环体												步长值
 * $m=1			$m<=3	起始 	终止			循环体				步长
 * 										$n=1	1<=1 t    1*1=1 空空		$n++=2
 * 										$n=2	2<=1 f  跳出											
 * 										<br />																$m++=2
 * 
 *$m=2			$m<=3	起始 	终止			循环体				步长
 * 										$n=1	1<=1 t    2*1=1 空空		$n++=2
 * 										$n=2	2<=2 t    2*2=4 空空      $n++=3
 * 										$n=3	3<=2 f		跳出											
* 										<br />																$m++=3
 * 
 * $m=3			$m<=3	起始 	终止			循环体				步长
 * 										$n=1	1<=3 t    3*1=1 空空		$n++=2
 * 										$n=2	2<=3 t    3*2=6 空空      $n++=3
 * 										$n=3	3<=3 t		3*3=9空空		$n++=4
 * 										$n=4	4<=3 f 跳出											
* 										<br />																$m++=4
* $m=4			$m<=3  f 终止循环
 * 
 * */

echo "<br />------------while------------------<br />";
$k = 1;  //起始条件
while($k<=5){
	echo $k."<br />";
	$k++;
}


echo "<br />------------while 9*9------------------<br />";
$s=1; //外层循环的起始条件
while($s<=9){
	$t = 1;//内层循环的起始条件
	while($t<=$s){
		echo $s."*".$t."=".$s*$t."&nbsp;&nbsp;";
		$t++;
	}
	echo "<br />";
	$s++;
}

echo "<br />------------do...while()------------------<br />";
$u = 1;
do{
	echo $u."<br />";
	$u++;
}while($u<=5);
/*
 * 起始条件		循环体				步长值				终止条件
 * $u=1			1换行				$u++=2			$u<=5  t
 * $u=2			2换行				$u++=3			$u<=5  t
 *  $u=3			3换行				$u++=4			$u<=5  t
 *  $u=4			4换行				$u++=5			$u<=5  t
 *  $u=5			5换行				$u++=6			$u<=5  f 终止循环
 *  
 *  $u=10			10换行				$u++=11		$u<=5 f终止循环
 * 
 * */


echo "<br />------------do...while()9*9------------------<br />";
$f = 1;
do{
	$g=1;
	do{
		echo $f."*".$g."=".$f*$g."&nbsp;&nbsp;";
		$g++;
	}while($g<=$f);
	echo "<br />";
	$f++;
}while($f<=3);

echo "<br />------------continue break------------------<br />";
for($w=1;$w<=5;$w++){
	if($w==3){
		//continue;
		break;
	}
	echo $w."<br />";
}
/*
 * 
 * 	起始 	终止						循环体				步长
		 1      1《=5					打印1				1++
		 2		2《=5					打印2				2++
$w=3		3<=5 true			不执行	/终止循环			$w++=4
$w=4		4<=5 true			4						$w++=5
$w=5		5<=5 true			5						$w++=6
$w=6		$w<=5 false 跳出循环
		
 * 
 * */


























