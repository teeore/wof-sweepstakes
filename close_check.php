<?php
session_start();
$debug=1;
if($debug==1){
        $now=(isset($_SESSION['datetime1'])) ? $_SESSION['datetime1'] : '' ;
		if($now==''){
			 $now=date("YmdHis");
		}
}
else{
        $now=date("YmdHis");
}
$datetime = date("Y-m-d H:i:s");

$y=Substr($now,0,4);
$m=Substr($now,4,2);
$d=Substr($now,6,2);
$h=Substr($now,8,2);
$i=Substr($now,10,2);
$s=Substr($now,12,2);

// THIS IS THE OLD DATE
// if($now > 20130216145959){
// 	header("Location: closed.php");
// 	exit;
// }

if($now > 20140118145959){
    header("Location: closed.php");
    exit;
}
$t=$h.$i.$s;
if($t<150000){
    $today=date("l, F jS",(mktime (0,0,0,$m,  $d-1,  $y)));
    $bonus_puzzle_date=date("Y-m-d",(mktime (0,0,0,$m,  $d-1,  $y)));

}
else{
    $today=date("l, F jS",(mktime (0,0,0,$m,  $d,  $y)));
    $bonus_puzzle_date=date("Y-m-d",(mktime (0,0,0,$m,  $d,  $y)));
}

?>
