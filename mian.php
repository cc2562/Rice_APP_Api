<?php
function getcon()
{
    $file = file_get_contents("./con.json", 'r');
    //echo $file;
    $con = json_decode($file);
    // $con;
    $GLOBALS['mysql_name'] = $con->mysql_name;
    $GLOBALS['mysql_pwd'] = $con->mysql_pwd;
    $GLOBALS['mysql_user'] = $con->mysql_user;
    // echo $GLOBALS['mysql_name'];
}

function link_mysql()
{
    $db = new mysqli('localhost', $GLOBALS['mysql_user'], $GLOBALS['mysql_pwd'], $GLOBALS['mysql_name']);
    if (mysqli_connect_errno()) {
        return "cannot1";
    }
    return $db;

}

function findu_id($id, $db)
{
    $db->select_db('riceapp');
    $test = "select user_id, user_name, vip from user where user_id=?";
    $nei = $db->prepare($test);
    $nei->bind_param('s', $id);
    $nei->execute();
    $user_name = null;
    $user_id = null;
    $vip = null;
    $nei->bind_result($user_id, $user_name, $vip);
    while ($nei->fetch()) {
        echo "<p>ID: $user_id</p><p>Name: $user_name</p>";

    }
}

function getid($nei)
{
//    $nei=link_mysql();
    $sss = $nei->prepare('select user_id from user order by user_id DESC limit 1');
    $sss->execute();
    $endid = 1;
    $sss->bind_result($endid);
    while ($sss->fetch()) {
        return $endid;
    }
}

function login()
{
    echo "HELLO!";
    echo $GLOBALS['mysql_name'];
}