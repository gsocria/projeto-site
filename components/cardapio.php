<section id="menu" class="menu">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Our Menu</h2>
      <p>Check Our <span>Yummy Menu</span></p>
    </div>

    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <?php
      $retornoMenu = listarTodosRegistros('idmenuCardapio, nomeMenu', 'menucardapio', 'A');
      if ($retornoMenu) {
        $countActive = 0;
        foreach ($retornoMenu as $retornoMenuItem) {
          if ($countActive == 0) {
            $active = 'active';
          } else {
            $active = '';
          }
          $countActive++;
          $idmenuCardapio = $retornoMenuItem->idmenuCardapio;
          $nomeMenu = $retornoMenuItem->nomeMenu;

      ?>
          <li class="nav-item">
            <a class="nav-link <?php echo $active; ?> show" data-bs-toggle="tab" data-bs-target="#prodCardapio<?php echo $idmenuCardapio; ?>">
              <h4><?php echo $nomeMenu . ' count' . $countActive; ?></h4>
            </a>
          </li>
      <?php
        }
      } else {
        echo 'Nenhum registro para apresentar';
        exit();
      }
      ?>
    </ul>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
      <div class="tab-pane fade show" id="prodCardapio<?php echo $idmenuCardapio; ?>">
      <div class="tab-header text-center">
              <p>Menu</p>
              <h3><?php echo $nomeMenu ?></h3>
            </div>

            <div class="row gy-5">
        <?php
        $retornoProdCardapio = listarGeral('mc.nomeMenu, c.idcardapio, c.img, c.nomePrato, c.descricao, c.preco', "cardapio c INNER JOIN menucardapio mc ON mc.idmenuCardapio = c.idmenuCardapio WHERE c.ativo = 'A'");
        if ($retornoProdCardapio) {
          foreach ($retornoProdCardapio as $retornoProdCardapioItem) {
            $nomeMenu =  $retornoProdCardapioItem->nomeMenu;
            $idcardapio =  $retornoProdCardapioItem->idcardapio;
            $img =  $retornoProdCardapioItem->img;
            $nomePrato =  $retornoProdCardapioItem->nomePrato;
            $descricao =  $retornoProdCardapioItem->descricao;
            $preco =  $retornoProdCardapioItem->preco;
        ?>
            

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4><?php echo $nomePrato ?></h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  R$ <?php echo $preco ?>
                </p>
              </div>

              
            
        <?php
          }
        }
        ?>
        </div>
      </div>
    </div>
  </div>
</section>