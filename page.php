<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="post-panel page-panel">
  <header class="post-head"><h1><?php $this->title(); ?></h1></header>
  <div class="post-content"><?php $this->content(); ?></div>
</article>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
