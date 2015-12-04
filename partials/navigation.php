      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title" style="margin-left:20px;">
            <?php bloginfo('name'); ?>
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <form class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </form>
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