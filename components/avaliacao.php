<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Testimonials</h2>
      <p>What Are They <span>Saying About Us</span></p>
    </div>

    <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">


        <?php

        $listarAvaliaçao = listarAvaliacao();

        foreach ($listarAvaliaçao as $itemAvaliacao) {
          $profissao = $itemAvaliacao->profissao;
          $nome = $itemAvaliacao->nome;
          $textoAvaliacao = $itemAvaliacao->textoAvaliacao;
          $estrela = $itemAvaliacao->estrela;
          $img = $itemAvaliacao->img;

        ?>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">

                <div class="col-lg-6">
                  <div class="testimonial-content">

                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <?php echo $textoAvaliacao ?>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3> <?php echo $nome ?> </h3>
                    <h4> <?php echo $profissao ?> </h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>


                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src=" <?php echo $img ?>  " class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div><!-- End testimonial item -->
          <?php
            }
          ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section>