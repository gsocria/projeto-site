<?php


$listar = listarTodosRegistros('idsobreNos, img, texto1, texto2, texto3, texto4, texto5, video, cadastro, ativo', 'sobrenos', 'A');
$listarCard = listarTodosRegistros('idcards, icone, titulo, informacao, cadastro, alteracao, ativo', 'cards', 'A');


if ($listar == false) {

  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro foi encontrado!  </h6>';
} else {
  foreach ($listar as $itemLinha) {
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

<section id="why-us" class="why-us section-bg">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="why-box">
          <h3>Why Choose Yummy?</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
          </p>
          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div><!-- End Why Box -->

      <div class="col-lg-8 d-flex align-items-center">
        <div class="row gy-4">
          <?php
          if ($listarCard == false) {

            echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro foi encontrado!  </h6>';
          } else {
            foreach ($listarCard as $itemLinhaCard) {
              $idcards = $itemLinhaCard->idcards;
              $icone = $itemLinhaCard->icone;
              $titulo = $itemLinhaCard->titulo;
              $informacao = $itemLinhaCard->informacao;
              $cadastro = $itemLinhaCard->cadastro;
              $alteracao = $itemLinhaCard->alteracao;
              $ativo = $itemLinhaCard->ativo;

          ?>
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="<?php echo $icone ?>"></i>
                  <h4><?php echo $titulo ?></h4>
                  <p><?php echo $informacao ?></p>
                </div>
              </div>

          <?php
            }
          }
          ?>

          <!-- <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Ullamco laboris ladore pan</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div>

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Labore consequatur incidid dolore</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div> -->

        </div>
      </div>

    </div>

  </div>
</section>