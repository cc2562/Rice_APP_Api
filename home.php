<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1, minimum-scale=1">
    <title>Rice</title>
    <link rel="shortcut icon" href="../ico.ico" type="image/x-icon">
    <link id="theme" rel="stylesheet" href="./css/masiv.min.css">
    <link rel="stylesheet" href="../css/iconfont/iconfont.css">
    <style>
        .nav {
            position: relative;
        }

        .nav:after {
            content: '\20';
            position: absolute;
            z-index: -1;
            left: 8px;
            top: 12px;
            width: .5em;
            height: 1em;
            min-width: 8px;
            background-color: #cce0cc;
            border-radius: 4px;
            transition: all .24s;
        }

        .nav:hover {
            background-color: transparent;
        }

        .nav:hover:after {
            width: 40%;
            left: 12px;
        }

        .logo {
            margin: 0 12px;
            align-self: center;
        }

        .logo h1 {
            font-size: 32px;
            font-weight: 900;
            font-style: italic;
        }

        .logo > img {
            max-height: 30px;
        }

        .drawer {
            padding: 36px 0;
        }

        .tree .li[node-folder] {
            font-weight: 600;
        }

        .tree ul {
            font-size: .9em;
            color: #6a6a6a;
        }

        .tree .li:hover {
            color: #212121;
        }

        .tree .icon-down {
            font-size: .8em;
        }
    </style>
</head>
<body codes="iannism">

<div class="room cols">

    <aside id="masiv-menu" class="sidebar">
        <ul class="drawer tree">
            <li><a class="li opened" node-folder=""><span node-name="">介绍</span><span node-toggler=""><i
                                class="iconfont icon-down"></i></span></a>
                <ul>
                    <li><a class="li opened" href="start.html" target="pages"><span node-name="">仪表盘</span></a></li>
                    <li><a class="li opened" href="m.html" target="pages"><span node-name="">M 对象</span></a></li>
                </ul>
            </li>
            <li><a class="li opened" node-folder=""><span node-name="">基础</span><span node-toggler=""><i
                                class="iconfont icon-down"></i></span></a>
                <ul>
                    <li><a class="li" href="layout.html" target="pages"><span node-name="">布局</span></a></li>
                    <li><a class="li" href="themes.html" target="pages"><span node-name="">主题</span></a></li>
                    <li><a class="li opened" href="iconfont.html" target="pages"><span node-name="">图标</span></a></li>
                    <li><a class="li opened" href="button.html" target="pages"><span node-name="">按钮</span></a></li>
                    <li><a class="li opened" href="text.html" target="pages"><span node-name="">文字内容</span></a></li>
                    <li><a class="li opened" href="form.html" target="pages"><span node-name="">表单</span></a></li>
                    <li><a class="li" href="list.html" target="pages"><span node-name="">列表</span></a></li>
                    <li><a class="li" href="table.html" target="pages"><span node-name="">表格</span></a></li>
                    <li><a class="li opened" href="card.html" target="pages"><span node-name="">卡片</span></a></li>
                    <li><a class="li" href="loading.html" target="pages"><span node-name="">加载</span></a></li>
                </ul>
            </li>
            <li><a class="li opened" node-folder=""><span node-name="">控件</span><span node-toggler=""><i
                                class="iconfont icon-down"></i></span></a>
                <ul>
                    <li><a class="li opened" href="dropmenu.html" target="pages"><span node-name="">下拉菜单</span></a></li>
                    <li><a class="li" href="tab.html" target="pages"><span node-name="">标签页</span></a></li>
                    <li><a class="li opened" href="collapse.html" target="pages"><span node-name="">折叠面板</span></a></li>
                    <li><a class="li" href="message.html" target="pages"><span node-name="">消息</span></a></li>
                    <li><a class="li" href="tip.html" target="pages"><span node-name="">提示</span></a></li>
                    <li><a class="li opened" href="pagination.html" target="pages"><span node-name="">分页</span></a></li>
                    <li><a class="li" href="dialog.html" target="pages"><span node-name="">对话框</span></a></li>
                    <li><a class="li opened" href="drag.html" target="pages"><span node-name="">拖拽</span></a></li>
                </ul>
            </li>
            <li><a class="li" node-folder=""><i class="iconfont icon-plugin"></i><span node-name="">拓展插件</span><span
                            node-toggler=""><i class="iconfont icon-down"></i></span></a>
                <ul>
                    <li><a class="li" href="input.html" target="pages"><i class="iconfont icon-form"></i><span
                                    node-name="">输入框</span></a></li>
                    <li><a class="li" href="tree.html" target="pages"><i class="iconfont icon-tree"></i><span
                                    node-name="">树</span></a></li>
                    <li><a class="li" href="swipe.html" target="pages"><i class="iconfont icon-map"></i><span
                                    node-name="">轮播</span></a></li>
                    <li><a class="li" href="player.html" target="pages"><i class="iconfont icon-youtube"></i><span
                                    node-name="">播放器</span></a></li>
                    <li><a class="li" href="scrollspy.html" target="pages"><i class="iconfont icon-sort"></i><span
                                    node-name="">滚动监听</span></a></li>
                </ul>
            </li>
        </ul>
    </aside>

    <div class="n rows">

        <header class="header cols">
            <a href="./home.php" class="logo"><h1>RICE</h1></a>
            <nav class="navs right">
                <a class="nav" masiv-sidebar="#masiv-menu"><i class="iconfont icon-menu"></i></a>
                <a href="../index.html" class="nav iconfont icon-home"></a>
                <a href="https://github.com/MunGaaKei/masiv" class="nav iconfont icon-github" target="_blank"></a>
                <a href="https://ithanism.cn" class="nav iconfont icon-user" target="_blank" masiv-tip="开发者：求职中"></a>
            </nav>
        </header>

        <div id="ifr-box" class="n" style="overflow: hidden;">
            <?php
            require('./safe.php');
            require('mian.php');
            getcon();
            $too = $_SESSION['token'];
            $name = $_SESSION['name'];
            echo "<p>111111111111111111$too</p>";
            if (yantocken($name, $too) == "yes") {
                echo '<iframe id="ifr" src="./index.php" name="pages" class="iframe"></iframe>';
            } else {
                echo '<iframe id="ifr" src="./compass.php" name="pages" class="iframe"></iframe>';
            }
            ?>

        </div>

    </div>

</div>

<script src="./js/masiv.min.js"></script>
<script src="./js/tree.min.js"></script>
<script>
    M(function () {
        var $iframe = document.getElementById('ifr');
        var $box = $iframe.parentNode;

        M('.drawer').tree({
            data: [{
                name: '介绍',
                open: true,
                children: [
                    {name: '仪表盘', href: './compass.php'},
                    {name: 'M 对象', href: 'm.html'}
                ]
            }, {
                name: '基础',
                open: true,
                children: [
                    {name: '布局', href: 'layout.html'},
                    {name: '主题', href: 'themes.html'},
                    {name: '图标', href: 'iconfont.html'},
                    {name: '按钮', href: 'button.html'},
                    {name: '文字内容', href: 'text.html'},
                    {name: '表单', href: 'form.html'},
                    {name: '列表', href: 'list.html'},
                    {name: '表格', href: 'table.html'},
                    {name: '卡片', href: 'card.html'},
                    {name: '加载', href: 'loading.html'}
                ]
            }, {
                name: '控件',
                open: true,
                children: [
                    {name: '下拉菜单', href: 'dropmenu.html'},
                    {name: '标签页', href: 'tab.html'},
                    {name: '折叠面板', href: 'collapse.html'},
                    {name: '消息', href: 'message.html'},
                    {name: '提示', href: 'tip.html'},
                    {name: '分页', href: 'pagination.html'},
                    {name: '对话框', href: 'dialog.html'},
                    {name: '拖拽', href: 'drag.html'}
                ]
            },
                {
                    icon: '<i class="iconfont icon-plugin"></i>',
                    name: '拓展插件',
                    children: [
                        {name: '输入框', href: 'input.html', icon: '<i class="iconfont icon-form"></i>'},
                        {name: '树', href: 'tree.html', icon: '<i class="iconfont icon-tree"></i>'},
                        {name: '轮播', href: 'swipe.html', icon: '<i class="iconfont icon-map"></i>'},
                        {name: '播放器', href: 'player.html', icon: '<i class="iconfont icon-youtube"></i>'},
                        {name: '滚动监听', href: 'scrollspy.html', icon: '<i class="iconfont icon-sort"></i>'}
                    ]
                }],
            target: 'pages',
            folder: false,
            item: false,
            toggler: '<i class="iconfont icon-down"></i>'
        }).on('click', 'a[href]', function () {
            var div = $box.querySelector('.loading');
            if (!div) {
                div = document.createElement('DIV');
                div.className = 'loading';
                $box.appendChild(div);
            }
        });

        $iframe.addEventListener('load', function () {
            var loading = $box.querySelector('.loading');
            if (loading) {
                loading.style.opacity = 0;
                setTimeout(function () {
                    loading.remove();
                    loading = null;
                }, 300);
            }
        });
    });
</script>


<!---->
</div></body>
</html>