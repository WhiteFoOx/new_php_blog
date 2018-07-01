<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link href="/new_php_blog/public/styles/bootstrap.css" rel="stylesheet">
        <link href="/new_php_blog/public/styles/admin.css" rel="stylesheet">
        <link href="/new_php_blog/public/styles/font-awesome.css" rel="stylesheet">
        <script src="/new_php_blog/public/scripts/jquery.js"></script>
        <script src="/new_php_blog/public/scripts/form.js"></script>
        <script src="/new_php_blog/public/scripts/popper.js"></script>
        <script src="/new_php_blog/public/scripts/bootstrap.js"></script>
        <script src="/new_php_blog/public/ckeditor/ckeditor.js"></script>
    </head>
    <body class="fixed-nav sticky-footer bg-dark">
        <?php if ($this->route['action'] != 'login'): ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
                <a class="navbar-brand" href="/new_php_blog/admin/posts">Панель Администратора</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                        <li class="nav-item">
                            <a class="nav-link" href="/new_php_blog">
                            <i class="fa fa-fw fa-bars"></i>
                            <span class="nav-link-main">Главная страница</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/new_php_blog/admin/add">
                            <i class="fa fa-fw fa-plus"></i>
                            <span class="nav-link-text">Добавить пост</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/new_php_blog/admin/posts">
                            <i class="fa fa-fw fa-list"></i>
                            <span class="nav-link-text">Посты</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="/new_php_blog/admin/logout">
                            <i class="fa fa-fw fa-sign-out"></i>
                            <span class="nav-link-text">Выход</span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        <?php endif; ?>
        <?php echo $content; ?>
        <?php if ($this->route['action'] != 'login'): ?>
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>2018, Гордеев Павел</small>
                    </div>
                </div>
            </footer>
        <?php endif; ?>
    </body>
</html>