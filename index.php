<?php
include_once('close_check.php'); 
$root = 'http://www.wheeloffortune.com/minisites/wheelv8/';
$fileroot = "./"; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wheel of Fortune - Wheel &amp; V8 Sweepstakes</title>
<meta name="viewport" content="width=1000" />
<meta name="description" content="I'm watching Wheel of Fortune for the chance to win $1000! Join me and tune in Jan. 13-17 for the chance to win! #WheelV8" />
<meta name="keywords" content="Pat, Vanna, America’s Game, Wheel of Fortune, V8, Juice, Healthy, Cash, Win, Sweepstakes" />
<link rel="image_src" href="http://flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/share_image.jpg" />
<meta property="og:title" content="Wheel of Fortune - Wheel &amp; V8 Sweepstakes"/>
<meta property="og:url" content="http://www.wheeloffortune.com/minisites/wheelv8/"/>
<meta property="og:description" content="I'm watching Wheel of Fortune for the chance to win $1000! Join me and tune in Jan. 13-17 for the chance to win! #WheelV8"/>
<meta property="og:image" content="http://flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/share_image.jpg"  name="thumb"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="Wheel of Fortune - Wheel &amp; V8 Sweepstakes"/>


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300" rel="stylesheet" type="text/css" />
{{> us-sp-slim-treatments-styles }}
{{> us-sp-slim-treatments-scripts }}

<link rel="stylesheet" href="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/active/styles/main.css">
<link rel="stylesheet" href="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/active/styles/validationEngine.jquery.css"> 

<!--[if lte IE 8]>
	<link rel="stylesheet" href="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/active/styles/ie.css">
<![endif]-->
</head>

<body>
<!-- header -->
	{{> us-sp-slim-treatments-common-header }}
<div id="maincontainer">
	<div id="socialbar">
		<div class="content">
			<ul id="social">
				<li class="share">Share:</li>
				<li class="social"><a title="Share on Facebook" rel="external" class='fanfacebook_button promotion popup' href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://www.wheeloffortune.com/minisites/wheelv8/&p[images][0]=http://flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/share_image.jpg&p[title]=Wheel%20of%20Fortune%20-%20Wheel%20%26%20V8%20Sweepstakes&p[summary]=I%27m%20watching%20Wheel%20of%20Fortune%20for%20the%20chance%20to%20win%20%241000!%20Join%20me%20and%20tune%20in%20Jan.%2013-17%20for%20the%20chance%20to%20win!%20%23WheelV8"></a></li>
				<li class="social"><a title="Share on Twitter" rel="external" class='followtwitter_button promotion popup' href="http://twitter.com/intent/tweet?text=I%27m%20watching%20%40WheelofFortune%20Jan.%2013-17%20for%20the%20chance%20to%20win%20%23CASH%20-%20%241000!%20http%3A%2F%2Fwww.wheeloffortune.com%2Fminisites%2Fwheelv8%2F%20%23WheelV8"></a></li>
				<li class="social"><a rel="external" title="Get Glue" class='getglue_button promotion' href="http://getglue.com/tv_shows/wheel_of_fortune"></a></li>
				<li class="social"><a rel="external" title="Follow Instagram" class='instagram_button promotion' href="http://instagram.com/wheeloffortune#"></a></li>
				<li class="social"><a rel="external" title="Follow YouTube" class='youtube_button promotion' href="http://www.youtube.com/wheeloffortune"></a></li>
				<li class="hash">#WheelV8</li>
			</ul>
		</div>
	</div>
<!-- page content -->
	<div id="container">
		<div id="sitecontent">
		<!-- main graphic -->
		<div id="maingraphic">
			<a id="wheel" class="wheeloffortune_image promotion" href="http://www.wheeloffortune.com/" rel="external"></a>
			<a id="v8logo" class="v8logo_image promotion" href="http://www.v8juice.com/" rel="external"></a></div>
		</div>
		<!-- video -->
		<div id="video-outer">
			<div id="videocontainer" class="indexPage">
				<a href="#" id="playvideo" title="Watch The Video"></a>
			</div>
		</div>
		<!-- instructions -->
		<div id="instructions">
			<h2>How To <span>Enter</span></h2>
			<ul id="steps">
				<li id="step1"><span class="bullet"></span>Watch Wheel of Fortune January 13-17.</li>
				<li id="step2"><span class="bullet"></span>Write down the "Special <em>V8&reg;</em> Puzzle Of The Day" Solutions.</li>
				<li id="step3"><span class="bullet"></span>After each show airing January 13-17, <span>return</span> to this site or click the sweepstakes graphic on <span><a href="http://www.wheeloffortune.com/" class="wheeloffortune_text promotion" rel="external">WheelofFortune.com.</a></span></li>
				<li id="step4"><span class="bullet"></span><span>Complete</span> all fields on the entry form, including the correct "Special <em>V8&reg;</em> Puzzle Of The Day" Solution.</li>
			</ul>
			<p>Improve your chances to WIN by entering all five daily sweepstakes!</p>
		</div>

		<!-- entry form -->	
		<div id="entryform">
		<h2><span>Entry</span> Form</h2>
		<form id="entry" class="scaletext" action="registration.php" method="post">
		<p class="form-info">Please complete the following online form.  Fields marked with * are required.</p>
		
		    <label for="firstname">First Name*
			<input type="text" name="firstname" id="firstname" class="validate[required]" size="62" tabindex="1" /></label>
		    
			<label for="lastname">Last Name*
			<input type="text" name="lastname" id="lastname" class="validate[required]" size="40" tabindex="2" /></label>
		    
			<label for="email">Email*
			<input type="text" name="email" id="email" class="validate[required,custom[email]]" size="75" tabindex="3" /></label>
		    <br />

		    <label for="month" class="fixlabel">Date of Birth*</label>
		    <br />
		    <div class="selectfix birthpaddingfix">
			<select name="dob_month" id="month" class="validate[required]" tabindex="4">
			    <option value="">Month</option>
			    <option value="1">January</option>
			    <option value="2">February</option>
			    <option value="3">March</option>
			    <option value="4">April</option>
			    <option value="5">May</option>
			    <option value="6">June</option>
			    <option value="7">July</option>
			    <option value="8">August</option>
			    <option value="9">September</option>
			    <option value="10">October</option>
			    <option value="11">November</option>
			    <option value="12">December</option>
			</select>
			</div>
			<div class="selectfix">
			<select name="dob_year" id="year" class="validate[required]" tabindex="5">
			    <option value="">Year</option>
			    <option value="2007">2007</option>
			    <option value="2006">2006</option>
			    <option value="2005">2005</option>
			    <option value="2004">2004</option>
			    <option value="2003">2003</option>
			    <option value="2002">2002</option>
			    <option value="2001">2001</option>
			    <option value="2000">2000</option>
			    <option value="1999">1999</option>
			    <option value="1998">1998</option>
			    <option value="1997">1997</option>
			    <option value="1996">1996</option>
			    <option value="1995">1995</option>
			    <option value="1994">1994</option>
			    <option value="1993">1993</option>
			    <option value="1992">1992</option>
			    <option value="1991">1991</option>
			    <option value="1990">1990</option>
			    <option value="1989">1989</option>
			    <option value="1988">1988</option>
			    <option value="1987">1987</option>
			    <option value="1986">1986</option>
			    <option value="1985">1985</option>
			    <option value="1984">1984</option>
			    <option value="1983">1983</option>
			    <option value="1982">1982</option>
			    <option value="1981">1981</option>
			    <option value="1980">1980</option>
			    <option value="1979">1979</option>
			    <option value="1978">1978</option>
			    <option value="1977">1977</option>
			    <option value="1976">1976</option>
			    <option value="1975">1975</option>
			    <option value="1974">1974</option>
			    <option value="1973">1973</option>
			    <option value="1972">1972</option>
			    <option value="1971">1971</option>
			    <option value="1970">1970</option>
			    <option value="1969">1969</option>
			    <option value="1968">1968</option>
			    <option value="1967">1967</option>
			    <option value="1966">1966</option>
			    <option value="1965">1965</option>
			    <option value="1964">1964</option>
			    <option value="1963">1963</option>
			    <option value="1962">1962</option>
			    <option value="1961">1961</option>
			    <option value="1960">1960</option>
			    <option value="1959">1959</option>
			    <option value="1958">1958</option>
			    <option value="1957">1957</option>
			    <option value="1956">1956</option>
			    <option value="1955">1955</option>
			    <option value="1954">1954</option>
			    <option value="1953">1953</option>
			    <option value="1952">1952</option>
			    <option value="1951">1951</option>
			    <option value="1950">1950</option>
			    <option value="1949">1949</option>
			    <option value="1948">1948</option>
			    <option value="1947">1947</option>
			    <option value="1946">1946</option>
			    <option value="1945">1945</option>
			    <option value="1944">1944</option>
			    <option value="1943">1943</option>
			    <option value="1942">1942</option>
			    <option value="1941">1941</option>
			    <option value="1940">1940</option>
			    <option value="1939">1939</option>
			    <option value="1938">1938</option>
			    <option value="1937">1937</option>
			    <option value="1936">1936</option>
			    <option value="1935">1935</option>
			    <option value="1934">1934</option>
			    <option value="1933">1933</option>
			    <option value="1932">1932</option>
			    <option value="1931">1931</option>
			    <option value="1930">1930</option>
			    <option value="1929">1929</option>
			    <option value="1928">1928</option>
			    <option value="1927">1927</option>
			    <option value="1926">1926</option>
			    <option value="1925">1925</option>
			    <option value="1924">1924</option>
			    <option value="1923">1923</option>
			    <option value="1922">1922</option>
			    <option value="1921">1921</option>
			    <option value="1920">1920</option>
			    <option value="1919">1919</option>
			    <option value="1918">1918</option>
			    <option value="1917">1917</option>
			    <option value="1916">1916</option>
			    <option value="1915">1915</option>
			    <option value="1914">1914</option>
			    <option value="1913">1913</option>
			    <option value="1912">1912</option>
			    <option value="1911">1911</option>
			    <option value="1910">1910</option>
			    <option value="1909">1909</option>
			    <option value="1908">1908</option>
			    <option value="1907">1907</option>
			    <option value="1906">1906</option>
			    <option value="1905">1905</option>
			    <option value="1904">1904</option>
			    <option value="1903">1903</option>
			    <option value="1902">1902</option>
			    <option value="1901">1901</option>
			    <option value="1900">1900</option>
			</select>
			</div>
			<br />

			<label for="address">Home Address (Sorry, no P.O. boxes)*
			<input type="text" name="address" id="address" class="validate[required]" size="112" tabindex="6" /></label>
		    
		    <div class="csz">
		    <label for="city">City*
			<input type="text" name="city" id="city" class="validate[required]" size="40" tabindex="7" /></label>
			</div>
			
			<div class="csz">
			<label for="state">State*<br />
			<div class="selectfix">
			<select name="state" id="state" class="validate[required]" tabindex="8">
			    <option value="">State</option>
			    <option value="AL">AL</option>
			    <option value="AK">AK</option>
			    <option value="AZ">AZ</option>
			    <option value="AR">AR</option>
			    <option value="CA">CA</option>
			    <option value="CO">CO</option>
			    <option value="CT">CT</option>
			    <option value="DE">DE</option>
			    <option value="DC">DC</option>
			    <option value="FL">FL</option>
			    <option value="GA">GA</option>
			    <option value="HI">HI</option>
			    <option value="ID">ID</option>
			    <option value="IL">IL</option>
			    <option value="IN">IN</option>
			    <option value="IA">IA</option>
			    <option value="KS">KS</option>
			    <option value="KY">KY</option>
			    <option value="LA">LA</option>
			    <option value="ME">ME</option>
			    <option value="MD">MD</option>
			    <option value="MA">MA</option>
			    <option value="MI">MI</option>
			    <option value="MN">MN</option>
			    <option value="MS">MS</option>
			    <option value="MO">MO</option>
			    <option value="MT">MT</option>
			    <option value="NE">NE</option>
			    <option value="NV">NV</option>
			    <option value="NH">NH</option>
			    <option value="NJ">NJ</option>
			    <option value="NM">NM</option>
			    <option value="NY">NY</option>
			    <option value="NC">NC</option>
			    <option value="ND">ND</option>
			    <option value="OH">OH</option>
			    <option value="OK">OK</option>
			    <option value="OR">OR</option>
			    <option value="PA">PA</option>
			    <option value="RI">RI</option>
			    <option value="SC">SC</option>
			    <option value="SD">SD</option>
			    <option value="TN">TN</option>
			    <option value="TX">TX</option>
			    <option value="UT">UT</option>
			    <option value="VT">VT</option>
			    <option value="VA">VA</option>
			    <option value="WA">WA</option>
			    <option value="WV">WV</option>
			    <option value="WI">WI</option>
			    <option value="WY">WY</option>
			</select>
			</div>
			</label>
			</div>
			
			<div class="csz">
			<label for="zip">Zip Code*
			<input type="text" name="zip" maxlength="5" id="zip" class="validate[required]" tabindex="9" onkeypress="return isNumberKey(event)" /></label>
			</div>
			
			<label for="phone">Phone Number* <span class="smaller">(Include area code, do not include spaces or dashes.)</span>
			<input type="text" name="phone" maxlength="10" id="phone" class="validate[required,custom[phone]]" size="40" tabindex="10" onkeypress="return isNumberKey(event)" /></label>
			<br />
			<label>Gender</label><br />
			<input type="radio" id="r1" name="gender" tabindex="11" value="m"/>
            <label for="r1"><span></span>Male</label>
            <input type="radio" id="r2" name="gender" tabindex="12" value="f"/>
            <label for="r2"><span></span>Female</label>
			<br />
			<label for="bonus">Bonus Round Puzzle Solution* - Enter the Bonus Puzzle Solution that aired on <?= $today ?>.</label>
			<input type="text" name="bonus" id="bonus" class="validate[required]" size="80" tabindex="13" />
			<label>Puzzles will be updated each weekday at 3PM Pacific Time.</label>
		    
			<input type="checkbox" class="checkbox" id="wheelemailupdates" name="optin1" value="1"  tabindex="14" />
			<label for="wheelemailupdates" class="adjustspacing"><span></span>Yes, I would like to receive email updates from Sony Pictures Entertainment ("SPE"). I will also get the Sony Pictures Spotlight newsletter, my guide to the latest in upcoming movies, soundtracks, free downloads, great TV shows, DVD releases, cool promotions &amp; events and more. I understand and agree to the SPE <a href="http://www.sonypictures.com/corp/privacy.html" rel="external">Privacy Policy<a> and <a href="http://www.sonypictures.com/corp/tos.html" rel="external">Terms of Use</a>.</label>
		    
			<p class="submittext">
			    By clicking the "Submit" button, I understand and agree to the <a href="http://www.wheeloffortune.com/minisites/wheelv8/rules.html" rel="external">Official Rules</a> and the SPE <a href="http://www.sonypictures.com/corp/privacy.html" rel="external">Privacy Policy</a> and <a href="http://www.sonypictures.com/corp/tos.html" rel="external">Terms of Use</a>.
			</p>
			<input type="image" id="submit" src="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/images/submit.png" value="Submit" alt="Submit" tabindex="17" />
			<input type="hidden" name="puzzledate" value="<?= $bonus_puzzle_date ?>" />
			<input type="hidden" name="formType" value="standalone" />
	    </form>
	    
			<p class="photosection_copy">For more info on <img src="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/images/v8.png"> visit <a class="v8juice_link promotion"
	 rel="external" href="http://www.v8juice.com">www.V8Juice.com</a></p>
			<p class="photosection_copy bottom"><a class="v8facebook_button promotion" rel="external"  href="https://www.facebook.com/V8"><img src="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/images/fb.png"></a>
			<a class="v8twitter_button promotion" rel="external" href="https://twitter.com/V8"><img src="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/images/twitter.png"></a></p>
		</div>
		
		<!-- call to action -->
		<div id="calltoaction">
			<ul>
				<li>
					<a href="http://www.wheeloffortune.com/games/tossupchallenge/" id="tossup" class="tossupchallenge_image promotion" rel="external" title="Toss Up Challenge"></a>
				</li>
				<li>
					<a href="http://www.v8juice.com/" id="v8" title="V8-Learn More" rel="external" class="v8official_image promotion"></a>
				</li>
				<li>
					<a href="http://www.wheeloffortune.com/showguide/thisweek" id="wof" title="WheelOfFortune.com" rel="external" class="wheeloffortune_image promotion"></a>
				</li>
			</ul>
		</div>
		</div>
		<!-- banner ad / legal -->
		<div id="legal">
			<a class="v8ad_image promotion" rel="external" href="http://www.v8juice.com/"><img src="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/images/gfx-banner-ad.jpg" alt="V8"/></a>
			<p>NO PURCHASE NECESSARY.Void where prohibited. Open only to permanent legal residents of the 50 states of the U.S. or D.C., 18 years of age or older as of 1/13/2014. Online Access Required. Consists of 5 separate daily sweepstakes. Entries for a given daily sweepstakes must be received between 3:00:00 pm PT that day and 2:59:59 pm PT the following day. The first daily sweepstakes begins 3:00:00 pm PT on 1/13/2014 and ends 2:59:59 pm PT on 1/14/2014. Entries for the last daily sweepstakes must be received by 2:59:59 pm PT on 1/18/2014. Entry/prize restrictions apply. Subject to <a href="http://www.wheeloffortune.com/minisites/wheelv8/rules.html" rel="external">Official Rules.</a></p>
		</div>
		<!-- footer -->
		<div id="footer">
			<ul id="copyrightcontainer">
				<li id="spt" class="sprite">Sony Pictures Television</li>
				<li id="copyright">&copy;2013 Califon Productions, Inc. "Wheel of Fortune" is a registered trademark of Califon Productions, Inc. All Rights Reserved. </li>
			</ul>
			{{> us-sp-slim-treatments-dark-footer }}
		</div>
	</div>
</div>

<div id="omniturecode">
<script type="text/javascript" src="/global/scripts/s_code.js"></script>
<script type="text/javascript"> 
 s.pageName="us:tv:shows:wheel:minisites:wheelv8:index.php"
  s.channel=s.eVar3="us:tv"
  s.prop3="us:tv:wheeloffortune:wheelv8"
  s.prop4=s.eVar4="us:wheeloffortune"
  s.prop5=s.eVar5="us:tv:microsite"
  s.prop11="us"
  /************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/ 
  var s_code_session = s.t();
  if (s_code_session) {
 document.write(s_code_session); }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/global/scripts/swfobject2.js"></script>
<script src="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/active/scripts/overlayplayer2/overlayplayer2.js" type="text/javascript"></script>
<script src="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/active/scripts/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/active/scripts/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script src="//flash.sonypictures.com/tv/shows/wheel/minisites/wheelv8/active/scripts/main.js" type="text/javascript"></script>
<script>
	jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#entry").validationEngine();
	});
</script>

</body>
</html>