/* 
 * work.php 
 */

// 선택한 작품에 맞는 작품 설명 페이지 호출 함수
function workChange(idx) {
	var strHTML = "";
	var activitySection = document.getElementById("work-section");

	switch (idx) 
	{
		// WANTED
		case 1:
		strHTML += "<h2>Unity엔진과 C#으로 구현한 카드배틀게임</h2>";
		strHTML += "<img src='images/work_wanted01.png'>";
		strHTML += "<img src='images/work_wanted02.png'>";
		strHTML += "<img src='images/work_wanted03.png'>";
		strHTML += "<img src='images/work_wanted04.png'>";
		strHTML += "<img src='images/work_wanted05.png'>";
		strHTML += "<img src='images/work_wanted06.png'>";
		strHTML += "<img src='images/work_wanted07.png'>";
		activitySection.innerHTML = strHTML;
		break;
		
		// 운동관리 어플
		case 2:
		strHTML += "<h2>GPS를 활용한 종합 운동관리 안드로이드 앱</h2>";
		strHTML += "<img src='images/work_android01.png' style='width:360px;height:640px;'>&nbsp";
		strHTML += "<img src='images/work_android02.jpg' style='width:360px;height:640px;'><br>";
		strHTML += "<img src='images/work_android03.jpg' style='width:360px;height:640px;'>&nbsp";
		strHTML += "<img src='images/work_android04.jpg' style='width:389px;height:179px;'><br>";
		strHTML += "<img src='images/work_android05.png' style='width:360px;height:640px;'>&nbsp";
		strHTML += "<img src='images/work_android06.jpg' style='width:360px;height:640px;'><br>";
		strHTML += "<img src='images/work_android07.jpg' style='width:360px;height:640px;'>";
		activitySection.innerHTML = strHTML;
		break;

		// 잠금화면 Your Sentence
		case 3:	
		strHTML += "<h2>스마트폰 잠금화면을 꾸밀 수 있는 안드로이드 앱</h2>";
		strHTML += "<img src='images/work_sentence01.png' style='width:360px;height:640px;'>&nbsp";
		strHTML += "<img src='images/work_sentence02.png' style='width:360px;height:640px;'>";
		activitySection.innerHTML = strHTML;
		break;

		// 독수리 피하기!
		case 4:		
		strHTML += "<h2>Unity엔진으로 구현한 피하기 게임</h2>";
		strHTML += "<img src='images/work_eagle01.png' style='width:360px;height:640px;'><br>";
		strHTML += "<img src='images/work_eagle02.png' style='width:360px;height:640px;'><br>";
		strHTML += "<img src='images/work_eagle03.png' style='width:360px;height:640px;'>";
		activitySection.innerHTML = strHTML;
		break;

		// Be patient
		case 5:
		strHTML += "<h2>스마트폰 화면을 켠 횟수를 카운팅 해주는 안드로이드 앱</h2>";
		strHTML += "<img src='images/work_bepatient01.png' style='width:360px;height:640px;'>&nbsp";
		strHTML += "<img src='images/work_bepatient02.png' style='width:360px;height:640px;'><br>";
		strHTML += "<img src='images/work_bepatient03.png' style='width:360px;height:640px;'>&nbsp";
		strHTML += "<img src='images/work_bepatient04.png' style='width:360px;height:640px;'>";
		activitySection.innerHTML = strHTML;
		break;

		default:
		strHTML += "<h2>Unity엔진과 C#으로 구현한 카드배틀게임</h2>";
		strHTML += "<img src='images/work_wanted01.png'>";
		strHTML += "<img src='images/work_wanted02.png'>";
		strHTML += "<img src='images/work_wanted03.png'>";
		strHTML += "<img src='images/work_wanted04.png'>";
		strHTML += "<img src='images/work_wanted05.png'>";
		strHTML += "<img src='images/work_wanted06.png'>";
		strHTML += "<img src='images/work_wanted07.png'>";
		activitySection.innerHTML = strHTML;
	}
}

/* 
 * activity.html 
 */

//선택한 활동에 맞는 활동내역 설명 페이지 호출 함수
function activityChange(idx) {
	var strHTML = "";
	var activitySection = document.getElementById("activity-section");

	switch (idx) 
	{
		// 구석방
		case 1:
		strHTML += "<img src='images/itshow01.jpg'>";
		strHTML += "<img src='images/kidult02.jpg'>";
		strHTML += "<img src='images/kidult04.jpg'>";
		activitySection.innerHTML = strHTML;
		break;

		// 윌스터디
		case 2:
		strHTML += "<h2>신입생을 대상으로 한 C언어 멘토링 멘토 경험</h2>";
		strHTML += "<h3>C언어로 구현한 간단한 프로그램의 소스코드를 분석해보며 기초문법 및 응용법 교육</h3>";
		strHTML += "<img src='images/will01.png'><br>";
		strHTML += "<img src='images/will02.png'><br>";
		strHTML += "<img src='images/will03.png'>";
		activitySection.innerHTML = strHTML;
		break;
		
		// 소전
		case 3:
		strHTML += "<img src='images/sojeon01.jpg'>";
		strHTML += "<img src='images/sojeon02.jpg'>";
		strHTML += "<img src='images/sojeon03.jpg'>";
		activitySection.innerHTML = strHTML;
		break;

		default:
		strHTML += "<img src='images/itshow01.jpg'>";
		strHTML += "<img src='images/kidult02.jpg'>";
		strHTML += "<img src='images/kidult04.jpg'>";
	}
}