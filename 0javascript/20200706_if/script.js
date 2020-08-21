var id,password;
id = prompt("아이디입력");  //자동으로창이떠서 입력란생성

if(id =="admin"){
	alert("관리자입니다.");
	password = prompt("비밀번호입력");
	if(password =="1234"){
		// location.href = "http:www.naver.com";   //나의정보갑ㅄ을 네잉버로바꿈
		location.href = "login.html";
	}else{
		// location.href = "http://www.daum.net"
		location.href = "error.html";
	}
}else{
	alert("나가세요");
	location.href = "error.html";
}