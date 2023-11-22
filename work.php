<!DOCTYPE html>

<!-- 문서 언어 명시 -->
<html lang="ko">

<!-- head 시작 -->
<head>
	<!-- 문자 인코딩 및 문서 키워드, 요약 정보 -->
	<meta charset="utf-8">
	<!-- 문서에 대한 간단한 설명 -->
	<meta name="description" content="이해욱의 포트폴리오 웹사이트 입니다.">
	<!-- 제목 -->
	<title>이해욱의 포트폴리오 웹사이트 입니다.</title>
	<!-- 외부 파일 링크 -->
	<link href="./css/style_global.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="./script/script_selector.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script> <!-- 제이쿼리 -->
	<script src="./script/prefixfree.min.js"></script> <!-- 브라우저 접두사 자동으로 붙이기 -->

	<!-- 내부 스타일 시트 -->
	<style>
	/* 나눔고딕 웹폰트 */
	@import url(//fonts.googleapis.com/earlyaccess/nanumgothic.css);

	/* WORK 페이지 좌측, 작품목록 넣을 부분 */
	aside {
		width: 364px;
		margin-top: 10px;
		margin-right: 10px;
		margin-bottom: 10px;
		border: 3px double black;
		text-align: center;
		float: left;
	}

	#goto-github {
		width: 1264px; /* 선 굵기 차감 */
		border: 3px double black;
		text-align: center;
		margin-top: 10px;
		padding: 5px;
	}

	/* section 재정의 */
	#work-section {
		width: 894px;
		height: auto;
		margin: 10px auto;
		text-align: center;
		border: 3px double black;
		float: right;
	}

	img {
		margin: 20px auto;;
		width: 80%;
		height: 80%;
	}

	.aside-titleText {
		font-family: '맑은 고딕';
		font-weight: bold;
		color: black;
	}

	.aside-listText {
		text-align: left;
		font-size: 16px;
		font-family: '맑은 고딕';
		font-weight: bold;
		color: black;
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

<!-- body 시작 -->
<body>
	<!-- 전체를 감싸는 틀 -->
	<div class="wrapper">

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

		<!-- GitHub 주소 넣을 상자 -->
		<div id="goto-github">
			<span style="color:red">
				<b>현재 포트폴리오는 해당 웹사이트가 아닌, https://github.com/seasunrise22 에서 관리되어지고 있습니다.</b>
			</span>
		</div>

		<!-- WORK 페이지의 섹션 -->
		<!-- aside - WORK 페이지 좌측 메뉴바 -->
		<aside>
			<h1 class="aside-titleText">작품목록</h1>
			<br>
			<ul>
				<li class="aside-listText"><p><a href="javascript:workChange(1);">역할 카드게임 'WANTED'</a></p></li>
				<li class="aside-listText"><p><a href="javascript:workChange(2);">GPS를 활용한 운동관리 어플리케이션</a></p></li>
				<li class="aside-listText"><p><a href="javascript:workChange(3);">잠금화면 문구 세팅 Your Sentence</a></p></li>
				<li class="aside-listText"><p><a href="javascript:workChange(4);">아케이드 게임 독수리 피하기!</a></p></li>
				<li class="aside-listText"><p><a href="javascript:workChange(5);">폰 중독방지 앱 Be patient</a></p></li>
			</ul>
		</aside>

		<!-- WORK 페이지 우측 작품 나타낼 페이지 -->
		<div id="work-section">
			<h2>Unity엔진과 C#으로 구현한 카드배틀게임</h2>
			<img src='images/work_wanted01.png'>
			<img src='images/work_wanted02.png'>
			<img src='images/work_wanted03.png'>
			<img src='images/work_wanted04.png'>
			<img src='images/work_wanted05.png'>
			<img src='images/work_wanted06.png'>
			<img src='images/work_wanted07.png'>	
		</div>

		<!-- footer -->
		<footer>
			<p style="margin-right: 3%">ⓒ 2023. Lee Haeuk all rights reserved.</p>
			<p style="margin-right: 3%">본 페이지는 Google Chrome 1920x1080, PHP Version 5.6.31 환경에서 제작되었습니다.</p>
		</footer>
	</div>	
	
</body>
</html>