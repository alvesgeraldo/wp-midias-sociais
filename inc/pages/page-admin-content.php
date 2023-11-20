<div class="wrap">
  <h1>Mídias Sociais - Configurações</h1>
  <form action="options.php" method="post">

    <?php
      settings_fields('ms_settings');
      do_settings_sections('midias-sociais');
      submit_button();
    ?>

  </form>
</div>