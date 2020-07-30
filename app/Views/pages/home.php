<section>
    <?php
    $session = \Config\Services::session();
    if (isset($session->success)) { ?>
        <div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
            <?= $session->success ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php
    }
    ?>
    <div class="bg-light">
        <div class="container">
            <h1>Blog Ci4</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi possimus voluptatum vel, numquam aspernatur odio delectus molestias recusandae quaerat non?</p>
            <a class="btn btn-primary" href="#" role="button">Link</a>

        </div>
    </div>

</section>

<section class="blog-section">
    <div class="container">
        <?php if ($news) : ?>
            <?php foreach ($news as $newsItem) : ?>
                <h3><a href="/blog/<?= $newsItem['slug'] ?>"><?= $newsItem['title'] ?></a></h3>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-center">No posts have been found !</p>
        <?php endif; ?>
    </div>

    <!-- <?php
            echo "<pre>";
            print_r($news);
            echo "</pre>";
            ?> -->
</section>