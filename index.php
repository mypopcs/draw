<?php

/**
 * typecho图片主题，修改自 <a href='https://www.typecho.wiki/typecho-waterfall-stream-picture-theme-pic.html'>pic</a> 主题.<br>原作为网页模板 <a href='https://themeforest.net/item/massive-responsive-multipurpose-html5-template/12503639'>massive</a>.<br>本版完全壁纸相册化，不支持博文显示<br>本主题由<a href="https://www.typecho.wiki/" target="_blank" rel="noopener noreferrer">Typecho.wiki</a>负责分发<br><a href="https://www.typecho.wiki/typecho-lazy-loading-album-theme-pir.html" target="_blank" style="background: #000;padding: 2px 4px;color: #ffeb00;font-size: 12px;" rel="noopener noreferrer">使用说明</a> - <a href="https://www.typecho.wiki/typecho-lazy-loading-album-theme-pir.html#comments" target="_blank" style="background: #000;padding: 2px 4px;color: #ffeb00;font-size: 12px;" rel="noopener noreferrer">Bug反馈</a> - <a href="https://github.com/fordes123/typecho-theme-pir" target="_blank" style="background: #b94a48;padding: 2px 4px;color: #ffffff;font-size: 12px;" rel="noopener noreferrer">作者网站</a> - <a href="https://www.typecho.wiki/category/themes/" target="_blank" style="background: #000;padding: 2px 4px;color: #ffeb00;font-size: 12px;" rel="noopener noreferrer">更多Typecho主题</a>
 * 
 * @package pir
 * @author fordes
 * @version 1.2
 * @link https://github.com/fordes123/typecho-theme-pir
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

<!--body content start-->
<section class="content">
    <div class="container">
        <div class="row ">
            <div class="portfolio portfolio-with-title portfolio-masonry blog-m col-4 gutter ">
                <?php if ($this->have()) : ?>
                    <?php while ($this->next()) : ?>
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img class="img-item lazyload" data-fancybox="gallery" data-src="<?php echo $this->fields->original ?>" src="<?php $this->options->themeUrl('./img/loading.gif'); ?>" alt=""></img>
                                <div class="widget-tags">
                                    <?php if ($this->options->mode) : ?>
                                        <a href="<?php $this->permalink(); ?>">
                                            <!--<i class="fa fa-send"></i> -->
                                            <?php $this->title(); ?>
                                        </a>
                                    <?php else : ?>
                                    <?php if (count($this->tags) == 0) {
                                            $this->category(' ', true, '');
                                        } else {
                                            $this->tags(' ', true, '');
                                        }
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="text-center">
            <div class="page-load-status">
                <div class="loader-ellips tb-preloader-wave infinite-scroll-request"></div>
                <p class="infinite-scroll-last">到底啦～</p>
                <p class="infinite-scroll-error">加载错误</p>
            </div>
        </div>
    </div>
    <div class="ajaxloadpost" style="display:none">
        <?php $this->pageLink('下一页', 'next'); ?>
    </div>
</section>
<!--body content end-->

<?php $this->need('footer.php'); ?>