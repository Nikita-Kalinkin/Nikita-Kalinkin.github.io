<?php get_header(); ?>
<!-- Проверка наличия записей в цикле -->
<?php if (have_posts()) : ?>

  <!-- Начало цикла -->
  <?php while (have_posts()) : the_post(); ?>
    <main class="main">
      <div class="post-banner">
        <div class="container post-banner__container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
      </div>
      <section class="post-content">
        <div class="container post-content__container">
          <div class="post-wrapper">
            <div class="post">
              <div class="post-meta">
                <?php
                $category = get_the_category();
                $cat_link = get_category_link($category[0]);
                ?>
                <a href="<?php echo $cat_link; ?>" class="post-category">
                  <?php echo $category[0]->cat_name; ?>
                </a>
                <time class="post-date"><?php the_time('j M, Y') ?></time>
              </div>
              <h1 class="blog-title post-title"> <?php the_title(); ?></h1>
              <?php the_content('', true); ?>
            </div>
            <div class="post-links">
              <?php $prv_post = get_previous_post();
              $next_post = get_next_post();
              ?>
              <?php if (!empty($prv_post)) { ?>
                <a href="<?php echo get_permalink($prv_post->ID); ?>" class="post-links__link post-links__link--prev" rel="prev">
                  <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                      <path d="M2.41344 5.22558L7.03874 0.613083C7.19028 0.462049 7.43563 0.462303 7.58692 0.613865C7.73809 0.765407 7.7377 1.01089 7.58614 1.16205L3.23616 5.50002L7.58629 9.83797C7.73784 9.98914 7.73823 10.2345 7.58708 10.386C7.51124 10.462 7.41188 10.5 7.31253 10.5C7.21342 10.5 7.11446 10.4623 7.03876 10.3868L2.41344 5.77443C2.34046 5.70181 2.2995 5.60299 2.2995 5.50002C2.2995 5.39705 2.34057 5.29834 2.41344 5.22558Z" fill="#5D71DD" />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect width="10" height="10" fill="white" transform="matrix(-1 0 0 1 10 0.5)" />
                      </clipPath>
                    </defs>
                  </svg>
                  Предыдущая новость
                </a>
              <?php } ?>

              <?php if (!empty($next_post)) { ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="post-links__link post-links__link--next" rel="next">
                  Следующая новость
                  <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.58656 5.22558L0.961262 0.613083C0.80972 0.462049 0.56437 0.462303 0.413081 0.613865C0.26191 0.765407 0.2623 1.01089 0.413862 1.16205L4.76384 5.50002L0.413706 9.83797C0.262164 9.98914 0.261773 10.2345 0.412925 10.386C0.488764 10.462 0.58812 10.5 0.687475 10.5C0.786576 10.5 0.88554 10.4623 0.961243 10.3868L5.58656 5.77443C5.65954 5.70181 5.7005 5.60299 5.7005 5.50002C5.7005 5.39705 5.65943 5.29834 5.58656 5.22558Z" fill="#5D71DD" />
                  </svg>
                </a>
              <?php } ?>

            </div>
          </div>
          <?php get_sidebar($name, $args); ?>
        </div>
      </section>
    </main>

  <?php endwhile; ?>
  <!-- Полное окончание цикла. -->

  <!-- Если записей в цикле нет — цикл не сработал (else) -->
<?php else : ?>

<?php endif; ?>
<?php get_footer(); ?>