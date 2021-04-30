<?php
require("./mian.php");
require("./safe.php");
/*
if(!isset($_POST['name'])||!isset($_POST['pwd'])||!isset($_POST['mail'])){
    echo "not1";
    return "wrong";
    exit;
}
*/
getcon();
$sql = link_mysql();

$name = $_POST['name'];
$pwd = $_POST['pwd'];
$mail = $_POST['mail'];

//$name="2233bbb";
//$mail="ee2wedfteee2222eee";
//$pwd='cc8eeeee222212562';

if ($sql == "cannot1") {
    return wrong;
    exit;
}

//加入数据库
$ma = 'insert into user values (?,?,?,?,0,?)';
//$end_id=getid($sql);
$sql->select_db("user");
$ru = $sql->prepare($ma);
$end_id = getid($sql) + 1;
$str = yan();
$pwdo = pwdy($pwd, $str);
$ru->bind_param('issss', $end_id, $name, $mail, $pwdo, $str);
//$ru->bind_param('sssi',$name,$mail,$pwdo,0);
$ru->execute();
$ru->close();
header("Location: ./index.php?sign=2");