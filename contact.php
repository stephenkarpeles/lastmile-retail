<?php
  // Define variables for SEO
  $pageTitle = 'Contact Us | Lastmile Retail';
  $pageDescription = 'Description for this page goes here.';
  $navPageName = 'contact';
  
  include('partials/header.php'); 
?>

  <section class="hero hero--contact">
    <div class="container">
      <div class="hero__copy">
        <h1>Request a Free Demo Today</h1>
        <p>It doesn't cost anything to discover how Lastmile can increase your profits. We are ready to help you find the best solutions for your store.</p>
      </div>      
      <div class="hero__icon">
        <img src="img/icons/icon-marker-1.svg" alt="Marker Icon">
      </div>
    </div>
  </section>
  
  <section class="contact-intro-block no-bottom-padding">
    <div class="container">
      <div class="contact-intro-block__image-block">
        <img src="img/icons/icon-calendar-checkmark.svg" alt="Checkmark Calendar Icon">
        <p>Our unique approach has yielded unprecedented results. And we're just getting started!</p>
      </div>
    </div>
  </section>

  <section class="intro-wrap intro-wrap--contact no-padding">
    <div class="container">
      <p class="intro intro--contact">As industry outsiders, we took all assumptions off the table and created an entirely new play book, building proprietary and patent-pending technology to support the way modern consumers shop.</p>
    </div>
  </section>

  <section>
    <div class="container">
      <h2 class="heading-alt heading-alt--secondary">ask us anything...</h2>

      <form class="contact-form" action="#" method="post">
        <div class="form-row">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" value="" tabindex="1" />
        </div>

        <div class="form-row">
          <label for="company">Company</label>
          <input type="text" name="company" id="company" value="" tabindex="1" />
        </div>

        <div class="form-row">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" value="" tabindex="1" />
        </div class="form-row">

        <div class="form-row">
          <label for="textarea">Message</label>
          <textarea cols="40" rows="20" name="textarea" id="textarea"></textarea>
        </div>

        <div class="form-row form-row--submit">
          <input class="btn btn--primary btn--medium" type="submit" value="Send" />
        </div>
      </form>

    </div>
  </section>

  <section class="section--cta-block no-top-padding">
    <div class="container">
      <h2 class="heading-alt heading-alt--tertiary">Re-thinking the Consumer Experience</h2>
      <div class="flex-div">
        <p>We understand the mindset, motivations and needs of local shoppers and give them what they demand — an easy way to find and buy in-stock nearby products and services online.</p>
        <a class="btn btn--tag">Industry Insights</a>
      <div>
    </div>
  </section>

<?php include 'partials/footer.php'; ?>
