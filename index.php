<?php get_header() ?>
  <body class="gc-default mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title" style="margin-left:20px;">
            <?php bloginfo('name'); ?>
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <nav class="mdl-navigation">   
        <?php
            // 获取分类
            $terms = get_terms('category', 'orderby=name&hide_empty=0' );

            // 获取到的分类数量
            $count = count($terms);
            if($count > 0){
                // 循环输出所有分类信息
                foreach ($terms as $term) {
                    echo '<a class="mdl-navigation__link" href="'.get_term_link($term, $term->slug).'" title="'.$term->name.'">'.$term->name.'</a>';
                }
            }
            $mypages = get_pages();

            if(count($mypages) > 0) {
                foreach($mypages as $page) {
                    echo '<a class="mdl-navigation__link" href="'.get_page_link($page->ID).'" title="'.$page->post_title.'">'.$page->post_title.'</a>';
                }
            }
            else {}

        ?>

        </nav>
      </div>

      <main class="gc-default mdl-layout__content">
          <?php if(have_posts());?>
          <?php while ( have_posts() ) : the_post();?>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>
                  <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                </h4>
                <?php the_excerpt() ?><a href="<?php the_permalink(); ?>" class="mdl-button">Read our features</a>
              </div>
              <div class="mdl-card__actions">
                <p>分类：<?php the_category(', '); ?></p>
                <p>标签：<?php the_tags( '', ', ', '' ); ?></p>
              </div>
            </div>
          </section>
          <?php endwhile;?> 
          
      <?php get_footer() ?>
      </main>
    </div>

  

  </body>
</html>
