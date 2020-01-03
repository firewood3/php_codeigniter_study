<?php
// 0는 false 0이 아닌 숫자는 true를 대체할 수 있다.
if (1 and 1) {
    echo 1;
}
if (1 and 0) {
    echo 2;
}
if (0 and 1) {
	echo 3;
}
if (0 and 0) {
	echo 4;
}
?>