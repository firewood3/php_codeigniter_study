<?php
$li = ['a', 'b', 'c', 'd', 'e', 'z'];
// 배열의 첫번째 원소 재거
array_shift($li);
var_dump($li);
# 배열의 마지막 원소 제거
array_pop($li);
var_dump($li);
/*
array_push // 마지막 위치에 원소 추가
array_pop // 마지막 위치에 원소 제거
array_shift // 첫번쨰 위치에 원소 제거
array_unshift // 첫번째 위치에 원소 추가
*/
?>
