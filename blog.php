<?php
  // Define variables for SEO
  $pageTitle = 'Blog | Lastmile Retail';
  $pageDescription = 'Description for this page goes here.';
  $navPageName = 'blog';
  
  include('partials/header.php'); 
?>

  <section class="hero hero--blog">
    <div class="container">
      <div class="hero__copy">
        <h1>We're Local Thought Leaders</h1>
        <p>At Lastmile we are avid learners. Read/share our discussions and contribute your thoughts.</p>
      </div>
      <div class="hero__icon">
        <img src="img/icons/icon-directions-alternate.svg" alt="Blog Directions Icon">
      </div>
    </div>
  </section>

  <?php include 'partials/post-preview.php'; ?>
  <?php include 'partials/post-preview.php'; ?>
  <?php include 'partials/post-preview.php'; ?>

<?php include 'partials/footer.php'; ?>
