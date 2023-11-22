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
	/* ACTIVITY 페이지 좌측, 활동내역 넣을 부분 */
	aside {
		width: 364px;
		margin-top: 10px;
		margin-right: 10px;
		margin-bottom: 10px;
		border: 3px double black;
		text-align: center;
		float: left;
	}
	/* ACTIVITY 페이지 전용 섹션 재정의 */
	#activity-section {
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
		<!-- ACTIVITY 페이지의 섹션 -->
		<!-- aside - ACTIVITY 페이지 좌측 메뉴바 -->
		<aside>
			<h1 class="aside-titleText">활동내역</h1>
			<br>
			<ul>
				<li class="aside-listText"><p><a href="javascript:activityChange(1);">교내 학술 동아리 '구석방' 활동</a></p></li>
				<li class="aside-listText"><p><a href="javascript:activityChange(2);">C언어 멘토링 멘토 경험</a></p></li>
				<li class="aside-listText"><p><a href="javascript:activityChange(3);">소프트웨어 전시회 개최 및 진행 요원</a></p></li>
			</ul>
		</aside>
		<!-- ACTIVITY 페이지 우측 활동내역 나타낼 페이지 -->
		<div id="activity-section">
			<img src='images/itshow01.jpg'>
			<img src='images/kidult02.jpg'>
			<img src='images/kidult04.jpg'>
		</div>
		<!-- footer -->
		<footer>
			<p style="margin-right: 3%">ⓒ 2023. Lee Haeuk all rights reserved.</p>
			<p style="margin-right: 3%">본 페이지는 Google Chrome 1920x1080, PHP Version 5.6.31 환경에서 제작되었습니다.</p>
		</footer>
	</div>
	
</body>
</html>