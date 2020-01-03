<html>
<body>
<?php
define('TITLE', 'PHP Tutorial');
echo TITLE; # PHP Tutorial
// 상수라는 것은 변할 수 없는 값이다.
// 한번 정하면 변경이 불가능하다.
define('TITLE', 'JAVA Tutorial'); // 에러가 날수있다.
echo TITLE; # PHP Tutorial
?>
</body>
</html>