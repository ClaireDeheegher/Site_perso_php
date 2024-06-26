<about.php>
<?php 
$title = 'Contact';
$description = 'Page avec un formulaire de contact';
$keywords = 'form, phone number, map';
require("header.php"); 

?>
<main>
<!-- Contact Section -->
<section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contact</h2>
  <p>Vous pouvez me contacter via ce formulaire afin de me transmettre un projet, ou pour toute autre demande.</p>
  
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-5">

      <div class="info-wrap">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Localisation</h3>
            <p> 74960 Annecy</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Appelez-moi</h3>
            <p>+33 6 38 20 68 02</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Mon email</h3>
            <p>info@example.com</p>
          </div>
        </div><!-- End Info Item -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11105.728589526683!2d6.088871576175817!3d45.902669119360176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b85424733ecd1%3A0x8c6994e9aa5cb8de!2sCran-Gevrier%2C%2074960%20Annecy!5e0!3m2!1sfr!2sfr!4v1719238658366!5m2!1sfr!2sfr" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div class="col-lg-7">
      <form action="formcheck.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

        <div class="col-md-4">
        <label for="exampleFormControlSelect1">Civilité</label>
    <select class="form-control" id="exampleFormControlSelect1" name="civilite">
      <option>Mr.</option>
      <option>Mme</option>
      
    </select>
          </div>

          <div class="col-md-4">
            <label for="name-field" class="pb-2">Votre nom</label>
            <input type="text" name="last-name" id="name-field" class="form-control" required="" value= "<?php echo $_SESSION["last-name"]; unset($_SESSION["last-name"]) ?>">
          </div>

          <div class="col-md-4">
            <label for="name-field" class="pb-2">Votre prénom</label>
            <input type="text" name="name" id="name-field" class="form-control" required="" value="<?php echo $_SESSION["name"]; unset($_SESSION["name"]) ?>">
          </div>

          <div class="col-md-12">
            <label for="email-field" class="pb-2">Votre Email</label>
            <input type="email" class="form-control" name="email" id="email-field" required="" value="<?php echo $_SESSION["email"]; unset($_SESSION["email"]); ?>">
          </div>

          <div class="col-md-12">
            <label for="subject-field" class="pb-2">Sujet</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" class="form-control" name="subject" id="subject-field1" required="">
              <label class="form-check-label" for="subject-field1">Demande d'information</label> 
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" class="form-control" name="subject" id="subject-field2" required="">
              <label class="form-check-label" for="subject-field2">Projet</label> 
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" class="form-control" name="subject" id="subject-field3" required="">
              <label class="form-check-label" for="subject-field3">Autre</label> 
            </div>
          </div>

          <div class="col-md-12">
            <label for="message-field" class="pb-2">Message</label>
            <textarea class="form-control" name="message" rows="10" id="message-field" required="" value="<?php echo $_SESSION["message"]; unset ($_SESSION["message"]); ?>"></textarea>
          </div>

          <div class="col-md-12 text-center">
            
            <div class="error-message"></div>
            <div class="sent-message">Votre message a bien été envoyé ! Je vous recontacte dès que possible !</div>
            <div class="loading">Chargement</div>
            <button type="submit">Envoyer</button>
          </div>

        </div>
      </form>
    </div><!-- End Contact Form -->

  </div>

</div>

</section><!-- /Contact Section -->

</main>

<?php include("footer.php") ?>
