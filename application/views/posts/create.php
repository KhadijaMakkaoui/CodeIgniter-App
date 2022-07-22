<h2><?php echo $title ?></h2>
<?php echo validation_errors() ?>
<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea class="form-control" name="body" id="editor">

    </textarea></div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

   