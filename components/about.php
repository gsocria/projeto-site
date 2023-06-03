<?php


$listar = listarTodosRegistros('idsobreNos, img, texto1, texto2, texto3, texto4, texto5, video, cadastro, ativo','sobrenos','A');


if($listar == false){

  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro foi encontrado!  </h6>';

}else{
  foreach($listar as $itemLinha){
    $img = $itemLinha->img;
    $texto1 = $itemLinha->texto1;
    $texto2 = $itemLinha->texto2;
    $texto3 = $itemLinha->texto3;
    $texto4 = $itemLinha->texto4;
    $texto5 = $itemLinha->texto5;
    $video = $itemLinha->video;
    $cadastro = $itemLinha->cadastro;
    $ativo = $itemLinha->ativo;
  }
}
?>


<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                <?php echo $texto1 ?>
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <?php echo $texto2 ?> </li>
                <li><i class="bi bi-check2-all"></i> <?php echo $texto3 ?> </li>
                <li><i class="bi bi-check2-all"></i> <?php echo $texto4 ?> </li>
              </ul>
              <p>
              <?php echo $texto5 ?>
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/fotoPizza.jpg" class="img-fluid" alt="">
                <a href="<?php echo $video ?>" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>