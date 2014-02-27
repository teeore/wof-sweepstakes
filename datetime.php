<?

// get current date
//if (!(isset($HTTP_SESSION_VARS['current']))) {
if (isset($_POST['hour'])) {
$timestamp = mktime($_POST['hour'],$_POST['min'],$_POST['sec'],$_POST['mon'],$_POST['day'],$_POST['year']);
// $timestamp = mktime($hour,$min,$sec,$mon,$day,$year]);
$current = getdate ($timestamp);
} else {
$current = getdate();
}
session_start();
$_SESSION['current'] = $current;


// format

if ($current["mon"] < 10 && strlen($current["mon"]) < 2) {
    $current["mon"] = "0" . $current["mon"];
}

if ($current["hours"] < 10 && strlen($current["hours"]) < 2) {
    $current["hours"] = "0" . $current["hours"];
}

if ($current["minutes"] < 10 && strlen($current["minutes"]) < 2) {
    $current["minutes"] = "0" . $current["minutes"];
}

if ($current["seconds"] < 10 && strlen($current["seconds"]) < 2) {
    $current["seconds"] = "0" . $current["seconds"];
}

if ($current["mday"] < 10 && strlen($current["mday"]) < 2) {
    $current["mday"] = "0" . $current["mday"];
}

if ($current["wday"] < 10 && strlen($current["wday"]) < 2) {
    $current["wday"] = "0" . $current["wday"];
}

// turn it into strings
//$datetime = $current["year"]."-".$current["mon"]."-".$current["mday"]." ".$current["hours"].":".$current["minutes"].":".$current["seconds"]." ".$ampm;
$datetime1 = $current["year"].$current["mon"].$current["mday"].$current["hours"].$current["minutes"].$current["seconds"];
$daytime = $current["wday"].$current["hours"].$current["minutes"].$current["seconds"];
$dashdate = $current["year"]."-".$current["mon"]."-".$current["mday"];
$_SESSION['datetime1'] = $datetime1;
$_SESSION['daytime'] = $daytime;
$_SESSION['dashdate'] = $dashdate;

//echo "datetime is ".$datetime1."<br>";
//echo "dashdate is ".$dashdate."<br>";
//echo "daytime is ".$daytime;

//} else {
//$current = $HTTP_SESSION_VARS['current'];
//$datetime1 = $HTTP_SESSION_VARS['datetime1'];
//$daytime = $HTTP_SESSION_VARS['daytime'];
//$dashdate = $HTTP_SESSION_VARS['dashdate'];
//}


header("Location: ./index.php");


?>