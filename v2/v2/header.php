<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus  ">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">

  <!-- 반응형 (기기 해상도별) -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0, maximum-scale=1.0, user-scalable=yes">

  <title>포트폴리오</title>

  <script src="./js/jquery-1.12.4.min.js"></script>
  <script src="./js/jquery-ui.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

  <!-- 스크롤시 fixed -->
  <script src="./js/autofix.js"></script>

  <!-- fullpage -->
  <script src="./js/fullpage.min.js"></script>
  <link rel="stylesheet" href="./js/fullpage.min.css">

  <!-- 배너 -->
  <script src="./js/swiper.min.js"></script>
  <link rel="stylesheet" href="./js/swiper.min.css">

  <!-- animation on scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!-- Progress bar -->
  <script src="./js/loading-bar.js"></script>
  <link rel="stylesheet" type="text/css" href="./js/loading-bar.css">
  
  <!-- 아이콘 from fontawesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="./css/style.css">
  <!-- 모바일 
  <link rel="stylesheet" media="screen and (max-width: 480px)" href="./css/480.css"> -->
  <!-- 태블릿 세로
  <link rel="stylesheet" media="screen and (min-width: 481px) and (max-width: 720px)" href="./css/720.css"> -->
  <!-- 태블릿 가로
  <link rel="stylesheet" media="screen and (min-width: 721px) and (max-width: 1024px)" href="./css/1024.css"> -->
  <!-- PC 
  <link rel="stylesheet" media="screen and (min-width: 1025px)" href="./css/pc.css"> -->

 </head>

 <!-- contents 시작 -->
 <body>

 <!-- 로고, 메뉴 -->
 <div class="header">
	<div class="header-box">
		<h1><a href="./index.html">
			<img src="./img/home-logo.png">
			</a>
		</h1>

		<div class="tnb">
			<ul>
				<li><a href="#none">한국어/영어</a></li>
			</ul>
		</div>

		<div class="gnb">
			<ul>
				<li><a href="./index.html">홈</a></li>
				<li><a href="#none">이력서</a></li>
				<li><a href="./bbs/portfolio_mobile.html">포트폴리오</a></li>
				<li><a href="#none">연락처</a></li>
			</ul>
		</div>

	</div>
 </div>

<!-- autofix 스크롤시 fixed 클래스 추가 -->
<script>
	$(document).ready(function() {
		$(".header").autofix_anything();
	});
</script>

<script>
	AOS.init();
</script>