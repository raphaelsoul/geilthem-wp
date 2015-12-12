    <?php get_header() ?>

    <?php get_template_part('partials/navigation') ?>

    <main>
      <div id="container" class="g-wide--3 g-medium--half">
        <?php if(have_posts());?>
          <?php while ( have_posts() ) : the_post();?>
        <article>
          <section><h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1></section>
          <section>
            <?php the_excerpt() ?><a href="<?php the_permalink(); ?>">readmore</a>
          </section>
          <footer>
            <div>
              <p>分类：<?php the_category(', '); ?></p>
                <p>标签：<?php the_tags( '', ', ', '' ); ?></p>
                <p>发表时间： <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>
            </div>
          </footer>
        </article>
        <?php endwhile; ?>
        <?php
    the_posts_pagination( array(
        'prev_text'          =>上页,
        'next_text'          =>下页,
        'before_page_number' => '<span class="meta-nav screen-reader-text">第 </span>',
        'after_page_number' => '<span class="meta-nav screen-reader-text"> 页</span>',
    ) );
?>
      </div>
      <div id="sidebar" class="g-wide--1 g-miedium--half g-wide--last g--last">
        <div>sidebar block1</div>
        <div>sidebar block1</div>
        <div>sidebar block1</div>
        <div>sidebar block1</div>
        <div>sidebar block1</div>
      </div>
    </main>
  </body>
</html>
