<?php
/** DB와의 비교를 통한 아이디 중복체크 기능 구현 **/

include './connectDB.php';

$stmt = $mysqli->prepare("SELECT * FROM user WHERE id=?");
$stmt->bind_param('s', $id);

$id = $_POST['id'];

/* execute prepared statement */
$stmt->execute();
$result = $stmt->get_result();

$count = mysqli_num_rows($result);

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json;');
if($count == 0)	// 중복되는 아이디가 없을 경우 
{		
	echo json_encode(array('_result'=>true));	
} 
else 				// 중복되는 아이디가 있을 경우
{
	echo json_encode(array('_result'=>false));
}

/* close statement and connection */
$stmt->close();
$mysqli->close();
?>