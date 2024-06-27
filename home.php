<about.php>
  <?php
  $title = "A propos";
  $description = "Page de présentation contenant une partie à propos, un CV résumé et un lien vers la page contact";
  $keywords = "cv, about, contact, portfolio";
  require ("header.php");
  $test = 'Pengu';
  function test($test)
  {
    echo 'Hello world' . $test . '!';
  }
  ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="iPortfolio/assets/img/1326366.png" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Claire Deheegher</h2>
        <p>Je suis <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer">développeuse
            junior</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
            class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>A propos</h2>
        <p>En reconversion professionelle, je recherche actuellement une alternance afin de pouvoir valider mon titre de
          concepteur développeur d'applications. <?php test($test) ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="iPortfolio/assets/img/Claire-DEHEEGHER.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Développeuse junior</h2>
            <p class="fst-italic py-3">

            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Date de naissance:</strong> <span>1 février
                      1995</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Téléphone</strong> <span>+33 6 38 20 68 02</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Localisation :</strong> <span>Annecy, France</span>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>29</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Diplôme:</strong> <span>Master en sciences de
                      l'éducation</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                    <span>claire.deheegher@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alternance:</strong> <span>Disponible</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              Langages en cours d'apprentissage : Java, Javascript, HTML/CSS, PHP.
              <br> Frameworks en cours d'apprentissage : Springboot, Angular, SPA, Vue.JS, Symfony, Laravel
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Curriculum vitae</h2>
        <p>Un apperçu de mon CV avec mes principales expériences, et diplômes. Si vous souhaitez en savoir plus, vous
          trouver une liste plus exhaustive sur mon LinkedIn.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sommaire</h3>

            <div class="resume-item pb-0">
              <h4>Brandon Johnson</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and
                  developing user-centered digital/print marketing material from initial concept to final, polished
                  deliverable.</em></p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Master of Fine Arts &amp; Graphic Design</h4>
              <h5>2015 - 2016</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui
                ut dignissimos deleniti nerada porti sand markend</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius
                unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart
                dila</p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production
                  communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the
                  project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the
                  design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and
                  advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Vous pouvez retrouver le formulaire sur <a href="contact.php" rel="formulaire"> cette page</a>!</p>
      </div><!-- End Section Title -->
  </main>

  <?php include ('footer.php'); ?>