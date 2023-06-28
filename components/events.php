<section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Events</h2>
          <p>Share <span>Your Moments</span> In Our Restaurant</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php 
            include_once './func/func.php';
            $events = listarTodosRegistros('*','eventos','A');
            foreach ($events as $event) {
              $idevent = $event->ideventos;
              $img = $event->img;
              $name = $event->nome;
              $description = $event->descricao;
              $value = $event->valor; 
            ?>
            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/<?php echo $img?>.jpg)">
              <h3><?php echo $name?></h3>
              <div class="price align-self-start"><?php echo $value?></div>
              <p class="description">
                <?php echo $description?>
              </p>
            </div><!-- End Event item -->
            <?php }?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>