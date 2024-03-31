<?php require VIEWS . '/blocks/header.php' ?>

<main class="main py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?= $post ?>
      </div>

      <?php require VIEWS . '/blocks/sidebar.php' ?>

    </div>
  </div>
</main>

<?php require VIEWS . '/blocks/footer.php' ?>