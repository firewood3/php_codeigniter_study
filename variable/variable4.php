<html>
<body>
<?php
$a = 100;
// 타입을 알고싶으면 gettyle
// 타입을 변경하고 싶으면 settype
// is_array, is_bool, is_callable, is_double
echo gettype($a);
settype($a, 'double');
echo '<br />';
echo gettype($a);
?>
</body>
</html>