<?php
// HTMLからもらった入力内容
$id = $_POST['id'];
$pass = $_POST['pass'];

// 課題
if ($id == "HAL" && $pass == "ph12") {
    echo "OK: 認証が成功しました。";
    exit;
}

// オプション１：長さの制限
if (strlen($id) > 7) {
    echo "IDは7文字以内で入力してください<br>";
}
if (strlen($pass) > 7) {
    echo "パスワードは7文字以内で入力してください<br>";
}

// オプション２：配列
// 二次元配列に正しいIDとパスワードを保存
$accounts = array(
    array("id" => "ths001", "pass" => "001"),
    array("id" => "ths002", "pass" => "002"),
    array("id" => "ths003", "pass" => "003")
);

for ($i = 0; $i < count($accounts); $i++) {
    if ($accounts[$i]["id"] == $id && $accounts[$i]["pass"] == $pass) {
        echo "OK: 認証が成功しました。";
        exit;
    }
}

// オプション３：正規表現
if (preg_match("/ths[0-9]{3}/", $id)) {
    echo "OK: IDの数字が間違ってます";
    exit;
}

echo "NG: IDまたはパスワードが間違います";