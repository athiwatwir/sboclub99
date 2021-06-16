<?php 
$ogUrl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] ;
$ogTitle = isset($title)?$title.' สุดยอดเว็บ คาสิโน พนันบอลออนไลน์ แทงบอลสด':'สุดยอดเว็บ คาสิโน พนันบอลออนไลน์ แทงบอลสด';
$ogDes = '';
$_ogImage = SITE_URL.'img/og-image.jpg';

if(isset($ogImage)){
	$_ogImage = $ogImage;
}
?>
<meta property="og:url" content="<?=$ogUrl ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?=$ogTitle ?>" />
<meta property="og:description" content="<?=$ogDes?>" />
<meta property="og:image" content="<?=$_ogImage?>" />