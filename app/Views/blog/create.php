<div class="container">
    <h1>Create new post</h1>
    <?php if($_POST): ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form action="/blog/create" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">body</label>
            <textarea class="form-control" id="body" name="body" rows="3"></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
    </form>
</div>