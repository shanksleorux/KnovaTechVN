<?php if(isset($_SESSION['is_Create_Success'])) : ?>
<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">OK</span>
  </button>
  <i class="fa fa-check mx-2"></i>
  <strong>Success!</strong> You have just created a new Article!
</div>
<?php endif; ?>

<?php if(isset($_SESSION['is_Create_Failed'])) : ?>
  <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">OK</span>
    </button>
    <i class="fa fa-check mx-2"></i>
    <strong>Failed!</strong> Something went wrong with your post, please check your post and try again!
  </div>
<?php endif; ?>
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">Blog Posts</span>
    <h3 class="page-title">Add New Post</h3>
  </div>
</div>
<div class="row">
  <div class="col-lg-9 col-md-12">
    <!-- Add New Post Form -->
    <div class="card card-small mb-3">
     <div class="card-body">
        <form class="add-new-post" name="post" method="post" action="" enctype="multipart/data">
          <input class="form-control form-control-lg mb-3" name="PostTitle" type="text" placeholder="Your Post Title">
          <div class="custom-select" style="width:200px;">
            <select name="category">
              <option value="0">Select category:</option>
              <option value="1">Enterprise Management</option>
              <option value="2">API Management</option>
              <option value="3">Testing Solution</option>
              <option value="4">System Integration</option>
            </select>
          </div> <br>
          <div id="editor-container" class="add-new-post__editor mb-1">
            <textarea class="ckeditor" id="ckeditor" name="ckeditor"></textarea>
            <li class="list-group-item d-flex px-3">
              <button class="btn btn-sm btn-outline-accent ml-auto" name="submit"><i class="material-icons">file_copy</i> Cancle</button> &emsp;
              <input class="btn btn-sm btn-accent material-icons" type="submit" name="submit" value="Create"></input>
            </li>
          </div>
          <script type="text/javascript">
          var roxyFileman = '/Upload/index.html';
          CKEDITOR.replace('ckeditor',{
        	      width: "750px",
                height: "700px",
                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
          			filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
          			filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
          			filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
          			filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
          			filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
             });
          </script>
        </form>
      </div>
    </div>
    <!-- / Add New Post Form -->
  </div>
</div>
<script src="../Assets/Admin/scripts/app/app-blog-new-post.1.0.0.js"></script>
<style>
  .hidden{display:none;}
</style>
