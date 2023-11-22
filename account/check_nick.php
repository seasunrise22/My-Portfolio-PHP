<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
/** DB와의 비교를 통한 닉네임 중복체크 기능 구현 **/

include './connectDB.php';

$stmt = $mysqli->prepare("SELECT * FROM user WHERE nickname=?"); 
$stmt->bind_param('s', $nickname);

$nickname = $_POST['nickname'];

/* log */
$myfile = fopen("logfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $nickname);
fclose($myfile);

/* execute prepared statement */
$stmt->execute();
$result = $stmt->get_result();

$count = mysqli_num_rows($result);

if($count == 0)	// 중복되는 닉네임이 없을 경우 
{		
	echo json_encode(array('_result'=>true));	
} 
else 				// 중복되는 닉네임이 있을 경우
{
	echo json_encode(array('_result'=>false));
}

/* close statement and connection */
$stmt->close();
$mysqli->close();
?>