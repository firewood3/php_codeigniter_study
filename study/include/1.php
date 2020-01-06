<?php
/*
include
include_once
require
require_once

include와 require의 차이점은 존재하지 않는 파일의 로드를 시도했을 때 
include가 warning를 일으킨다면 require는 fatal error를 일으킨다는 점이다.
fatal error는 warning 보다 심각한 에러이기 때문에 require가 include 보다 엄격한 로드 방법이라고 할 수 있다.
_once라는 접미사가 붙은 것은 파일을 로드 할 때 단 한번만 로드하면 된다는 의미다.
*/
include 'greeting.php';
echo welcome();
?>