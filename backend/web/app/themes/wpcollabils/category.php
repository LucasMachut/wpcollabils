<?php
get_header(); ?>


<body>
    <?php get_template_part('template_parts/header_menu'); ?>
    <main>
      <div class="container-fluid">
        <h1 class="text-center"><?= single_cat_title() ?></h1>
        <!------form start------>
        <div class="container-categories">

        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post(); ?>
                      <a class="div-categ-item" href="<?php the_permalink() ?>" class="text-danger post-link">
                            <h3 class="mb-3"><?= the_title() ?></h3>
                      </a>
              
            <?php endwhile; ?>
        <?php endif; ?>

        </div>
        <!------form end------>
      </div>
    </main>


<?php get_footer();
?>
