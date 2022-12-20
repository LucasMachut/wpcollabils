<?php
get_header();
// Création d'une custom query pour recuperer les trois derniers posts
// publiés
?>

<body>
<?php get_template_part('template_parts/header_menu') ?>

<main>
      <div class="container-fluid">
        <!-- search form start -->
        <div class="form-container d-flex flex-column align-items-center p-10">
          <h2>Rechercher une vidéo</h2>
          <form class="d-flex w-100" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder=""
              aria-label="Search"
            />
            <button class="btn btn-outline-light" type="submit">
              Rechercher
            </button>
          </form>
        </div>
        <!-- search form end -->

        <!-- main-buttons start -->
        <div class="container-xxl py-5">
          <div class="container-buttons">
            <div class="row g-3 d-flex justify-content-around">
              <div class="col-lg-4 col-sm-6">
                <a href="http://wpcollabils.local/blog/">
                  <div class="main-buttons-item btn-videos">
                    <div class="main-buttons-text">
                      <i class="fa-solid fa-clapperboard"></i>
                      <h3 class="mb-3">Vidéos</h3>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a href={{ path('video_submit') }}>
                  <div class="main-buttons-item btn-contribute">
                    <div class="main-buttons-text">
                      <i class="fa-solid fa-hand-holding-hand"></i>
                      <h3 class="mb-3">Contribuer</h3>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a href={{ path('request_submit' )}}>
                  <div class="main-buttons-item btn-request">
                    <div class="main-buttons-text">
                      <i class="fa-solid fa-circle-question"></i>
                      <h3 class="mb-3">Requêtes</h3>
                    </div>
                  </div>
                </a>
              </div>
              
            </div>
          </div>
        </div>
        <!-- main-buttons end -->
      </div>
    </main>
<?php
get_footer();
?>