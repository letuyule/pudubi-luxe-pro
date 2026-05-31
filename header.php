<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo pudubi_seo_title($this); ?></title>
<meta name="description" content="<?php echo pudubi_meta_description($this); ?>">
<?php $kw = pudubi_meta_keywords($this); if ($kw): ?><meta name="keywords" content="<?php echo $kw; ?>"><?php endif; ?>
<link rel="canonical" href="<?php $this->permalink(); ?>">
<meta property="og:type" content="<?php echo $this->is('post') ? 'article' : 'website'; ?>">
<meta property="og:title" content="<?php echo pudubi_seo_title($this); ?>">
<meta property="og:description" content="<?php echo pudubi_meta_description($this); ?>">
<meta property="og:url" content="<?php $this->permalink(); ?>">
<meta name="theme-color" content="#0f172a">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>?v=5.0.0">
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&rss1=&rss2=&atom='); ?>
<?php pudubi_json_ld($this); ?>
<?php if ($this->options->customHead) echo $this->options->customHead; ?>
</head>
<body>
<?php if ($this->options->topBarText): ?>
<div class="site-strip"><div class="container strip-inner"><span><?php echo $this->options->topBarText; ?></span><span><?php $this->options->title(); ?></span></div></div>
<?php endif; ?>
<header class="topbar">
  <div class="container nav-wrap">
    <a class="brand" href="<?php $this->options->siteUrl(); ?>" aria-label="<?php $this->options->title(); ?>">
      <span class="brand-logo"><?php echo pudubi_e($this->options->logoText ?: 'P'); ?></span>
      <span class="brand-name"><?php $this->options->title(); ?></span>
    </a>
    <nav class="nav">
      <a href="<?php $this->options->siteUrl(); ?>">首页</a>
      <?php $this->widget('Widget_Metas_Category_List')->to($catsNav); while($catsNav->next()): ?>
      <a href="<?php $catsNav->permalink(); ?>"><?php $catsNav->name(); ?></a>
      <?php endwhile; ?>
    </nav>
    <div class="tools">
      <form class="search" method="get" action="<?php $this->options->siteUrl(); ?>">
        <input type="text" name="s" placeholder="搜索帖子" value="<?php echo isset($_GET['s']) ? pudubi_e($_GET['s']) : ''; ?>">
      </form>
      <button class="mode-btn" type="button" id="modeBtn" aria-label="深色模式">☾</button>
    </div>
  </div>
</header>
<?php if ($this->is('index') && ($this->options->siteSubtitle || $this->options->homeNotice)): ?>
<section class="container board-hero">
  <div>
    <h1><?php $this->options->title(); ?></h1>
    <?php if ($this->options->siteSubtitle): ?><p><?php echo pudubi_e($this->options->siteSubtitle); ?></p><?php endif; ?>
  </div>
  <div class="hero-actions">
    <a href="#thread-list">最新</a>
    <?php $this->widget('Widget_Metas_Category_List')->to($catsHero); $i=0; while($catsHero->next() && $i<3): $i++; ?>
    <a href="<?php $catsHero->permalink(); ?>"><?php $catsHero->name(); ?></a>
    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>
<main class="container main-layout">
<script>
(function(){
  var key='pudubi-mode';
  if(localStorage.getItem(key)==='dark') document.documentElement.classList.add('dark');
  window.addEventListener('DOMContentLoaded',function(){
    var b=document.getElementById('modeBtn'); if(!b) return;
    b.onclick=function(){document.documentElement.classList.toggle('dark'); localStorage.setItem(key, document.documentElement.classList.contains('dark')?'dark':'light');};
  });
})();
</script>
