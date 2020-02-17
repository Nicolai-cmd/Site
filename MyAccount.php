<?php include 'header.php';?>
<div class="container font">
    <h1>Image uploading<small>&nbsp;&nbsp;Choose an image from your computer</small></h1>
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>