<div class="container">
    <h2> <?= $title ?> </h2>
    <?php foreach ($posts as $post) : ?>
        <div class="row">
            <div class="col-md-3">
                <img class="profile-img" src="<?php echo site_url() . 'assets/images/posts/' . $post['post_image']; ?>" alt="profile" />
            </div>
            <div class="col-md-9">
                <h3>
                    <?php echo $post['title'] ?>
                </h3>
                <small class="post-date"><?php echo $post['created_at'] ?> in <strong><?php echo $post['name'] ?></strong></small>
                <p>
                    <?php echo word_limiter($post['body'], 50) ?>
                    <br /><br />
                    <a class="btn btn-primary" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read More</a>
                </p>
            </div>

        </div>
    <?php endforeach; ?>
</div>