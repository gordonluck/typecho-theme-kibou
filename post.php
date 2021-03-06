<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

  <article itemscope="" itemtype="http://schema.org/BlogPosting">
    <div class="blog-post">
      <h2 class="blog-post-title" itemprop="name headline"><?php $this->title() ?></h2>
      <p class="blog-post-meta">
        <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>&nbsp;•
        <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time>&nbsp;•
        <?php $this->category(', '); ?>
      </p>

      <?php $this->content(); ?>

    </div>
    <p itemprop="keywords" style="padding-top:10px;"><?php _e('标签: '); ?><?php $this->tags(', ', true, '无'); ?></p>
  </article><!-- /.blog-post -->

  <?php $this->need('comments.php'); ?>

  <nav aria-label="Page navigation">
    <ul class="pagination">
      <li><?php $this->thePrev('%s','<span>没有更多了</span>'); ?></li>
      <li><?php $this->theNext('%s','<span>没有更多了</span>'); ?> </li>
    </ul>
  </nav><!-- /.pagination -->

<style>
  .pagination {
    font-size: 13px;
  }
</style>

<?php $this->need('footer.php'); ?>
