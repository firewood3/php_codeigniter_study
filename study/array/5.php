<?php
function get_members() {
    return ['egoing', 'k8805', 'sorialgi'];
}

$member = get_members();

for($i = 0; $i < count($member); $i++) {
    echo ucfirst($member[$i]).'<br />';
    # ucfirst 함수는 알파벳 첫글자를 대문자로 만드는 함수이다.
}

?>