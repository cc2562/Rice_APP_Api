<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>注册</title>

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
        }
        ?>
        <div class="card" style="padding: 15px">

            <form method="post" action="./reg.php">
                <div class="field">
                    <label class="label-input">
                        <span class="label">用户名</span>
                        <input class="input" type="text" id="name" name="name">
                    </label>
                    <label class="label-input">
                        <span class="label">密码</span>
                        <input class="input" type="password" id="pwd" name="pwd">
                    </label>
                    <label class="label-input">
                        <span class="label">邮箱</span>
                        <input class="input" type="email" id="mail" name="mail">
                    </label>
                </div>
                <button type="submit" class="btn">注册</button>
            </form>
            <br>
            <br>
            <p>已有账号？</p><a href="./index.php" class="link">登录</a>
        </div>
    </div>
</div>
<script src="js/masiv.min.js"></script>
</body>
</html>