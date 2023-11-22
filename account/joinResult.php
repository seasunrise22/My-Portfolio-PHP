<html>
<head>
	<meta http-equiv='refresh' content='3;url=../about.php' charset="utf-8">
</head>
<body>
	<table border='1' style='margin: 10% auto; text-align: center; width: 20%;'>
		<tr>
			<td colspan='2' bgcolor='#FFE400'>회원가입 결과</td>
			<tr>
				<td bgcolor='#D9E5FF'>아이디</td>
				<td><?php echo $_POST['id']; ?></td>
			</tr>
			<tr>
				<td bgcolor='#D9E5FF'>닉네임</td>
				<td><?php echo $_POST['nickname']; ?></td>
			</tr>
			<tr>
				<td bgcolor='#D9E5FF'>이메일 주소</td>
				<td><?php echo $_POST['email']; ?></td>
			</tr>
		</table>

		<p style='text-align: center; color: red;'>3초 후 메인 화면으로 이동합니다.</p>
	</body>
	</html>