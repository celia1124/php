<?php
if (!isset($pageName)) $pageName = "";

?>

<style>
    .navbar .nav-item.active {
        background-color: #86cbee;
        border-radius: 10px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= WEB_ROOT ?>index_.php">Index</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $pageName == 'ab_list' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= WEB_ROOT ?>ab_list.php">通訊錄 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= $pageName == 'ab_insert' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= WEB_ROOT ?>ab_insert.php">新增通訊錄 <span class="sr-only">(current)</span></a>
                </li>

            </ul>

            <ul class="navbar-nav">
                <?php if (isset($_SESSION['admin'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= WEB_ROOT ?>ab_admin.edit.php"><?= $_SESSION['admin']['account'] ?></a>
                    </li>

                    <li class=" nav-item">
                        <a class="nav-link" href="<?= WEB_ROOT ?>logout.php">登出</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item <?= $pageName == 'login' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= WEB_ROOT ?>login.php">登入</a>
                    </li>

                <?php endif ?>

            </ul>

        </div>
    </div>
</nav>