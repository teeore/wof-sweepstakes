<?php
require_once($_ENV['TOP_ROOT'] . '/global/php/tools/cryptkeeper.class.php');
$array = array('file_name'=>'spetv_wheeloffortune_v8_20131218', 'vkey'=>'i2K6zekDxpiRkEk8');
$ck=new CryptKeeper($array);

$answer=(isset($_POST['bonus'])) ? htmlentities($_POST['bonus'],ENT_QUOTES) : '';
$puzzledate=(isset($_POST['puzzledate'])) ? htmlentities($_POST['puzzledate']) : '';
$email=(isset($_POST['email'])) ? htmlentities(strtolower($_POST['email'])) : '';
$email = preg_match( "`^[a-z0-9!#$%&'*+\/=?^_\`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_\`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$`i", $email) ? $email : '';
$firstname=(isset($_POST['firstname'])) ? preg_replace("/[^a-zA-Z'-\s]+/", '', strtolower(trim($_POST['firstname']))) : '';
$lastname=(isset($_POST['lastname'])) ? preg_replace("/[^a-zA-Z'-\s]+/", '', strtolower(trim($_POST['lastname']))) : '';
$address1=(isset($_POST['address'])) ? preg_replace("#[^A-Za-z0-9\s-]#i", '', $_POST['address']) : '';
$address2=(isset($_POST['address2'])) ? preg_replace("#[^A-Za-z0-9\s-]#i", '', $_POST['address2']) : '';
$city= (isset($_POST['city'])) ? preg_replace("/[^a-zA-Z\s]+/", '', $_POST['city']) : '';
$state= (isset($_POST['state'])) ? preg_replace("/[^a-zA-Z\s]+/", '', $_POST['state']) : '';
$zip=(isset($_POST['zip'])) ? preg_replace("#[^0-9]#i", '',substr(trim($_POST['zip']),0,5)) : '';
$zip = preg_match( "/^[0-9]{5}$/", $zip) ? $zip : '';
$gender=(isset($_POST['gender'])) ? htmlentities($_POST['gender'],ENT_QUOTES) : '';
$phone=(isset($_POST['phone'])) ? preg_replace("#[^0-9]#i", '',substr(trim($_POST['phone']),0,10)) : '';
$dob_year=(isset($_POST['dob_year'])) ? (int) $_POST['dob_year'] : 0;
$dob_month=(isset($_POST['dob_month'])) ? (int) $_POST['dob_month'] : 0;
$dob_day=(isset($_POST['dob_day'])) ? (int) $_POST['dob_day'] : 0;
$optin1=(isset($_POST['optin1'])) ? (int)$_POST['optin1'] : 0;
$optin2=(isset($_POST['optin2'])) ? (int)$_POST['optin2'] : 0;
$type=isset($_POST['formType']) ? ($_POST['formType']=='facebook' ? 'facebook' : 'standalone') : '';
$referralId=1656;
$date2 = date("Y-m-d");
$referralUrl = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '';
$table_name='user';
require_once('close_check.php');

if(preg_match("/^[0-9]{1}$/i", $dob_month)) { $dob_month = "0" . $dob_month ;}
//$dob_day = date( 't', strtotime( $dob_year . '-' . $dob_month . '-01' ) );
$dob_day='01';
$dob = "$dob_year-$dob_month-$dob_day";

//lets do all necessary checks
if($bonus_puzzle_date != $puzzledate){
	header("Location: noservice.php#here");
	exit;
}
//dob check to see if 09/1992.  if dob is after 09/1992 then they are underage

if($dob_year >1996){
        setcookie('register','no');
        header("Location: noservice.php#here");
        exit;
}
else if($dob_year==1996){
	if($dob_month > 1){
		 setcookie('register','no');
        header("Location: noservice.php#here");
        exit;
	}

}

if($email=='' || $firstname=='' || $lastname=='' || $dob_year===0 || $dob_month===0 || $address1=='' || $zip=='' || $city=='' || $state=='' || $phone=='' || $answer=='' || $puzzledate=='' || $type=='' || empty($_POST)){
    header("Location: noservice.php#here");
    exit;
}


	$dbh=$ck->get_db_handle();
	// begin check to see if email address is existing
	$sql = "SELECT UserId FROM $table_name WHERE Email = AES_ENCRYPT(?,?) and PuzzleDate=?";
	$sth=$dbh->prepare($sql);
	$sth->execute(array($email,$ck->key,$puzzledate));
	$row = $sth->fetch(PDO::FETCH_ASSOC);
	$userid = $row['UserId'];
        $already_registered = 0;
	$sth=null;
    if($userid == "") {
        $already_registered = 0;
    } else {
        $already_registered = 1;
	}		

    // begin if already registered / not registered SQL
    if ($already_registered == 0) {
       // begin insert new user registration

			$sql = "INSERT INTO $table_name (CreateDate,Email, FirstName, LastName, Address1, City, State, Zip, Phone, DOB, Gender, Answer, Optin1, Optin2,PuzzleDate,Refid,Type) VALUES (?,AES_ENCRYPT(?,?),AES_ENCRYPT(?,?),AES_ENCRYPT(?,?),AES_ENCRYPT(?,?),?,?,?,AES_ENCRYPT(?,?),?,?,?,?,?,?,?,?)";
			$sth=$dbh->prepare($sql);
			$sth->execute(array($datetime,$email,$ck->key,$firstname,$ck->key,$lastname,$ck->key,$address1,$ck->key,$city,$state,$zip,$phone,$ck->key,$dob,$gender,$answer,$optin1,$optin2,$puzzledate,$referralId,$type));
			$sth=null;
			header("Location: thanks.php#here");
    } else {
			header("Location: alreadyentered.php#here");
    }
?>

