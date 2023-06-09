<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta charset="UTF-8">
    <title>Document</title>

    <!--styles-->
    <link rel="stylesheet" href="<?=admin_public_url('styles/main.css') ?>">

    <!--scripts-->
    <script src="<?=admin_public_url('scripts/jquery-1.12.2.min.js') ?>"></script>
<!--    <script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>-->
    <script src="<?=admin_public_url('scripts/admin.js') ?>"></script>

</head>
<body>

<!--navbar-->
<div class="navbar">
    <ul dropdown>
        <li>
            <a href="#">
                <span class="fa fa-home"></span>
                <span class="title">
                    ANOTHER WORDPRESS SITE
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-comment"></span>
                1
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-plus"></span>
                <span class="title">New</span>
            </a>
            <ul>
                <li>
                    <a href="#">
                        New Post
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Page
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Category
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<!--sidebar-->
<div class="sidebar">

    <ul>
        <li>
            <a href="#">
                <span class="fa fa-tachometer"></span>
                <span class="title">
                    Dashboard
                </span>
            </a>
        </li>
        <li class="active">
            <a href="#">
                <span class="fa fa-thumb-tack"></span>
                <span class="title">
                    Posts
                </span>
            </a>
            <ul class="sub-menu">
                <li class="active">
                    <a href="#">
                        All Posts
                    </a>
                </li>
                <li>
                    <a href="#">
                        Add New
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categories
                    </a>
                </li>
                <li>
                    <a href="#">
                        Tags
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-file-image-o"></span>
                <span class="title">
                    Media <span class="pending-count">45</span>
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-file"></span>
                <span class="title">
                    Pages
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-comment"></span>
                <span class="title">
                    Comments
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-plug"></span>
                <span class="title">
                    Plugins
                </span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#">
                        Installed Plugins
                    </a>
                </li>
                <li>
                    <a href="#">
                        Add New
                    </a>
                </li>
                <li>
                    <a href="#">
                        Editor
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-wrench"></span>
                <span class="title">
                    Tools
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-cog"></span>
                <span class="title">
                    Settings
                </span>
            </a>
        </li>
        <li class="line">
            <span></span>
        </li>
    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
            Collapse menu
        </span>
    </a>

</div>
