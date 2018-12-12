<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<?php
ini_set("display_errors", "1");
$uploaddir = 'C:\Bitnami\wampstack-7.1.23-0\apache2\htdocs\ossw_cardnews\assets\images_cardnews\\';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "파일의 업로드가 성공하였습니다..\n";
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";
}
echo '자세한 디버깅 정보입니다:';
print_r($_FILES);
print "</pre>";
?>
<img src = "file/<?=$_FILES['userfile']['name']?>" />
</body>
</html>
