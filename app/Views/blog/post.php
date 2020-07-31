<main id="swup" class="transition-fade">
    <section>
        <div class="container">
            <article class="blog-post">
                <h1><?= $post['title'] ?></h1>
                <div class="detail">
                    Posted on : <?= date('M d Y', strtotime($post['created_at'])) ?> by : Pascal
                </div>
                <?= $post['body'] ?>
            </article>
        </div>

    </section>
</main>