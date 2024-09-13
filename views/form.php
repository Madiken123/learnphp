<?php include 'partions/header.php'; ?>

<main class="container">
  <?php if($fname) : ?> 
<h3>Hello <?=$fname?></h3>
<?php endif; ?>
<form method="POST" action="/form">
<div class="mb-3">
  <label for="fname" class="form-label">first name</label>
  <input type="text" name="fname" class="form-control" id="fname" placeholder="enter your name...">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-primary" value="mjau">
</div>
</form>

</main>
<?php include 'partions/footer.php'; ?>