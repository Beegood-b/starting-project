<?php require VIEWS . '/blocks/header.php' ?>

<main class="main py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php foreach ($posts as $post) : ?>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title"><a href="post?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h5>
              <p class="card-text"><?= $post['excerpt'] ?></p>
              <a href="post?id=<?= $post['id'] ?>">Go somewhere</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <?php require VIEWS . '/blocks/sidebar.php' ?>

    </div>
  </div>
</main>

<?php require VIEWS . '/blocks/footer.php' ?>