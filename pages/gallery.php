<?php 
function gallery() {
    $imageDir = 'gallery/'; // A képek mappájának elérési útja
    $images = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>

<div class="content galeria">
    <h1>Galéria</h1>
    <div class="row">
      <?php foreach ($images as $image): ?>
        <div class="column" data-aos="zoom-in">
          <figure><img src="<?php echo $image; ?>" alt=""></figure>
        </div>
      <?php endforeach; ?>
    </div>
</div>

<!-- A modális ablak -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <div id="imageCounter" class="image-counter"></div> <!-- Egyetlen számláló -->
  <img src="" class="modal-content" id="img01" alt="Nagy változat">
  <a class="prev" onclick="changeImage(-1)">&#10094;</a>
  <a class="next" onclick="changeImage(1)">&#10095;</a>
</div>

<?php } ?>
