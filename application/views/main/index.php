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
                        <div class="row">
                            <div class="col-2">
                                <img src='/new_php_blog/public/materials/<?php echo $val['id']; ?>.jpg' class="img-fluid" onerror="this.style.display='none'" alt="Фоточка">
                            </div>
                            <div class="col-10">
                                <a href="/new_php_blog/post/<?php echo $val['id']; ?>">
                                    <h2 class="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                                </a>
                                    <h5 class="post-subtitle"><?php echo mb_substr($val['text'], 0, 300); ?></h5>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix">
                <?php echo $pagination; ?>
                </div>
            <?php endif; ?>
            </div>
        <div class="col-lg-2 col-md-10 mx-auto">
        </div>
        <div class="col-lg-2 col-md-10 mx-auto">
            <table class="table">
                <tr>
                <th>
                    <h2>Топ 10 новостей</h2>
                </th></tr>
                <?php $itr_var = 1?>
                <?php foreach ($list as $val): ?>
                <?php if (strtotime(date('Y-m-d'))-strtotime($val['date']) <= 604800): ?>
                <tr>
                    <td>
                        <div class="post-preview">
                        <a href="/new_php_blog/post/<?php echo $val['id']; ?>">
                            <b class="list-group"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></b>
                        </a>
                    </div>
                    </td>
                </tr>
                <?php $itr_var += 1?>
                <?php endif; ?>
                    <?php if($itr_var > 10):?>
                        <?php break; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

</div>