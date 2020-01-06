<html>
<body>
<?php
// 변수 가변변수
$title = 'subject';
// $$title에서 $title은 ;subject를 가리킨다.
// 변수의 이름을 동적으로 변경할 수 있는 문법이다.
// $$title ==> $subject
$$title = 'PHP tutorial';
echo $subject; # PHP tutorial
?> 
</body>
</html>