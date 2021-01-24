<?php
$a = $_POST['id'];
$b = $_POST['password'];
$c = mb_strlen($a);
$d = mb_strlen($b);
$account = array();
$account[0]['id'] = "ths001";
$account[1]['id'] = "ths002";
$account[2]['id'] = "ths003";
$account[0]['password'] = "001";
$account[1]['password'] = "002";
$account[2]['password'] = "003";

if (preg_match('/[0-9]/',$account)) {
    echo "<h1>認証結果</h1>注意：7文字以下にしてください";
}
for ($i = 0; $i < 3; $i++) {
    if ($account[$i]["id"] == $a  && $account[$i]["password"] == $b) {
        print "<h1>認証結果</h1>OK：認証は成功しました！";
        exit;
    }
}
print "NG：ID またはパスワードが違います";
