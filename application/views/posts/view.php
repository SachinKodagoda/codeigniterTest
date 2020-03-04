<div class="container">
    <h2>
        <?php echo $post['title']; ?>
    </h2>
    <small class="post-date"><?php echo $post['created_at'] ?></small>

    <div class="post-body">
        <?php echo $post['body']; ?>
    </div>

    <hr />

    <?php echo form_open('/posts/delete/' . $post['id']); ?>
    <!-- <a class="btn btn-success" href="<?php echo base_url() . 'edit/' . $post['slug'] ?>">Edit</a> -->
    <a class="btn btn-success" href="edit/<?php echo $post['slug']; ?>">Edit</a>
    <input type="submit" value="Delete" class="btn btn-danger" />
    </form>

</div>