<?php
get_header(); ?>


<body>
    <?php get_template_part('template_parts/header_menu'); ?>
    <main>

<?php  
$categories = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false,
) );

?>
<h2 class="text-center">Catégories</h2>
<div id="category-list container-fluid d-flex justify-content-around flex wrap">
        <ul class="d-flex justify-content-around flex-wrap">
        <?php foreach($categories as $categ) :?>

            <a class="div-categ-item" href="http://wpcollabils.local/category/<?= $categ->slug ?>">
                <h3> <?= $categ->name ?></h3>
            </a>
        <?php endforeach; ?>
        </ul>
</div>





    </main>
<?php get_footer();
?>
