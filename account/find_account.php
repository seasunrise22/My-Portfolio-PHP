<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8"> <!-- 문자 인코딩 및 문서 키워드, 요약 정보 -->
	<meta name="description" content="이해욱의 포트폴리오 웹사이트 입니다."> <!-- 문서에 대한 간단한 설명 -->
	<title>계정 찾기 페이지</title> <!-- 제목 -->
	<link href="style.css" rel="stylesheet" type="text/css"> <!-- 외부 스타일 시트 -->
	<!-- 내부 스타일 시트 -->
	<style>
	@import url(//fonts.googleapis.com/earlyaccess/nanumgothic.css);  /* 나눔고딕 웹폰트 */

	#innerWrapper {
		width: 1274px; /* 선 굵기 차감 */
		border: 3px double #BDBDBD; 
	}

	#tableStyle {
		margin: 100px auto;
	}
</style>
</head>
<body>
	<!-- 전체를 감싸는 틀 -->
	<div class="wrapper"> 

		<!-- 계정찾기 부분 박스 시작 -->
		<!-- 가입시 입력한 이메일 주소와 일치한다면 해당 이메일 주소로 페이지 링크 보내어 아이디, 비밀번호 재설정 유도 -->
		<div id="innerWrapper">
			<table id="tableStyle">
				<tr>
					<td>이메일</td>
					<td><input type="text" placeholder="이메일 주소를 입력하세요" name="email" maxlength="16" style="width: 98%"></td>
					<td><button type="button">전송</button></td>	
				</tr>		
			</table>
		</div>
		<!-- 계정찾기 부분 박스 끝 -->

	</div>
</body>
</html>