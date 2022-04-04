<?php
echo "안녕하세요 저는 서버예요";
$id = $_POST['id'];
$pwd = $_POST['pwd'];
$contents = $_POST['contents'];

echo "<br>";
echo $id . "님 반가와요";
echo $pwd . "비밀번호";
echo "<br>";
echo "Contents : " . $contents;