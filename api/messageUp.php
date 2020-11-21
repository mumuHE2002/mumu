<?php

session_start();
//导入配置文件
require './config.php';
error_reporting(5);
error_reporting(0);
//获取url传递值
$user = $_POST['user'];
$message = $_POST['message'];
$date = $_POST['date'];

//判断用户是否输入值,当没输入时不让注册
if(!$user || !$message) {
  echo(
    '<script>alert("请先登录后留言");window.history.back(-1)</script>'
  );
}else{

  $query = "INSERT INTO message01(`user`,`content`,`date`) VALUES('$user','$message','$date')";
  $result = mysqli_query($connID,$query);
  
  if ($result) {
    //注册成功跳转到登录页面
    echo('<script type="text/javascript">alert("留言成功"); window.location.href = "../message.php?nav=4";</script>');
  }else {
    printf("Error: %s\n", mysqli_error($connID));
    echo('<script> aliert("留言失败失败")</script>');
  }
  
}




?>