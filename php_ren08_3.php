<?php
session_start();
print("名前:" . htmlspecialchars($_SESSION['my_name']));
print("<br>");
print("画像ファイル:" . htmlspecialchars($_SESSION['filename']));
print("<br>");
print("性別:" . htmlspecialchars($_SESSION['hito']));
print("<br>");
if(!empty($_SESSION['file'])){
print('<img src="' . $_SESSION['file'] . '"/>');
}else{
    print("画像をアップロードしてください" . '<a href="php_ren08_1.php">戻る</a>');
}
?>