<?php
$li = ['a', 'b', 'c', 'd', 'e', 'z'];
# 특정 위치에 원소 넣기
array_splice($li, 2, 0, 'B');
var_dump($li);
?>