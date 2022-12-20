<?php
get_header();
the_terms( get_the_ID() , 'demandes' ); ?>

<body>
    <?php get_template_part('template_parts/header_menu') ?>
    <main>
        <?php if(have_posts()) : ?>
            <?php while ( have_posts() ): ?>
                <?php the_post() ?>
                <h2 class="section-title text-center"><?= the_title() ?></h2>

                <div class="single-post-content-container">
                    <?php the_content() ?>
                </div>

                <div class="single-post__meta">Par <a href="javascript:void(0)"><?php the_author() ?></a>, <?php the_time('d F Y') ?></div>

            <?php endwhile; ?>
        <?php endif; ?>
    </main>
    <?php get_template_part('template_parts/insta-banner') ?>
    
<?php
get_footer();
?>