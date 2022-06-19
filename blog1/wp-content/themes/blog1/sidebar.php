  <aside class="sidebar">
    <div class="popular-posts">
      <h3 class="popular-posts__title blog-title">Популярные новости</h3>
      <ul class="popular-posts__list list-reset">
        <?php
        $args = array(
          'posts_per_page'      => 3,
          'meta_key' => 'post_view',
          'orderby'        => 'meta_value_num',
          'order'               => 'DESC',
        );
        query_posts($args);
        while (have_posts()) : the_post();
        ?>
          <li class="popular-posts__item">
            <article class="blog-post popular-post__article">
              <h3 class="blog-post__title blog-title">
                <a href="<?php the_permalink() ?>" class="blog-post__link"><?php the_title(); ?></a>
              </h3>
              <time class="blog-post__date"><?php the_time('j M, Y') ?></time>
            </article>
          </li>
        <?php endwhile;
        wp_reset_query(); ?>
      </ul>
    </div>
    <div class="subscribe">
      <h3 class="subscribe__title blog-title">Подписка на рассылку</h3>
      <form action="#" class="subscribe__form sub-form">
        <input type="email" class="sub-form__input form-input" placeholder="Email@gmail.com">
        <button class="sub-form__btn form-btn btn-reset">
          <span>Подписаться</span>
          <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
              <path d="M19.5857 9.85046L1.01474 1.27924C0.719033 1.14496 0.366184 1.22496 0.160475 1.47924C-0.046663 1.73352 -0.0538057 2.09494 0.143332 2.35636L6.25033 10.499L0.143332 18.6417C-0.0538057 18.9031 -0.046663 19.2659 0.159046 19.5188C0.297614 19.6917 0.504752 19.7845 0.714747 19.7845C0.816173 19.7845 0.917599 19.7631 1.01331 19.7188L19.5843 11.1476C19.8386 11.0304 20 10.7776 20 10.499C20 10.2205 19.8386 9.9676 19.5857 9.85046Z" fill="white" />
            </g>
            <defs>
              <clipPath id="clip0">
                <rect width="20" height="20" fill="white" transform="translate(0 0.5)" />
              </clipPath>
            </defs>
          </svg>

        </button>
      </form>
    </div>
  </aside>