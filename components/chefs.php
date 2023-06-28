<section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefs</h2>
          <p>Our <span>Proffesional</span> Chefs</p>
        </div>

        <div class="row gy-4">
        <?php 
            include_once './func/func.php';
            $chefs = listarTodosRegistros('*','chef');
            foreach ($chefs as $chef) {
              $idevent = $chef->idchef;
              $img = $chef->img;
              $name = $chef->nome;
              $description = $chef->descricao;
              $cargo = $chef->cargo; 
            ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="./assets/img/chefs/<?php echo $img?>.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $name?></h4>
                <span><?php echo $cargo?></span>
                <p><?php echo $description?></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->
            <?php }?>
        </div>

      </div>
    </section>