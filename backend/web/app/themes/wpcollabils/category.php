<?php
get_header(); ?>


<body>
    <?php get_template_part('template_parts/header_menu'); ?>
    <main>
      <div class="container-fluid">
        <h1>Liste des catégories</h1>
        <!------form start------>
        <div class="container-categories">

        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post(); ?>

            <div class="container-xxl py-5">
                <div class="container-card">
                  <div class="row g-5 d-flex justify-content-around">
                    <div class="col-lg-4 col-sm-6 d-flex justify-content-center">
                      <a href="<?php the_permalink() ?>" class="category-link">
                        <div class="">
                          <div class="text-center">
                            <h3 class="mb-3"><?= the_title() ?></h3>
                          </div>
                        </div>
                      </a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>

        </div>
        <!------form end------>
      </div>
    </main>


<?php get_footer();
?>
