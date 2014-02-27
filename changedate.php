<?php
session_start();
if (isset($_GET['resetsession'])){
session_destroy();
?>

<html>

<head>
<title>Test Date-driven Pages</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript1.2">
<!--


function numeralsOnly(evt) {
//evt = (evt) ? evt : event;
//var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
//((evt.which) ? evt.which : 0));
// if (charCode > 31 && (charCode < 48 || charCode > 57)) {
// alert("Enter numerals only in this field.");
// return false;
// }
return true;
}
function autofocus(field, limit, next, evt) {
//evt = (evt) ? evt : event;
//var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
//((evt.which) ? evt.which : 0));
//if (charCode > 31 && field.value.length == limit) {
// field.form.elements[next].focus();
// field.form.elements[next].select();
// }
}

function MM_callJS(jsStr) { //v2.0
return eval(jsStr)
}
//-->
</script>
</head>
<body onLoad="MM_callJS('document.forms[0].elements[0].select();')">
<!--base href="http://sl-sp-dev01.sonypictures.com/sweepstakes/jeopardy_clue_for_you_10142003/index.php"-->
<p>Session Variables Reset...<br /><br />
<?php
}
?>
<B>Use this page to &quot;fake&quot; a date and time for testing.</B></p>
<p><B><font size="4">Since the date is held in a session, if you want to test
a different date, you must click the &quot;Reset Session&quot; Button</font></B><br />
<br />
<?php
  $datetime1=(isset($_SESSION['datetime1'])) ? $_SESSION['datetime1'] : '';
  $daytime=(isset($_SESSION['daytime'])) ? $_SESSION['daytime'] : '';
  $dashdate=(isset($_SESSION['dashdate'])) ? $_SESSION['dashdate'] : '';
echo $datetime1."<br />".$daytime."<br />".$dashdate."<br />";
?> </p>
<form name="testform" action="datetime.php" method="post" target="_top">
<p>Month
<input name="mon" type="text" id="mon" value="01" size="3" maxlength="2">
Day
<input name="day" type="text" id="day" value="13" size="3" maxlength="2">
Year
<input name="year" type="text" id="year" value="2014" size="5" maxlength="4">
Hour
<select name="hour" id="hour">
<option value="0">12 AM</option>
<option value="1">1 AM</option>
<option value="2">2 AM</option>
<option value="3">3 AM</option>
<option value="4">4 AM</option>
<option value="5">5 AM</option>
<option value="6">6 AM</option>
<option value="7">7 AM</option>
<option value="8">8 AM</option>
<option value="9">9 AM</option>
<option value="10">10 AM</option>
<option value="11">11 AM</option>
<option value="12">12 PM</option>
<option value="13">1 PM</option>
<option value="14" >2 PM</option>
<option value="15" selected>3 PM</option>
<option value="16">4 PM</option>
<option value="17">5 PM</option>
<option value="18">6 PM</option>
<option value="19">7 PM</option>
<option value="20">8 PM</option>
<option value="21">9 PM</option>
<option value="22">10 PM</option>
<option value="23">11 PM</option>
</select>
Minute
<input name="min" type="text" id="min" value="45" size="3" maxlength="2">
Seconds
<input name="sec" type="text" id="sec" value="15" size="3" maxlength="2">
<input type="submit" name="Submit" value="Submit">
</p>
</form>
<form name="form1" method="get" action="changedate.php">
<input type="hidden" name="resetsession" value="1" />
<input type="submit" value="Reset Session" />
</form>
</body>
</html>