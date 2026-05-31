<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<section class="board-panel">
  <div class="board-tabs">
    <div class="tab-title">
      <strong><?php echo pudubi_e($this->options->homeTitle ?: '最新帖子'); ?></strong>
      <?php if ($this->is('category')): ?><span> · <?php $this->archiveTitle('', '', ''); ?></span><?php endif; ?>
      <?php if ($this->is('search')): ?><span> · 搜索：<?php $this->archiveTitle('', '', ''); ?></span><?php endif; ?>
    </div>
    <div class="tab-links">
      <a class="active" href="<?php $this->options->siteUrl(); ?>">最新</a>
      <?php $this->widget('Widget_Metas_Category_List')->to($tabs); $ti=0; while($tabs->next() && $ti<4): $ti++; ?>
      <a href="<?php $tabs->permalink(); ?>"><?php $tabs->name(); ?></a>
      <?php endwhile; ?>
    </div>
  </div>
  <?php if ($this->options->homeNotice): ?><div class="notice"><?php echo $this->options->homeNotice; ?></div><?php endif; ?>
  <?php if ($this->options->headerAd): ?><div class="ad-wide"><?php echo $this->options->headerAd; ?></div><?php endif; ?>
  <div id="thread-list" class="thread-list ns-list">
  <?php $n=0; while($this->next()): $n++; ?>
    <article class="thread-row">
      <a class="user-avatar" href="<?php $this->permalink(); ?>"><?php echo pudubi_initial($this->author->screenName ?: 'P'); ?></a>
      <div class="thread-body">
        <h2><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></h2>
        <div class="thread-meta">
          <span><?php $this->date('Y-m-d'); ?></span>
          <span><?php $this->category(' / '); ?></span>
          <span><?php echo pudubi_author_display($this); ?></span>
        </div>
        <?php if (($this->options->showExcerpt ?? '0') == '1'): ?>
        <p class="thread-summary"><?php echo pudubi_excerpt($this, intval($this->options->excerptLength ?: 90)); ?></p>
        <?php endif; ?>
      </div>
      <div class="thread-stats">
        <span><?php $this->commentsNum('0', '1', '%d'); ?><em>回复</em></span>
        <span><?php echo max(1, intval(($this->commentsNum === null) ? 1 : 1)); ?><em>热度</em></span>
      </div>
    </article>
    <?php $every = intval($this->options->listAdEvery ?: 0); if ($every > 0 && $this->options->listAdCode && $n % $every == 0): ?>
    <div class="list-ad"><?php echo $this->options->listAdCode; ?></div>
    <?php endif; ?>
  <?php endwhile; ?>
  </div>
  <div class="pagination">
    <?php $this->pageNav('上一页', '下一页', 2, '...', array('wrapTag' => 'div', 'wrapClass' => 'page-navigator', 'itemTag' => 'span', 'textTag' => 'a', 'currentClass' => 'current')); ?>
  </div>
</section>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
