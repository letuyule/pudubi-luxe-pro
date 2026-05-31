<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="post-panel">
  <div class="breadcrumb"><a href="<?php $this->options->siteUrl(); ?>">首页</a><span>/</span><?php $this->category(' / '); ?></div>
  <header class="post-head">
    <h1><?php $this->title(); ?></h1>
    <div class="thread-meta post-meta">
      <span><?php $this->date('Y-m-d H:i'); ?></span>
      <span><?php echo pudubi_author_display($this); ?></span>
      <span><?php $this->category(' / '); ?></span>
      <span><?php $this->commentsNum('0 回复', '1 回复', '%d 回复'); ?></span>
    </div>
  </header>
  <?php if ($this->options->postTopAd): ?><div class="ad-wide post-ad"><?php echo $this->options->postTopAd; ?></div><?php endif; ?>
  <div class="post-content"><?php $this->content(); ?></div>
  <?php if ($this->options->postBottomAd): ?><div class="ad-wide post-ad"><?php echo $this->options->postBottomAd; ?></div><?php endif; ?>
  <nav class="post-nav">
    <div><?php $this->thePrev('上一篇：%s', '上一篇：没有了'); ?></div>
    <div><?php $this->theNext('下一篇：%s', '下一篇：没有了'); ?></div>
  </nav>
  <?php $this->need('comments.php'); ?>
</article>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
