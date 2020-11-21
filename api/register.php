<?php

session_start();
//导入配置文件
require './config.php';
error_reporting(5);
error_reporting(0);
//获取url传递值
$username = $_POST['username'];
$userpwd = $_POST['userpwd'];
$phone = $_POST['phone'];

//判断用户是否输入值,当没输入时不让注册
if(!$username || !$username || !$phone) {
  echo(
    '<script>alert("请输入对应的信息");window.history.back(-1)</script>'
  );
}else{
  //判断用户名是否注册
$query = "SELECT * FROM user WHERE `username`='$username'";
$result = mysqli_query($connID,$query);
  $roe = mysqli_fetch_array($result);
  //如果查询到，则表示用户名已经呗注册了，返回上一层
  if($roe) {
    echo(
      '<script>alert("用户名已被注册！请从新输入");window.history.back(-1)</script>'
    );
  }else { //当没有查询到用户名，表示没有被注册。进行数据库写入
    //操作数据库
  $query = "INSERT INTO user(`username`,`userpwd`,`phone`) VALUES('$username','$userpwd','$phone')";
  $result = mysqli_query($connID,$query);
  if ($result) {
    //注册成功跳转到登录页面
    echo('<script type="text/javascript">alert("注册成功"); window.location.href = "../dl.php?nav=99";</script>');
  }else {
    echo('<script> aliert("注册失败")</script>');
  }
  }
}




?>