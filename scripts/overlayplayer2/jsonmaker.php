<?
//json header
header("Content-type: application/json");

//get xml path from query string
$full_xml_path = (isset($_GET['xml'])) ? htmlentities(trim($_GET['xml'])) : null;

//get domain
$exploded_url = explode('/',$full_xml_path);
$domain = $exploded_url[2];


//domain sniff for correct path
$paths = array(
	array('domain' => 'sonypictures.net',			'path' => 'intl/global/'),
	array('domain' => 'sonypictures.com.au',		'path' => 'intl/au/'),
	array('domain' => 'sonypictures.co.uk',			'path' => 'intl/uk/'),
	array('domain' => 'sonypictures.jp',			'path' => 'intl/jp/'),
	array('domain' => 'beta.dev.sonypictures.com','path' => 'beta/'),
	array('domain' => 'beta.stage.sonypictures.com','path' => 'beta/'),
	array('domain' => 'beta.sonypictures.com',		'path' => 'beta/'),
	array('domain' => 'sonypictures.com',			'path' => ''),
	array('domain' => 'imageworks.com',				'path' => 'imageworks/'),
	array('domain' => 'sonypicturesanimation.com',	'path' => 'animation/')
);

$xml_path = '';
for($x=0; $x<count($paths); $x++) {
	if(strpos($domain, $paths[$x]['domain']) !== FALSE) {
		$exploded_xml_path = explode($paths[$x]['domain'].'/', $full_xml_path);
		$xml_path = $_ENV['TOP_ROOT'] . '/' . $paths[$x]['path'] . $exploded_xml_path[1];
		break;
	}
}

if($xml_path == '')
	die('Invalid file path.');
	
//file_get_contents proxy config
if(isset($_SERVER['HTTP_FRONT_END_HTTPS'])  && (strcasecmp($_SERVER['HTTP_FRONT_END_HTTPS'],"ON")==0)){
                $proxyport=$_SERVER['HTTPS_PROXY'];
}
else{
                $proxyport=$_SERVER['HTTP_PROXY'];
}
$opts = array('http' => array('proxy' => $proxyport, 'request_fulluri' => true));
$context = stream_context_create($opts);

$xml_string_contents = file_get_contents($xml_path,false,$context); 

// SimpleXML seems to have problems with the colon ":" in the <xxx:yyy> response tags, so take them out 
$xml_string_contents = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $xml_string_contents); 

// Strip whitespace between xml tags
$xml_string_contents = preg_replace('~\s*(<([^>]*)>[^<]*</\2>|<[^>]*>)\s*~','$1',$xml_string_contents);

// Convert CDATA into xml nodes.
$xml = simplexml_load_string($xml_string_contents,'SimpleXMLElement', LIBXML_NOCDATA);

// Convert it to JSON now. 
$json_contents = json_encode($xml);

// Using JSONP
$callback = (isset($_GET['callback'])) ? htmlentities($_GET['callback']) : null ;
$pattern = '/^jsonp[0-9]{13,}$/';

if (preg_match($pattern,$callback)) {
	echo $callback . "($json_contents);"; // somefunction({data here});
   
// Normal JSON
} else {
	echo $json_contents;
}


?>