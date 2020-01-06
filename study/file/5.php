<?php
// 파일이 쓰기 가능한지 여부를 판단.
$filename = 'writeme.txt';
if (is_writable($filename)) {
    echo 'The file is writable';
} else {
    echo 'The file is not writable';
}
?>