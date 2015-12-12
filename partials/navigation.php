    <nav class="navdrawer-container promote-layer">
      <h4>Navigation</h4>
      <ul style="margin:0 auto;max-width:1200px;">
                <?php
            // 获取分类
            $terms = get_terms('category', 'orderby=name&hide_empty=0' );

            // 获取到的分类数量
            $count = count($terms);
            if($count > 0){
                // 循环输出所有分类信息
                foreach ($terms as $term) {
                    echo '<li><a href="'.get_term_link($term, $term->slug).'" title="'.$term->name.'">'.$term->name.'</a></li>';
                }
            }
            $mypages = get_pages();

            if(count($mypages) > 0) {
                foreach($mypages as $page) {
                    echo '<li><a href="'.get_page_link($page->ID).'" title="'.$page->post_title.'">'.$page->post_title.'</a></li>';
                }
            }
            else {}

        ?>
      </ul>
    </nav>