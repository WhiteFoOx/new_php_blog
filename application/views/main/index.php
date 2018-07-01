<header class="masthead" style="background-image: url('/new_php_blog/public/images/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Простой блог на php</h1>
                    <span class="subheading">Гордеев Павел</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p>Список постов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                        <img src='/new_php_blog/public/materials/<?php echo $val['id']; ?>.jpg' width="150" height="100" onerror="this.style.display='none'" alt="Фоточка">
                        <a href="/new_php_blog/post/<?php echo $val['id']; ?>">
                            <h2 class="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                        </a>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars(substr($val['text'], 0, 300), ENT_QUOTES); ?></h5>
                        
                        <p class="post-meta">Идентфикатор этого поста <?php echo $val['id']; ?></p>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix">
                <?php echo $pagination; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>