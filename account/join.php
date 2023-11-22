<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8"> <!-- 문자 인코딩 및 문서 키워드, 요약 정보 -->
	<meta name="description" content="이해욱의 포트폴리오 웹사이트 입니다."> <!-- 문서에 대한 간단한 설명 -->
	<title>회원가입 페이지</title> <!-- 제목 -->
	<link href="../css/style.css" rel="stylesheet" type="text/css"> <!-- 외부 스타일 시트 -->	
	<style>

	#innerWrapper 
	{
		width: 1274px; /* 선 굵기 차감 */
		/*border: 5px double #A6A6A6;*/
		margin-top: 150px;
		margin-left: 15%;
		float: left;
	}

	#img-id 
	{
		border-radius: 70px; /* 사진 모서리 둥글게 */
		margin: 30px;
		margin-left: 100px;
		float: left;
	}	

	#table-signup
	{
		width: 30%;
		border: 5px double #A6A6A6;
		margin: 30px;
		float: left;
	}

	.id, .password, .nickname, #email
	{
		width: 99%;
		height: 30px;
	}
</style>
</head>
<body>		
	<div class="wrapper"> <!-- 전체를 감싸는 틀 -->  
		<div id="innerWrapper">			
			<img id="img-id" src="../images/img_join.jpg"> <!-- 회원가입 상단 이미지 -->

			<!-- form은 값을 넘길 때 name으로 넘겨야 하나보다. id 안 통함. -->
			<form action="./joinDB.php" method="POST">
				<!-- 회원가입 폼 -->
				<table id='table-signup'>
					<tr>
						<td>
							<lable><b style="font-size: 24px;">ID</b></lable><br>
							<input type="text" placeholder="Enter ID" name="id" id="id" class="id" oninput="onInput()" maxlength="20" required>
							<p id="alertID" style="text-align: center;"></p>
						</td>
					</tr>
					<tr>
						<td>
							<label><b style="font-size: 24px;">Password</b></label><br> 
							<input type="password" placeholder="Enter Password" name="userPw" id="userPw" class="password" oninput="onInput()" maxlength="20" required>
							<p id="alertPW01" style="text-align: center;"></p>
						</td>
					</tr>
					<tr>
						<td>
							<label><b style="font-size: 24px;">Repeat Password</b></label><br> 
							<input type="password" placeholder="Repeat Password" id="userPwRe" class="password" oninput="onInput()" maxlength="20" required>
							<p id="alertPW02" style="text-align: center;"></p>
						</td>
					</tr>
					<tr>
						<td>
							<label><b style="font-size: 24px;">Nickname</b></label><br>
							<input type="text" placeholder="Enter Nickname" name="nickname" id="nickname" class="nickname" oninput="onInput()" maxlength="8" required>
							<p id="alertNick" style="text-align: center;"></p>
						</td>
					</tr>
					<tr>
						<td>
							<label><b style="font-size: 24px;">Email</b></label><br>
							<input type="text" placeholder="Enter Email" name="email" id="email" class="email" oninput="onInput()" required>
							<p id="alertEmail" style="text-align: center;"></p>
						</td>
					</tr>
					<tr>
						<td>
							<br><br>
							<button type="submit" disabled="disabled" id="btnSubmit" style="width: 100%; height: 50px; font-size: 20px;">가입하기</button>
						</td>
					</tr>
				</table>
			</form>

		</div>
	</div>
</div>

<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script>
<script src="../script/script_join.js" charset="utf-8"></script>
</body>
</html>