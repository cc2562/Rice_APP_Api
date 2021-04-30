<?php
require("./mian.php");
require("./safe.php");
$user = $_POST['name'];
$pwd = $_POST['pwd'];
$user = trim($user);
$pwd = trim($pwd);
//$user="rice";
//$pwd="cc80212562";
getcon();
$sql = link_mysql();
$sql->select_db('user');
$dai = 'select pwd,salt,user_name from user where user_name=?';
$yan = $sql->prepare($dai);
$yan->bind_param('s', $user);
$yan->bind_result($pwdyan, $pwdyan_salt, $username);
$yan->execute();
while ($yan->fetch()) {
    $xuyanpwd = pwdy($pwd, $pwdyan_salt);
    if ($pwdyan == null) {
        header("Location: ./index.php?sign=1");
        exit();
    }
    if ($xuyanpwd == $pwdyan && $user == $username) {
        session_start();
        $_SESSION['token'] = newtocken($xuyanpwd, $user);
        $_SESSION['username'] = $user;
        header("Location: ./index12.php");
    } else {
        header("Location: ./index.php?sign=1");
        exit();
    }
}


