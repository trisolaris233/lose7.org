<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-mb-12 col-offset-1 col-3 kit-hidden-tb" id="secondary" role="complementary">

    <section class="avatar_widget">
        <?php $this->author->gravatar('200') ?>
    </section>

    <section class="name_widget">
        <h2>
        <?php $this->author(); ?>
        </h2>
        (·_·)← 是肮脏的大人脸啊!
    </section>

    <br><br>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>


    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('分类'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
	</section>
    <?php endif; ?>

   
    <section class="app">
    <h3><?php _e('拓展服务'); ?></h3>
    <li><a href="http://kindle.lose7.org">Webpage2Kindle</a></li>
    </section>
    <br>

    <section class="rss">
        <h3><?php _e('RSS订阅');?></h3>
        <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
        <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
    </section>

    <section class="friends">
        <h3><?php _e('友情链接'); ?></h3>
        <?php Links_Plugin::output(); ?>
        
    </section>

    <section class="maki_widget">
        <img id = "maki" src="<?php $this->options->themeUrl('/img/maki.png'); ?>">
    </section>

</div><!-- end #sidebar -->
