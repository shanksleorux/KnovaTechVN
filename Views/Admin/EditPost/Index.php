<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">Blog Posts</span>
    <h3 class="page-title">Edit This Post</h3>
  </div>
</div>
<div class="row">
  <div class="col-lg-9 col-md-12">
    <!-- Add New Post Form -->
    <div class="card card-small mb-3">
     <div class="card-body">
        <form class="add-new-post" name="post" method="post" action="" enctype="multipart/data">
          <input class="form-control form-control-lg mb-3" name="PostTitle" type="text" placeholder="Your Post Title" value="<?php echo $_SESSION['Tittle']; ?>"></input>
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
            <textarea class="ckeditor" id="ckeditor" name="ckeditor"><?php echo $_SESSION['Body']; ?></textarea>
            <input name="image" type="file" id="upload" class="hidden" onchange="" name="PostImage">
            <li class="list-group-item d-flex px-3">
              <button class="btn btn-sm btn-outline-accent ml-auto"><a href="<?php echo ROOT_URL.'Admin/BlogPost'; ?>"> Cancle</a></button> &emsp;
              <input class="btn btn-sm btn-accent material-icons" type="submit" name="submit" value="Update"></input>
            </li>

          </div>
          <script type="text/javascript">
            var roxyFileman = '/Upload/index.html';
            CKEDITOR.replace('ckeditor',{
        	      width: "750px",
                height: "700px",
                filebrowserBrowseUrl:roxyFileman,
                filebrowserImageBrowseUrl:roxyFileman+'?type=image',
                removeDialogTabs: 'link:upload;image:upload'
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
