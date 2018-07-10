<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./assets/layui/css/layui.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./assets/swiper/css/swiper.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('markdown.css'); ?>">

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="header-container">
    <div class="layui-container">
        <ul class="layui-nav">
          <li class="layui-nav-item">
            <?php if ($this->options->logoUrl): ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                </a>
            <?php else: ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                <p class="description" style='display:none'><?php $this->options->description() ?></p>
            <?php endif; ?>
          </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <!--首页-->
            <li <?php if($this->is('index')): ?> class="layui-nav-item layui-this"<?php else: ?> class="layui-nav-item" <?php endif; ?> >
                <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
            </li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li 
                    <?php if($this->is('page', $pages->slug)): ?>
                        class="layui-nav-item layui-this" 
                    <?php else: ?>
                        class="layui-nav-item" 
                    <?php endif; ?> 
                >
                    <a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
                </li>
            <?php endwhile; ?>

            <li class="layui-nav-item">
              <a href="javascript:;">前端</a>
              <dl class="layui-nav-child">
                <dd><a href="">选项1</a></dd>
                <dd><a href="">选项2</a></dd>
                <dd><a href="">选项3</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item">
              <a href="javascript:;">后端</a>
              <dl class="layui-nav-child">
                <dd><a href="">移动模块</a></dd>
                <dd><a href="">后台模版</a></dd>
                <dd class="layui-this"><a href="">选中项</a></dd>
                <dd><a href="">电商平台</a></dd>
              </dl>
            </li>
            <li class="layui-nav-item">
                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                    <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                </form>
            </li>
        </ul>
    </div>
</div>

    
    
