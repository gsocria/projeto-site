<?php include_once './func/func.php'?>
<section id="stats-counter" class="stats-counter">
  <div class="container" data-aos="zoom-out">

    <div class="row gy-4">
      <?php
$clienteStats = contatLinhas('total_clientes', 'cliente', '*');
foreach ($clienteStats as $clienteStat) {
    $totalCliente = $clienteStat->total_clientes;
}
?>
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $totalCliente ?>"
            data-purecounter-duration="1" class="purecounter"></span>
          <p>Clients</p>
        </div>
      </div><!-- End Stats Item -->
      <?php ?>
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Projects</p>
        </div>
      </div><!-- End Stats Item -->
      <?php ?>
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Hours Of Support</p>
        </div>
      </div><!-- End Stats Item -->
      <?php $funcionarioStats = contatLinhas('total_funcionarios', 'funcionario', '*');
foreach ($funcionarioStats as $funcionarioStat) {
    $totalFuncionario = $funcionarioStat->total_funcionarios;
}
?>
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $totalFuncionario ?>"
            data-purecounter-duration="1" class="purecounter"></span>
          <p>Workers</p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>
</section>