<?php
session_start(); //세션변수 사용전에 session_start()를 사용해야 한다.

if(!isset($_SESSION['login_id']) && !isset($_SESSION['login_pw'])) { ?>
<style>
.joinBoxStyle {
	display: flex;
	justify-content: space-between;
	width: 40%;
	height: 25px;
	margin-left: auto;
}
</style>
<form action="./account/login_ok.php" method="post">	
	<div class="joinBoxStyle">
		<input type='text' placeholder='아이디' name='login_id' maxlength='20' required>
		<input type='password' placeholder='비밀번호' name='login_pw' maxlength='20' required>
		<button type='submit'>로그인</button>
		<button type='button' onclick='location.href="./account/join.php"'>회원가입</button>
	</div>	
</form>
<?php } else {
	$user_id = $_SESSION['login_id'];
  $user_nick = $_SESSION['login_nick'];
  echo "<p><strong>$user_nick</strong>($user_id) 님 로그인 되셨습니다.";
  echo " <a href=\"./account/logout.php\">[로그아웃]</p>";
}
?>