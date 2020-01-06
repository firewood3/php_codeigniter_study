<?php

# 하나의 파일에는 복수의 네임스페이스가 존재 할 수도 있다.
namespace language\en;
function welcome() {
    return 'Hello world';
}

namespace language\ko;
function welcome() {
    return '안녕 세계';
}
?>