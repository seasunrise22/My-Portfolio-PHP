/*************** 가입하기 버튼 활성화를 위한 함수 *******************/
var checkEmail;

function onInput() {
	// 이메일 형식만 가능
	var strLimit = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;

	// 각 항목들이 모두 채워져 있으면 가입하기 버튼을 활성화시킴
	if($('#id').val() != '' 
		&& $('#userPw').val() == $('#userPwRe').val() 
		&& $('#nickname').val() != '' 
		&& $('#email').val() != ''
		&& strLimit.test($('#email').val())) { $('#btnSubmit').attr('disabled', false); }
}

/**************** 아이디, 닉네임 중복체크(ajax). 비밀번호 동일성 검사 구현 *********************/

// 페이지 로딩이 끝난 후 자동호출되는 ready 함수
$(document).ready(function() { 
	// input태그로부터 포커스를 벗어났을 때 동작하는 이벤트
	$('input').blur(function() {
		console.log('blur function operate');

		var selectClass = $(this).attr('class'); // 현재 포커싱 된($(this)) 요소의가 어떤 class인가

		// 선택한 요소 $(this)의 속성(attr) class값을 뽑아내어 switch로 분기
		switch(selectClass) {

			/******************* 아이디 중복검사(class값이 id인 경우) *******************/
			case 'id':
			console.log('case ".id" operate');			

			var userId = $('#id').val(); // 유저가 입력한 id값
			var strLimit = /^[a-z0-9_-]{5,20}$/; // 5~20자리 영문 소문자, 숫자, 특수문자(-, _)만 가능한 정규식
			console.log('userId : ' + userId);
			
			// 입력된 값이 정규식에 해당된다면
			if((strLimit.test(userId)) == true) {
				// 유저가 입력한 ID가 중복되었나 서버와 통신(ajax)
				$.ajax({
					url: './check_id.php',
					type: 'POST',
					data: {
						id: userId
					},
					dataType: 'json',
					success: function(result) {
						console.log(result);

						// 사용할 수 있는 아이디(중복되지 않은 아이디)
						if(result['_result'] == true) {
							$('#alertID').html('사용 가능한 아이디입니다.').css('color', '#1DDB16').css('font-size', '16px');							
						}
						// 사용할 수 없는 아이디(중복된 아이디) 
						else if(result['_result'] == false) {
							$('#alertID').html('이미 사용중인 아이디입니다.').css('color', '#FF0000').css('font-size', '16px');
						}
					}
				});
			} 
			else {
				$('#alertID').html('5~20자의 영문 소문자, 숫자와 특수기호(_),(-)만 사용 가능합니다.').css('color', '#FF0000').css('font-size', '12px');
			}	
			break;

			/*********************** 비밀번호 동일성 검사 ***********************/
			case 'password':
			console.log('case ".password" operate');

			var userPassword = $('#userPw').val();
			var userPasswordRe = $('#userPwRe').val();			

			if(userPassword == '' || userPasswordRe == '') {
				$('#alertPW02').html('');
			} 
			else if(userPassword == userPasswordRe) {
				$('#alertPW02').html('사용 가능한 비밀번호입니다.').css('color', '#1DDB16');
			} 
			else if(userPassword != userPasswordRe) {
				$('#alertPW02').html('비밀번호가 일치하지 않습니다.').css('color', '#FF0000');
			}
			break;

			/*********************** 닉네임 중복검사 *************************/
			case 'nickname':
			console.log('case ".nickname" operate');

			var userNick = $('#nickname').val();
			console.log('userNick : ' + userNick);

			var strLimit = /^[a-zA-Z0-9_-]{3,8}$/; // 3~8자리 영문 대소문자, 숫자, 특수문자(-, _)만 가능한 정규식

			if((strLimit.test(userNick)) == true) {
				console.log('userNick : ' + 'ajax 진입');
				console.log('진입 후 userNick : ' + userNick);
				$.ajax({
					url: './check_nick.php',
					type: 'POST',
					data: {
						nickname: userNick
					},
					dataType: 'json',
					success: function(result) {
						console.log(result);
						// 사용할 수 있는 닉네임(중복되지 않은 닉네임)
						if(result['_result'] == true) {
							$('#alertNick').html('사용 가능한 닉네임입니다.').css('color', '#1DDB16').css('font-size', '16px');
						} 
						// 사용할 수 없는 닉네임(중복된 닉네임)
						else if(result['_result'] == false) {
							$('#alertNick').html('이미 사용중인 닉네임입니다.').css('color', '#FF0000').css('font-size', '16px');
						}
					}
				});
			}
			else {
				$('#alertNick').html('3~8자의 영문 대소문자, 숫자, <br>특수기호(_),(-)만 사용 가능합니다.').css('color', '#FF0000').css('font-size', '12px');
			} 
			break;

			/*********************** 이메일 형식 제한 ***********************/
			case 'email':
			console.log('case ".email" operate');

			// 이메일 형식만 가능
			var strLimit = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;

			if((strLimit.test($('#email').val())) == true) {
				$('#alertEmail').html('적절한 이메일주소 입니다.').css('color', '#1DDB16');
			}
			else {
				$('#alertEmail').html('이메일 형식을 맞춰주세요.').css('color', '#FF0000');
			}
			break;
		}
	});
});