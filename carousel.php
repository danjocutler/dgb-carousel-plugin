<?php
$dgbFeaturedBooks = wp_remote_get( 'https://www.deadgoodbooks.co.uk/wp-json/wp/v2/posts?categories=1207' );
$dgbFeaturedBooksDecoded = json_decode($dgbFeaturedBooks['body']);
?>
<section id="Carousel" class="grid-container">
    <span class="arrow left"></span>
    <div class="carousel-wrapper">
      <?php foreach ($dgbFeaturedBooksDecoded as $dgbFeaturedBook) { ?>
        <div class="item-wrapper">
            <div class="product-box">
              <a href="<?= $dgbFeaturedBook->link; ?>" target="_blank">
              <img src="<?= $dgbFeaturedBook->acf->cover_image->url; ?>" alt="<?= $dgbFeaturedBook->acf->title; ?>" />
                <h3><?= $dgbFeaturedBook->acf->title; ?></h3>
                <p><?= $dgbFeaturedBook->acf->author; ?></p>
              </a>
              <a class="amazon-buy" href="<?= $dgbFeaturedBook->acf->amazon_link; ?>" target="_blank">Buy the book</a>
            </div>
        </div>
      <?php } ?>
    </div>
    <span class="arrow right"></span>
</section>
