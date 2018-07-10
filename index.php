<?php
/**
 * 用于开发网站的typecho主题，力求简约
 * 
 * @package Dev_site_theme
 * @author i@mitkimi.com
 * @version 1.0
 * @link https://github.com/mitkimi/devsite_theme
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<!-- Swiper -->
<div class="swiper-container">
	<div class="swiper-wrapper">
	  <div class="swiper-slide">Slide 1</div>
	  <div class="swiper-slide">Slide 2</div>
	  <div class="swiper-slide">Slide 3</div>
	  <div class="swiper-slide">Slide 4</div>
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>
	<!-- Add Arrows -->
	<div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>
</div>
<script src="<?php $this->options->themeUrl('./assets/swiper/js/swiper.min.js'); ?>"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });
</script>

<div class="layui-container theme-container">
	<div class="theme-flex-container">
		<?php while($this->next()): ?>
		<div class="card">
			<div class="title"><a href="<?php $this->permalink() ?>" target="_blank" ><?php $this->title() ?></a></div>
			<div class="sub-title">作者：<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> | 时间：<?php $this->date(); ?> | <?php $this->category(','); ?> | tags <span class="layui-badge-rim">aaa</span></div>
			<div class="detail">
				<?php $this->content('- 阅读剩余部分 -'); ?>
			</div>
			<a href="<?php $this->permalink() ?>" class="link">阅读全文</a>
		</div>
		<?php endwhile; ?>
	</div>
	<div class="" style="display: none;">
		<?php while($this->next()): ?>
	        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
				<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				<ul class="post-meta">
					<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
					<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
					<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
					<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
				</ul>
	            <div class="post-content" itemprop="articleBody">
	    			<?php $this->content('- 阅读剩余部分 -'); ?>
	            </div>
	        </article>
		<?php endwhile; ?>

	    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
	</div>
</div>


<div class="theme-icons-container">
	<div class="layui-container">
		<a href="#" class="theme-icon">
			<div class="img-box">
				<img src="#">
			</div>
			<p>第一项</p>
		</a>
		<a href="#" class="theme-icon">
			<div class="img-box">
				<img src="#">
			</div>
			<p>第一项</p>
		</a>
		<a href="#" class="theme-icon">
			<div class="img-box">
				<img src="#">
			</div>
			<p>第一项</p>
		</a>
		<a href="#" class="theme-icon">
			<div class="img-box">
				<img src="#">
			</div>
			<p>第一项</p>
		</a>
		<a href="#" class="theme-icon">
			<div class="img-box">
				<img src="#">
			</div>
			<p>第一项</p>
		</a>
		<a href="#" class="theme-icon">
			<div class="img-box">
				<img src="#">
			</div>
			<p>第一项</p>
		</a>
		
	</div>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
