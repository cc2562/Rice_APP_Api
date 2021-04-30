<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>MASIV</title>

    <link rel="stylesheet" href="css/masiv.min.css">
</head>
<body>

<!-- HTML -->
<div class="cols article">
    <div id="login" class="n">
        <h2>登录</h2><br>
        <?php
        $sign = $_GET['sign'];
        if ($sign == 1) {
            echo '<button class="btn red">登录失败！！！</button><br>';
        } elseif ($sign == 2) {
            echo '<button class="btn green">注册成功！！</button><br>';
        }
        ?>
        <div class="card" style="padding: 15px">

            <form method="post" action="./login.php">
                <div class="field">
                    <label class="label-input">
                        <span class="label">用户名</span>
                        <input class="input" type="text" id="name" name="name">
                    </label>
                    <label class="label-input">
                        <span class="label">密码</span>
                        <input class="input" type="password" id="pwd" name="pwd">
                    </label>
                </div>
                <button type="submit" class="btn">登录</button>
            </form>
            <br>
            <br>
            <p>没有账号？</p><a href="./regu.php" class="link">注册</a>
        </div>
    </div>
</div>
<script src="js/masiv.min.js"></script>
</body>
</html>