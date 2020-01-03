<?php
// $_GET['id']; 는 배열이다.
// http://localhost:8081/study/IO_form/io1.php?id=egoing
// http://localhost:8081/study/IO_form/io1.php?id=wefwef&pw=eee&name=name
echo 'Welcome, ' . $_GET['id']."님 안녕하세요";
echo $_GET['pw'];
echo $_GET['name'];

?>