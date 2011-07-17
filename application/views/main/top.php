<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<meta content='Ali Mashuri - mashuri.web.id' name='author'/> 
	<meta content='Story of My Life' name='description'/> 
	<meta content='Ali mashuri,linux, ubuntu, jaringan, networking, bl4ckshell, php mysql, ajax, facebook, facebox, plurk, programing, javascript' name='keywords'/> 
	<meta content='index, follow, archive' name='robots'/> 
	<meta content='archive' name='googlebot'/> 
 
	<title><?php echo $this->config->item('title_name')?></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/styles.css" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-1.3.2.js"></script> 
	<meta content='True' name='HandheldFriendly' /> 
	<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' /> 
	<script type="text/javascript">  
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22071113-2']);
	  _gaq.push(['_trackPageview']);
 
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
 
	</script> 
 
</head>
<body>
<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">							
	</div>
	<!--header ends-->		
	<div id="wrapper">
	<!-- navigation starts-->	
	<div id="nav">
		<img src="<?php echo base_url(); ?>asset/images/nama.png" alt="Ali Mashuri" />
		<ul>
			<li id="current"><?php echo anchor('home', 'Home', 'title="Home"');?></li>
			<li><?php echo anchor('home/about', 'Tentang', 'title="Tentang"');?></a></li>
			<li><a href="http://ali.cahbag.us/" target="_BLANK">Blog</a></li>
			<li><?php echo anchor('home/kontak', 'Kontak', 'title="Kontak"');?></li>
		</ul>
	</div>	
	<!-- navigation ends-->	
				
			
	<!-- content starts -->
	<div id="loading" style="display:none; text-align:center">Sik Loading dab....</div>
	<div id="content">	
