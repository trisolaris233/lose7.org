<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<style>
    #header {
        display: block;
        height: 150px;
    }
</style>
<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post-single" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta">
            <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
            <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        </br></br>
        <blockquote>
            <?php _e('本文由') ?><a href="<?php $this->options->siteUrl(); ?>"><u><?php $this->author(); ?></u></a><?php _e('创作， 采用') ?>
            <u><a target="_blank" href="https://creativecommons.org/licenses/by/4.0/"><?php _e('知识共享署名4.0')?></a></u><?php _e('国际许可协议许可') ?>
            </br></br>
            <?php _e('本文链接: ') ?><a href="<?php $this->permalink(); ?>"><?php $this->permalink(); ?></a>
            </br></br>
            <?php _e('您可以自由的转载和修改，但请务必注明文章来源.');?>
        </blockquote>
        </br></br>
        <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
        
    </article>
    
    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
