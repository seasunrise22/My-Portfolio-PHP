<meta charset='utf-8'>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();	

if(!isset($_POST['login_id']) || !isset($_POST['login_pw'])) exit;

include './connectDB.php';

$stmt = $mysqli->prepare("SELECT * FROM user WHERE id=? and password=?");
$stmt->bind_param('ss', $id, $password);

$id = $_POST['login_id'];
$password = $_POST['login_pw'];

// 웹에서의 한글깨짐 방지용
mysqli_query($mysqli, "set session character_set_connection=utf8;");
mysqli_query($mysqli, "set session character_set_results=utf8;");
mysqli_query($mysqli, "set session character_set_client=utf8;");

/* execute prepared statement */
$stmt->execute();
$result = $stmt->get_result();

while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $userNick = $row['nickname'];
}

$count = mysqli_num_rows($result);

// 디비에 아이디가 없는 경우. 로그인 실패.
if($count == 0) {		
	echo "<script>alert('아이디 혹은 비밀번호를 확인해주세요.');</script>";
} 
else { // 이제 여기에 로그인 성공했을때 나타낼 화면을 구현할 것.
	$_SESSION['login_id'] = $id;
	$_SESSION['login_nick'] = $userNick;
}
?>
<meta http-equiv="refresh" content="0; url='../about.php'">