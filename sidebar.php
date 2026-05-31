<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<aside class="sidebar">
  <section class="side-card forum-stats">
    <h3>站点概览</h3>
    <div class="stat-grid">
      <div><strong><?php Typecho_Widget::widget('Widget_Stat')->to($stat); echo $stat->publishedPostsNum; ?></strong><span>主题</span></div>
      <div><strong><?php echo $stat->publishedCommentsNum; ?></strong><span>回复</span></div>
      <div><strong><?php echo $stat->categoriesNum; ?></strong><span>版块</span></div>
    </div>
  </section>

  <?php if (!isset($this->options->enableStats) || (string)$this->options->enableStats !== '0'): $pdStats = pudubi_stats_data(); ?>
  <section class="side-card analytics-card">
    <h3><?php echo pudubi_e($this->options->statsTitle ?: '站点状态'); ?></h3>
    <div class="analytics-grid">
      <div><strong><?php echo pudubi_format_num($pdStats['online']); ?></strong><span>在线人数</span></div>
      <div><strong><?php echo pudubi_format_num($pdStats['today']); ?></strong><span>今日访问</span></div>
      <div><strong><?php echo pudubi_format_num($pdStats['yesterday']); ?></strong><span>昨日访问</span></div>
      <div><strong><?php echo pudubi_format_num($pdStats['total']); ?></strong><span>总访问量</span></div>
      <div><strong><?php echo pudubi_format_num($pdStats['days']); ?></strong><span>运行天数</span></div>
      <?php if (!isset($this->options->showStatsBots) || (string)$this->options->showStatsBots !== '0'): ?>
      <div><strong><?php echo pudubi_format_num($pdStats['online_bot']); ?></strong><span>搜索蜘蛛</span></div>
      <?php endif; ?>
    </div>
    <p class="analytics-note">统计最近 <?php echo intval($this->options->onlineMinutes ?: 15); ?> 分钟在线访客</p>
  </section>
  <?php endif; ?>
  <section class="side-card">
    <h3>分类版块</h3>
    <ul class="side-list cats">
      <?php $this->widget('Widget_Metas_Category_List')->to($cats); while($cats->next()): ?>
      <li><a href="<?php $cats->permalink(); ?>"><?php $cats->name(); ?></a><span><?php $cats->count(); ?></span></li>
      <?php endwhile; ?>
    </ul>
  </section>
  <section class="side-card">
    <h3>最新内容</h3>
    <ul class="side-list latest">
      <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10')->to($recent); while($recent->next()): ?>
      <li><a href="<?php $recent->permalink(); ?>"><?php $recent->title(); ?></a></li>
      <?php endwhile; ?>
    </ul>
  </section>
  <section class="side-card">
    <h3>标签</h3>
    <div class="tags">
      <?php $this->widget('Widget_Metas_Tag_Cloud', 'limit=30')->to($tags); while($tags->next()): ?>
      <a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a>
      <?php endwhile; ?>
    </div>
  </section>
  <?php if ($this->options->sidebarAd): ?>
  <section class="side-card ad-card">
    <h3>广告位</h3>
    <div class="ad-box"><?php echo $this->options->sidebarAd; ?></div>
  </section>
  <?php endif; ?>
</aside>
