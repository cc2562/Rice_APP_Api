<?php
function yan()
{
    $chars = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    for ($i = 0; $i < 4; $i++) {
        $str .= $chars[mt_rand(0, count($chars) - 1)];
    }
    return $str;
}

function pwdy($pwd, $str)
{

    //salt
    $pwdo = md5(sha1(sha1($pwd) . $str));
    return $pwdo;
}

function newtocken($pwd, $name)
{
    $token = base64_encode(md5(sha1($pwd . date('yyyy') . date('mm'))));
    $sql = link_mysql();
//加入数据库
    $ma = 'insert into tock values (?,?)';
//$end_id=getid($sql);
    $sql->select_db("user");
    $ru = $sql->prepare($ma);
    $ru->bind_param('ss', $name, $token);
//$ru->bind_param('sssi',$name,$mail,$pwdo,0);
    $ru->execute();
    $ru->close();
    return $token;
}


function yantocken($name, $tocken)
{
    if (empty($name)) {
        return "no";
    }
    $sql = link_mysql();
    $daim = 'select tocken from tock where user_name=?';
    $yan = $sql->prepare($daim);
    $yan->bind_param('s', $name);
    $yan->bind_result($right_tocken);
    $yan->execute();
    while ($yan->fetch()) {
        if ($tocken == $right_tocken) {
            return "ok";
        } else {
            return "no";
        }
    }
    return 0;
}