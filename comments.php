<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<section class="comments">
  <h3>回复</h3>
  <?php $this->comments()->to($comments); ?>
  <?php if ($comments->have()): ?>
  <ol class="comment-list">
    <?php while($comments->next()): ?>
    <li id="comment-<?php $comments->theId(); ?>">
      <div class="comment-meta"><strong><?php $comments->author(); ?></strong><span><?php $comments->date('Y-m-d H:i'); ?></span></div>
      <div class="comment-content"><?php $comments->content(); ?></div>
    </li>
    <?php endwhile; ?>
  </ol>
  <?php else: ?><p class="muted">暂无回复。</p><?php endif; ?>
  <?php if($this->allow('comment')): ?>
  <form method="post" action="<?php $this->commentUrl() ?>" class="comment-form">
    <?php if(!$this->user->hasLogin()): ?>
    <div class="comment-fields"><input name="author" placeholder="昵称" required><input name="mail" type="email" placeholder="邮箱"></div>
    <?php endif; ?>
    <textarea name="text" placeholder="写下你的回复" required></textarea>
    <button type="submit">提交回复</button>
  </form>
  <?php endif; ?>
</section>
