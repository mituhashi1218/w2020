var id,password;
id=prompt("아이디입력");

if(id == "admin"){
	alert("관리자입니다");
	passworkd = prompt("비밀번호입력");
	if(password=="1234"){
		location.href = "login.html";
	}else{ location.href = "error.html";

	}
}else{
	alert("나가셈");
	location.href = "error.html";
}