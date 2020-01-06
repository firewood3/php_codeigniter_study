<?php

// 연관배열 배열의 인덱스로 숫자나 문자를 사용할 수 있다.
// 다른 언어에서는 문자를 인덱스로 사용하는 것을 연관배열(associative array, hash, dictionary)라고 부른다.
$grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);
// key : egoing, value : 10
var_dump($grades);
echo $grades['egoing'];
?>