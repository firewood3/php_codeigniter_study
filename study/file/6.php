<?php
# 파일이 존재하는지 여부를 판단.
$filename = 'readme.txt';
if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename is not exists";
}
?>