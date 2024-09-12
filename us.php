<?php
$posts = [
    ['title' => 'some us 1', 'body' => 'some body 1'],
    ['title' => 'some US 2', 'body' => 'some body 2'],
    ['title' => 'some US 3', 'body' => 'some body 3'],
    ['title' => 'some US 4', 'body' => 'some body 4'],   
]
?> 

<?php include 'partions/header.php'; ?>

<main class="container">
  <?php include 'partions/hero.php'; ?>
  <?php include 'partions/featured.php'; ?>
  <div class="row g-5">
    <div class="col-md-8">
      <?php include 'partions/posts.php'; ?>

    </div>
    <div class="col-md-4">
      <?php include 'partions/sidebar.php'; ?>
    </div>
  </div>
<?php include 'partions/footer.php'; ?>