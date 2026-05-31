<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoText = new Typecho_Widget_Helper_Form_Element_Text('logoText', NULL, 'P', _t('Logo文字'), _t('顶部方形 Logo 内显示，建议 1 个字母或汉字'));
    $form->addInput($logoText);

    $siteSubtitle = new Typecho_Widget_Helper_Form_Element_Text('siteSubtitle', NULL, '普渡社会大学，你的终身学习学校。', _t('站点副标题'), _t('显示在首页顶部简介，可留空'));
    $form->addInput($siteSubtitle);

    $topBarText = new Typecho_Widget_Helper_Form_Element_Text('topBarText', NULL, '', _t('顶部细栏文字'), _t('例如：轻论坛 · 资源站 · 技术分享；不想显示请留空'));
    $form->addInput($topBarText);

    $homeTitle = new Typecho_Widget_Helper_Form_Element_Text('homeTitle', NULL, '最新帖子', _t('首页列表标题'), _t('例如：最新帖子 / 最新内容'));
    $form->addInput($homeTitle);


    $enableStats = new Typecho_Widget_Helper_Form_Element_Radio('enableStats', array('1' => _t('开启'), '0' => _t('关闭')), '1', _t('站点统计模块'), _t('开启后自动记录 PV、在线人数、今日访问、总访问等，并在侧边栏显示。'));
    $form->addInput($enableStats);

    $statsTitle = new Typecho_Widget_Helper_Form_Element_Text('statsTitle', NULL, '站点状态', _t('统计模块标题'), _t('显示在侧边栏统计卡片顶部。'));
    $form->addInput($statsTitle);

    $onlineMinutes = new Typecho_Widget_Helper_Form_Element_Text('onlineMinutes', NULL, '15', _t('在线人数统计时间'), _t('单位：分钟；默认统计最近 15 分钟活跃访客。'));
    $form->addInput($onlineMinutes);

    $showStatsBots = new Typecho_Widget_Helper_Form_Element_Radio('showStatsBots', array('1' => _t('显示'), '0' => _t('隐藏')), '1', _t('显示蜘蛛数量'), _t('识别 Google/Baidu/Bing/搜狗等搜索引擎蜘蛛。'));
    $form->addInput($showStatsBots);

    $siteStartDate = new Typecho_Widget_Helper_Form_Element_Text('siteStartDate', NULL, '', _t('建站日期'), _t('格式：2024-01-01；用于计算运行天数。留空则按首条访问记录计算。'));
    $form->addInput($siteStartDate);


    $authorDisplayName = new Typecho_Widget_Helper_Form_Element_Text('authorDisplayName', NULL, '普渡社会大学', _t('列表作者显示名'), _t('用于列表/文章页显示，避免暴露管理员邮箱；留空则显示账号昵称。'));
    $form->addInput($authorDisplayName);

    $homeNotice = new Typecho_Widget_Helper_Form_Element_Textarea('homeNotice', NULL, '', _t('首页公告'), _t('支持 HTML，显示在首页列表顶部。'));
    $form->addInput($homeNotice);

    $showExcerpt = new Typecho_Widget_Helper_Form_Element_Radio('showExcerpt', array('0' => _t('关闭'), '1' => _t('开启')), '0', _t('列表摘要'), _t('NodeSeek 风格建议关闭；开启后每条显示一行摘要。'));
    $form->addInput($showExcerpt);

    $excerptLength = new Typecho_Widget_Helper_Form_Element_Text('excerptLength', NULL, '90', _t('摘要字数'), _t('仅在开启摘要时生效，建议 60-120。'));
    $form->addInput($excerptLength);

    $listAdEvery = new Typecho_Widget_Helper_Form_Element_Text('listAdEvery', NULL, '0', _t('列表广告间隔'), _t('0=不插入；例如填 5 表示每 5 条帖子插入一次列表广告'));
    $form->addInput($listAdEvery);

    $listAdCode = new Typecho_Widget_Helper_Form_Element_Textarea('listAdCode', NULL, '', _t('列表广告代码'), _t('支持 Google Ads / HTML / JS。'));
    $form->addInput($listAdCode);

    $seoKeywords = new Typecho_Widget_Helper_Form_Element_Text('seoKeywords', NULL, '', _t('首页 SEO 关键词'), _t('多个关键词用英文逗号分隔'));
    $form->addInput($seoKeywords);

    $seoDescription = new Typecho_Widget_Helper_Form_Element_Textarea('seoDescription', NULL, '', _t('首页 SEO 描述'), _t('建议 80-150 字'));
    $form->addInput($seoDescription);

    $headerAd = new Typecho_Widget_Helper_Form_Element_Textarea('headerAd', NULL, '', _t('顶部广告代码'), _t('显示在列表上方，支持广告代码/HTML/JS'));
    $form->addInput($headerAd);

    $sidebarAd = new Typecho_Widget_Helper_Form_Element_Textarea('sidebarAd', NULL, '', _t('侧边栏广告代码'), _t('显示在右侧栏'));
    $form->addInput($sidebarAd);

    $postTopAd = new Typecho_Widget_Helper_Form_Element_Textarea('postTopAd', NULL, '', _t('文章顶部广告'), _t('显示在文章正文上方'));
    $form->addInput($postTopAd);

    $postBottomAd = new Typecho_Widget_Helper_Form_Element_Textarea('postBottomAd', NULL, '', _t('文章底部广告'), _t('显示在文章正文下方'));
    $form->addInput($postBottomAd);

    $footerAd = new Typecho_Widget_Helper_Form_Element_Textarea('footerAd', NULL, '', _t('全站底部广告'), _t('显示在页脚上方'));
    $form->addInput($footerAd);

    $analyticsCode = new Typecho_Widget_Helper_Form_Element_Textarea('analyticsCode', NULL, '', _t('统计代码'), _t('Google Analytics / 百度统计 / CNZZ / Cloudflare Analytics 等，会输出在 </body> 前'));
    $form->addInput($analyticsCode);

    $customHead = new Typecho_Widget_Helper_Form_Element_Textarea('customHead', NULL, '', _t('自定义 Head 代码'), _t('站长验证、额外 meta、额外 CSS，输出在 </head> 前'));
    $form->addInput($customHead);

    $icp = new Typecho_Widget_Helper_Form_Element_Text('icp', NULL, '', _t('备案号'), _t('没有可留空'));
    $form->addInput($icp);

    $footerText = new Typecho_Widget_Helper_Form_Element_Textarea('footerText', NULL, 'Powered by Typecho · Theme Pudubi Luxe Forum Pro', _t('页脚文字'), _t('支持 HTML'));
    $form->addInput($footerText);
}

function themeFields($layout) {
    $seoTitle = new Typecho_Widget_Helper_Form_Element_Text('seoTitle', NULL, '', _t('SEO标题'), _t('可留空，默认使用文章标题'));
    $layout->addItem($seoTitle);
    $seoDescription = new Typecho_Widget_Helper_Form_Element_Textarea('seoDescription', NULL, '', _t('SEO描述'), _t('可留空，默认截取文章内容'));
    $layout->addItem($seoDescription);
    $seoKeywords = new Typecho_Widget_Helper_Form_Element_Text('seoKeywords', NULL, '', _t('SEO关键词'), _t('多个关键词用英文逗号分隔'));
    $layout->addItem($seoKeywords);
}

function pudubi_e($str) { return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8'); }

function pudubi_excerpt($widget, $length = 120) {
    $text = strip_tags($widget->content);
    $text = preg_replace('/\s+/', ' ', $text);
    if (function_exists('mb_substr')) {
        $short = mb_substr($text, 0, $length, 'UTF-8');
        return $short . (mb_strlen($text, 'UTF-8') > $length ? '...' : '');
    }
    return substr($text, 0, $length) . (strlen($text) > $length ? '...' : '');
}

function pudubi_seo_title($archive) {
    $opts = Helper::options();
    if (($archive->is('post') || $archive->is('page')) && isset($archive->fields->seoTitle) && $archive->fields->seoTitle) {
        return pudubi_e($archive->fields->seoTitle);
    }
    if ($archive->is('index')) return pudubi_e($opts->title . ' - ' . $opts->description);
    return pudubi_e($archive->getArchiveTitle() . ' - ' . $opts->title);
}

function pudubi_meta_description($archive) {
    $opts = Helper::options();
    if ($archive->is('post') || $archive->is('page')) {
        if (isset($archive->fields->seoDescription) && $archive->fields->seoDescription) return pudubi_e($archive->fields->seoDescription);
        return pudubi_e(pudubi_excerpt($archive, 150));
    }
    if ($archive->is('index') && isset($opts->seoDescription) && $opts->seoDescription) return pudubi_e($opts->seoDescription);
    return pudubi_e($opts->description ?: $opts->title);
}

function pudubi_meta_keywords($archive) {
    $opts = Helper::options();
    if (($archive->is('post') || $archive->is('page')) && isset($archive->fields->seoKeywords) && $archive->fields->seoKeywords) return pudubi_e($archive->fields->seoKeywords);
    if ($archive->is('index') && isset($opts->seoKeywords) && $opts->seoKeywords) return pudubi_e($opts->seoKeywords);
    return '';
}

function pudubi_initial($name) {
    $name = trim(strip_tags((string)$name));
    if (!$name) return 'P';
    if (function_exists('mb_substr')) return mb_strtoupper(mb_substr($name, 0, 1, 'UTF-8'), 'UTF-8');
    return strtoupper(substr($name, 0, 1));
}

function pudubi_json_ld($archive) {
    $opts = Helper::options();
    if ($archive->is('post')) {
        $data = array(
            '@context' => 'https://schema.org', '@type' => 'Article',
            'headline' => strip_tags($archive->title),
            'description' => strip_tags(pudubi_meta_description($archive)),
            'url' => $archive->permalink,
            'datePublished' => date('c', $archive->created),
            'dateModified' => date('c', $archive->modified ?: $archive->created),
            'author' => array('@type'=>'Person','name'=>strip_tags($archive->author->screenName ?: $opts->title)),
            'publisher' => array('@type'=>'Organization','name'=>strip_tags($opts->title))
        );
    } else {
        $data = array('@context'=>'https://schema.org','@type'=>'WebSite','name'=>strip_tags($opts->title),'url'=>$opts->siteUrl,'description'=>strip_tags($opts->description));
    }
    echo '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) . '</script>';
}


function pudubi_author_display($widget = null) {
    $opts = Helper::options();
    if (isset($opts->authorDisplayName) && trim($opts->authorDisplayName) !== '') {
        return pudubi_e($opts->authorDisplayName);
    }
    $name = '';
    if ($widget && isset($widget->author) && isset($widget->author->screenName)) {
        $name = trim((string)$widget->author->screenName);
    }
    if (!$name || strpos($name, '@') !== false) {
        $name = $opts->title ?: '站长';
    }
    return pudubi_e($name);
}


/* ===== Pudubi Analytics Pro v9 ===== */
function pudubi_client_ip() {
    $keys = array('HTTP_CF_CONNECTING_IP', 'HTTP_X_REAL_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR');
    foreach ($keys as $key) {
        if (!empty($_SERVER[$key])) {
            $ip = trim(explode(',', $_SERVER[$key])[0]);
            return substr($ip, 0, 64);
        }
    }
    return '0.0.0.0';
}

function pudubi_is_bot($ua = '') {
    $ua = strtolower((string)$ua);
    if ($ua === '') return 0;
    $bots = array('bot','spider','crawl','slurp','baiduspider','googlebot','bingbot','sogou','360spider','bytespider','yisouspider','duckduckbot','yandex','semrush','ahrefs');
    foreach ($bots as $bot) {
        if (strpos($ua, $bot) !== false) return 1;
    }
    return 0;
}

function pudubi_stats_table() {
    static $done = false;
    $db = Typecho_Db::get();
    $table = $db->getPrefix() . 'pudubi_visits';
    if (!$done) {
        $sql = "CREATE TABLE IF NOT EXISTS `{$table}` (
            `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            `ip` VARCHAR(64) NOT NULL DEFAULT '',
            `ua` VARCHAR(255) NOT NULL DEFAULT '',
            `url` VARCHAR(255) NOT NULL DEFAULT '',
            `ref` VARCHAR(255) NOT NULL DEFAULT '',
            `is_bot` TINYINT(1) NOT NULL DEFAULT 0,
            `created` INT UNSIGNED NOT NULL DEFAULT 0,
            PRIMARY KEY (`id`),
            KEY `created` (`created`),
            KEY `ip_created` (`ip`,`created`),
            KEY `bot_created` (`is_bot`,`created`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        try { $db->query($sql); } catch (Exception $e) {}
        $done = true;
    }
    return $table;
}

function pudubi_stats_track() {
    $opts = Helper::options();
    if (isset($opts->enableStats) && (string)$opts->enableStats === '0') return;
    $uri = isset($_SERVER['REQUEST_URI']) ? (string)$_SERVER['REQUEST_URI'] : '/';
    if (strpos($uri, '/admin') !== false || strpos($uri, '/action/') !== false) return;
    $db = Typecho_Db::get();
    $table = pudubi_stats_table();
    $ip = addslashes(pudubi_client_ip());
    $uaRaw = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $ua = addslashes(substr($uaRaw, 0, 255));
    $url = addslashes(substr($uri, 0, 255));
    $ref = addslashes(substr(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '', 0, 255));
    $isBot = pudubi_is_bot($uaRaw);
    $now = time();
    try {
        $db->query("INSERT INTO `{$table}` (`ip`,`ua`,`url`,`ref`,`is_bot`,`created`) VALUES ('{$ip}','{$ua}','{$url}','{$ref}',{$isBot},{$now})");
        // 轻量清理：保留最近 180 天访问明细，避免表无限增长
        if (mt_rand(1, 200) === 1) {
            $old = $now - 180 * 86400;
            $db->query("DELETE FROM `{$table}` WHERE `created` < {$old}");
        }
    } catch (Exception $e) {}
}

function pudubi_stats_scalar($sql, $default = 0) {
    try {
        $db = Typecho_Db::get();
        $row = $db->fetchRow($db->query($sql));
        if (!$row) return $default;
        $val = array_values($row)[0];
        return intval($val);
    } catch (Exception $e) { return $default; }
}

function pudubi_stats_data() {
    $table = pudubi_stats_table();
    $opts = Helper::options();
    $now = time();
    $today = strtotime(date('Y-m-d 00:00:00'));
    $yesterday = $today - 86400;
    $onlineMinutes = isset($opts->onlineMinutes) ? max(1, intval($opts->onlineMinutes)) : 15;
    $onlineSince = $now - $onlineMinutes * 60;
    $first = pudubi_stats_scalar("SELECT MIN(`created`) FROM `{$table}` WHERE `created` > 0", $today);
    if (isset($opts->siteStartDate) && preg_match('/^\d{4}-\d{2}-\d{2}$/', trim($opts->siteStartDate))) {
        $first = strtotime(trim($opts->siteStartDate));
    }
    return array(
        'online' => pudubi_stats_scalar("SELECT COUNT(DISTINCT `ip`) FROM `{$table}` WHERE `created` >= {$onlineSince}"),
        'online_bot' => pudubi_stats_scalar("SELECT COUNT(DISTINCT `ip`) FROM `{$table}` WHERE `created` >= {$onlineSince} AND `is_bot` = 1"),
        'today' => pudubi_stats_scalar("SELECT COUNT(*) FROM `{$table}` WHERE `created` >= {$today}"),
        'yesterday' => pudubi_stats_scalar("SELECT COUNT(*) FROM `{$table}` WHERE `created` >= {$yesterday} AND `created` < {$today}"),
        'total' => pudubi_stats_scalar("SELECT COUNT(*) FROM `{$table}`"),
        'days' => max(1, floor(($now - intval($first)) / 86400) + 1),
    );
}

function pudubi_format_num($num) {
    return number_format(max(0, intval($num)));
}
