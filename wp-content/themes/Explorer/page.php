<?php wp_head() ?>
<?php get_header('page') ?>

<!-- Main -->

<div class="blog-catalogs">

<h1 class="blog-catalogs__title">Blogs</h1>
<p class="blog-catalogs__subtitle">Choose and read our blogs</p>

<?php 
    $query_args = array(
        'post_per_page' => '3',
        'paged' => get_query_var('paged') ? : 1
    );
?>
<?php wp_reset_query(); $query = new WP_Query($query_args); ?>
<?php if($query->have_posts()){ while($query->have_posts()){ the_post();?>
<div class="blog-catalogs__cart">
    <img src="<?php the_post_thumbnail( array() ); ?>" alt="" class="blog-catalogs-cart__bg-img">
    <img src="<?php the_post_thumbnail( array() ); ?>" alt="" class="blog-catalogs-cart__icon">
    <p class="blog-catalogs-cart__user-name"><?php the_author(); ?></p>
    <p class="blog-catalogs-cart__date"><?php get_the_date('j-F-Y'); ?></p>
    <p class="blog-catalogs-cart__text"><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" class="blog-catalogs-cart__btn">Continue Reading →</a>
</div>
<?php } ?>
<?php } ?>

<!-- <div class="blog-catalogs__cart">
    <img src="<?php the_post_thumbnail( $size, $attr ); ?>card-bg2.jpg" alt="" class="blog-catalogs-cart__bg-img">
    <img src="<?php the_post_thumbnail( $size, $attr ); ?>Jesica.jpg" alt="" class="blog-catalogs-cart__icon">
    <p class="blog-catalogs-cart__user-name">Jessica Simpson</p>
    <p class="blog-catalogs-cart__date">June 12, 2016</p>
    <p class="blog-catalogs-cart__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, numquam iusto tempore ad modi accusantium odio est sapiente distinctio earum voluptatem dicta, soluta excepturi perferendis, obcaecati nesciunt quam reiciendis alias.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, numquam iusto tempore ad modi accusantium odio est sapiente distinctio earum voluptatem dicta, soluta excepturi perferendis, obcaecati nesciunt quam reiciendis alias.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, numquam iusto tempore ad modi accusantium odio est sapiente distinctio earum voluptatem dicta, soluta excepturi perferendis, obcaecati nesciunt quam reiciendis alias.</p>
    <a class="blog-catalogs-cart__btn">Continue Reading →</a>
</div>

<div class="blog-catalogs__cart">
    <img src="<?php the_post_thumbnail( $size, $attr ); ?>card-bg3.jpg" alt="" class="blog-catalogs-cart__bg-img">
    <img src="<?php the_post_thumbnail( $size, $attr ); ?>Luka.jpg" alt="" class="blog-catalogs-cart__icon">
    <p class="blog-catalogs-cart__user-name">Luke Cage</p>
    <p class="blog-catalogs-cart__date">June 12, 2016</p>
    <p class="blog-catalogs-cart__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, numquam iusto tempore ad modi accusantium odio est sapiente distinctio earum voluptatem dicta, soluta excepturi perferendis, obcaecati nesciunt quam reiciendis alias.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, numquam iusto tempore ad modi accusantium odio est sapiente distinctio earum voluptatem dicta, soluta excepturi perferendis, obcaecati nesciunt quam reiciendis alias.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, numquam iusto tempore ad modi accusantium odio est sapiente distinctio earum voluptatem dicta, soluta excepturi perferendis, obcaecati nesciunt quam reiciendis alias.</p>
    <a class="blog-catalogs-cart__btn">Continue Reading →</a>
</div> -->

<?php get_sidebar() ?>

</div>

<!-- Main -->


<?php get_footer() ?>