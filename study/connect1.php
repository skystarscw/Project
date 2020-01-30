<?php
header("Content-type:text/html;charset=utf-8");    //设置编码
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "study";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8'); //设定字符集
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
// 使用 sql 创建数据表
$sql = "CREATE TABLE stu (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(50) NOT NULL,
 age INT(6) NOT NULL,
 sex VARCHAR(20),
 class VARCHAR (50) NOT NULL
 );";
if (mysqli_query($conn, $sql)) {
    echo "数据表 stu 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}
mysqli_close($conn);
?>