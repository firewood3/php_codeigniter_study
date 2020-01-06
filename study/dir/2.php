<?php
# scandir은 디렉토리를 탐색하는 기능이다. 첫번째 인자는 탐색할 디렉토리의 경로이고, 두번째 인자는 정렬 방법이다.
# root 위치 설
$dir = './';
$files1 = scandir($dir);
$files2 = scandir($dir,1);

print_r($files1);
print_r($files2);
?>