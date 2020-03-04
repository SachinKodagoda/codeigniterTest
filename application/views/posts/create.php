<div class="container">
  <h2>
    <?= $title; ?>
  </h2>

  <?php echo validation_errors(); ?>

  <?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add title">
  </div>

  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" placeholder="Add body" id="editor"></textarea>
  </div>

  <div class="form-group">
    <select name="category_id" class="form-control">
      <?php foreach ($categories as $category) : ?>
        <option value="<?php echo $category['id'] ?>"> <?php echo $category['name'] ?> </option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" class="form-control" name="userfile" size="20" placeholder="Add title">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
      console.error(error);
    });
</script>