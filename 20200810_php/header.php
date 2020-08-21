<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>php</title>
	<style>
		/*reset*/
		*{padding: 0;margin: 0;}
		li{list-style:none}
		a:link,a:visited{color:#000;text-decoration:none}
		.clearfix:after{content:"";display: block;clear: both;}

		/*heaer*/
		#header{width: 960px;margin:0 auto;background:#e9e9e9;}
		#header h1{width: 150px;margin:0 auto;text-align: center;}
		.gnb{}
		.gnb>ul{}
		.gnb>ul>li{float: left;width: 20%;text-align: center;}
		.gnb>ul>li>a{display: block;left: 40px;}
		.gnb>ul>li>a:hover{background: #ddd;}

		/*visual slider*/
		.visual{height: 300px;background:pink;}
		section#container{width: 960px;height: 1000px;margin:0 auto;background: #555;}
		
		.sub
		/*footer*/
		footer#footer{height: 150px;background:magenta;}
	</style>
	<script>
		
	</script>
	</head>
<body>
	<header id="header">
		<h1>LOGO</h1>
		<nav class="gnb">
			<ul class="clearfix">
				<li><a href="#">menu1</a></li>
				<li><a href="#">menu2</a></li>
				<li><a href="#">menu3</a></li>
				<li><a href="#">menu4</a></li>
				<li><a href="#">menu5</a></li>
			</ul>
		</nav>
	</header>