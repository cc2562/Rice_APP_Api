<html lang="ZH-CN">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>米饭后台--登录</title>
</head>
<body>
<div class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="navbar-brand">米饭的后台</div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
$sign = $_GET['sign'];
?>

<?php
if ($sign == 1) {
    echo '<br><div class="alert alert-warning" role="alert">登录失败</div><br>';
}
?>


<div class="card">
    <div class="card-body">
        <div class="card-title">
            登录
        </div>
        <form action="./login.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">用户名</label>
                <label for="name"></label><input type="text" class="form-control" id="name" name="name"
                                                 placeholder="username">
            </div>
            <label for="exampleFormControlInput1" class="form-label">用户名</label>
            <label for="pwd"></label><input type="password" class="form-control" id="pwd" name="pwd">
            <button type="submit" class="btn btn-primary mb-3" name="submit">Confirm identity</button>
        </form>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>