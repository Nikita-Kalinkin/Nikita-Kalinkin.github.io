<?php get_header(); ?>
<main class="main">
  <section class="banner">
    <h1 class="visually-hidden">Сайт-блог по такой-то теме</h1>
  </section>
  <section class="content">
    <h2 class="visually-hidden">Статьи нашего блога</h2>
    <div class="container content__container">
      <div class="posts">
        <?php
        $result = wp_get_recent_posts([
          'numberposts'      => 1,
          'offset'           => 0,
          'category'         => 0,
          'orderby'          => 'post_date',
          'post_type'        => 'post',
          'suppress_filters' => true,
        ], OBJECT);
        foreach ($result as $post) {
          setup_postdata($post);
        ?>
          <article class="blog-post blog-post--main">
            <?php
            $category = get_the_category();
            $cat_link = get_category_link($category[0]);
            ?>
            <a href="<?php echo $cat_link; ?>" class="blog-post__category">
              <?php echo $category[0]->cat_name; ?>
            </a>
            <h3 class="blog-post__title blog-title">
              <a href="<?php the_permalink() ?>" class="blog-post__link">
                <?php the_title(); ?>
              </a>
            </h3>
            <p class="blog-post__descr">
              <?php echo get_the_excerpt(); ?>
            </p>
            <time class="blog-post__date"><?php the_time('j M, Y') ?></time>
          </article>
        <?php

        }
        wp_reset_postdata();
        ?>
        <ul class="post-grid list-reset">

          <?php if (have_posts()) {
            while (have_posts()) {
              the_post(); ?>
              <!-- Цикл WordPress -->
              <!-- Вывод постов: the_title() и т.д. -->
              <li class="post-grid__item">
                <article class="blog-post">`
                  <?php
                  $category = get_the_category();
                  $cat_link = get_category_link($category[0]);
                  ?>
                  <a href="<?php echo $cat_link; ?>" class="blog-post__category">
                    <?php echo $category[0]->cat_name; ?>
                  </a>
                  <h3 class="blog-post__title blog-title">
                    <a href="<?php the_permalink() ?>" class="blog-post__link">
                      <?php the_title(); ?>
                    </a>
                  </h3>
                  <p class="blog-post__descr">
                    <?php echo get_the_excerpt(); ?>
                  </p>
                  <time class="blog-post__date"><?php the_time('j M, Y') ?></time>
                </article>
              </li>
            <?php }
          } else { ?>
            <p>Записей нет.</p>
          <?php } ?>
        </ul>
        <ul class="pagination list-reset">
          <?php echo custom_pagination() ?>
        </ul>
      </div>
      <?php get_sidebar($name, $args); ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>