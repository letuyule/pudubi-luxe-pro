<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</main>
<?php if ($this->options->footerAd): ?><div class="container footer-ad"><?php echo $this->options->footerAd; ?></div><?php endif; ?>
<footer class="footer">
  <div class="container footer-inner">
    <div><?php echo $this->options->footerText ?: 'Powered by Typecho · Pudubi NodeSeek Pro'; ?></div>
    <?php if ($this->options->icp): ?><div><a rel="nofollow" target="_blank" href="https://beian.miit.gov.cn/"><?php echo pudubi_e($this->options->icp); ?></a></div><?php endif; ?>
  </div>
</footer>
<?php if ($this->options->analyticsCode) echo $this->options->analyticsCode; ?>
</body>
</html>
