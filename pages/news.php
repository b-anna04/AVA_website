<?php
include_once 'storage.php';

function news() {
    $storage = new Storage(new JsonIO('data/news.json'));

    // Hírek lekérése és dátum szerint rendezése csökkenő sorrendben
    $newsArray = $storage->findAll();
    usort($newsArray, function ($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });

    // Legfrissebb 6 hír kiválasztása
    $latestNews = array_slice($newsArray, 0, 6);
    ?>

    <div class="container mt-4">
        <h2 class="mb-4">Legfrissebb hírek</h2>
        <div class="row">
            <?php foreach ($latestNews as $news): ?>
                <div class="col-md-4 mb-4" data-aos="zoom-in-up" data-aos-delay="200">
                    <a href="<?php echo $news['link']; ?>" class="news-card d-block text-dark" target="_blank">
                        <div class="card">
                            <img src="<?php echo $news['image']; ?>" class="card-img-top" alt="<?php echo $news['title']; ?>">
                            <div class="card-body">
                                <p class="card-title"><?php echo $news['title']; ?></p>
                                <p class="card-text"><small><?php echo $news['date']; ?></small></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php } ?>
