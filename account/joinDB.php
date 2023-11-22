<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form action="./joinResult.php" name="joinForm" method="POST">
		<?php
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
		
		// DB연결용 세팅		
		$dsn = 'mysql:host=localhost;dbname=???'; // $dsn = 'mysql:host=localhost;dbname=database_portfolio';
		$username = '???';
		$password = '???';
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		);

		$dbh = new PDO($dsn, $username, $password, $options); // DB연결

		// 쿼리문
		$sql = 'INSERT INTO user (id, password, nickname, email, created) VALUES (:id, :password, :nickname, :email, now())';

		// 쿼리문 묶기?
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':password', $password);
		$stmt->bindParam(':nickname', $nickname);
		$stmt->bindParam(':email', $email);

		// join.php에서 받아 온 회원정보들
		$id = $_POST['id'];
		$password = $_POST['userPw'];
		$nickname = $_POST['nickname'];
		$email = $_POST['email'];

		$stmt->execute(); // 쿼리문 실행

		// joinResult.php로 보내어 회원가입 결과를 출력하기 위한 문장들
		echo "
		<input type='hidden' name='id' value='{$id}'>
		<input type='hidden' name='password' value='{$password}'>
		<input type='hidden' name='nickname' value='{$nickname}'>
		<input type='hidden' name='email' value='{$email}'>
		";
		?>
	</form>

	<!-- 이 페이지를 보여주지 않고 join.php에서 joinResult.php로 바로 넘겨주기 위한 자동 form태그 submit javascript 코드 -->
	<script>
		document.joinForm.submit();
	</script> 

</body>
</html>