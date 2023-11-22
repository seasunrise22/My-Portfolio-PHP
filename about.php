<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="description" content="이해욱의 포트폴리오 웹사이트 입니다.">
	<title>이해욱의 포트폴리오 웹사이트 입니다.</title>
	<link href="./css/style_global.css" rel="stylesheet" type="text/css"> <!-- 외부 스타일 시트 링크 -->
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script> <!-- 제이쿼리 -->
	<script src="./script/prefixfree.min.js"></script> <!-- 브라우저 접두사 자동으로 붙이기 -->
	<!-- 내부 스타일 시트 -->
	<style> 
	#about-section {
		width: 1274px; /* 선 굵기 차감 */
		height: 540px;
		margin: 10px auto;
		border: 3px double black;
		float: left;
	}

	/* 사진 밑 내 소개 텍스트 담는 상자 */
	#div-introduce { 
		display: inline-block;
		width: 40%;
		height: 510px;
		text-align: right;
		color: black;
		font-family: '맑은 고딕';
		font-weight: bold;
		margin-top: 50px;
		margin-left: 170px;
		float: left;
	}

	#img-id {
		display: inline-block;
		width: 25%;
		height: auto;
		border-radius: 70px; /* 사진 모서리 둥글게 */
		box-shadow: 5px 5px 15px 5px black; /* 수평거리, 수직거리, 흐림정도, 번짐정도, 색상 */
		margin-top: 50px;
		margin-right: 170px;
		float: right;
	}	
</style>

<!-- 로그인 박스 import할 스크립트 -->
<script>
// 페이지가 로드되면 실행한다.
$(document).ready(function() {
	$(".login-wrapper").load("./account/joinBoxForm.php");
	// login-wrapper 태그에 알아서 joinBoxForm 파일을 로드해줌.
});
</script>

</head>
<body>
	<div class="wrapper"> <!-- 전체를 감싸는 틀 -->		

		<!-- 로그인 박스 담을 div 박스 -->
		<div class="login-wrapper"></div>

		<header>
			<!-- 타이틀 -->
			<div class="title-myname"><a href="about.php">Lee Haeuk</a></div>
			<!-- 메뉴바 -->
			<nav class="menubar-container">
				<ul>
					<li class="menubar-content"><a href="about.php">ABOUT</a></li>
					<li class="menubar-content"><a href="work.php">WORK</a></li>
					<li class="menubar-content"><a href="activity.php">ACTIVITY</a></li>
				</ul>
			</nav>
		</header>

		<!-- ABOUT - 내 사진과 소개글 -->
		<div id="about-section">	
			<div id="div-introduce">
				<br><br><br><br><br><br><br><br>
				<h1 style="display: inline-block;">이 해 욱&nbsp</h1><h2 style="display: inline-block;">Lee Haeuk</h2>
				<ul style="list-style: none;">
					<li>2017년 8월 경상대학교 컴퓨터과학과 졸업</li>
					<li>010-5497-3474</li>
					<li>seasunrise22@naver.com</li>		
				</ul>
			</div>
			<img id="img-id" src="images/id2.jpg">
		</article>
	</div>

	<!-- footer -->
	<footer>
		<p style="margin-right: 3%">ⓒ 2023. Lee Haeuk all rights reserved.</p>
		<p style="margin-right: 3%">본 페이지는 Google Chrome 1920x1080, PHP Version 5.6.31 환경에서 제작되었습니다.</p>
	</footer>
</div>
</body>
</html>