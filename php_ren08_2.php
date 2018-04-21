<h1>アンケート</h1>
<p>以下の内容で送信してよろしいですか？</p>
<form action="php_ren08_3.php" method="post">
<?php

$file = $_FILES['image'];
session_start();
$_SESSION['my_name'] = $_POST['my_name'];
$_SESSION['hito'] = $_POST['hito'];
$_SESSION['filename'] = $file['name'];


if(!empty($_POST['my_name'])){
    print("名前:" . $_POST['my_name']);
    print("<br>");
}else{
    print("名前を入力してください");
    print("<br>");
}

if(!empty($_FILES['image'])){
    print("画像ファイル:" . $file['name']);
    print("<br>");
}else{
    print("拡張子がgif,png,jpgのいずれかをアップロードしてください");
    print("<br>");
}

if(!empty($_POST['hito'])){
    print("性別:" . $_POST['hito']);
    print("<br>");
}else{
    print("性別を入力してください");
    print("<br>");
}

$ext = substr($file['name'],-4);
if($ext == '.gif' || $ext == '.jpg' || $ext == '.png'){
    $filePath = './img/' . $file['name'];
    move_uploaded_file($file['tmp_name'],$filePath);
    $_SESSION['file']= $filePath;
}else{
    print("拡張子がgif,png,jpgのいずれかをアップロードしてください");
}

?>
<input type="submit" value="送信します" />
</form>
<br>
<a href="php_ren08_1.php">前の画面に戻る</a>