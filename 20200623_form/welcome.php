<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>문서 제목</title>
</head>
<body>
	<?    ?> <!-- php프로그램의 시작과 끝 -->
	<?  echo "안녕하세여" ?> <!-- 문장/변수 출력 -->
	<?  $name = "김동균";  ?> <!-- 변수지정 -->
	<?  echo $name;  ?> <!-- name변수의 데이터를 화면에 출력 -->
	<?
	$na = $_GET["name"];
	$email = $_GET["mail"]
	?>
	
	<p>
		이름 : <? echo $na;?>
		이메일 : <? echo $email;?>
	</p>
</body>
</html>