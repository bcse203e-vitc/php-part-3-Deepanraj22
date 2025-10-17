<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])){
$uploaddir = __DIR__ . '/uploads/';
if(!is_dir($uploaddir)) mkdir($uploaddir, 0755, true);
$target = $uploaddir . basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
$imgpath = 'uploads/' . basename($_FILES['file']['name']);
} else {
$error = 'Upload failed.';
}
}
?>
<!doctype html>
<html><body>
<?php if(isset($imgpath)): ?>
<p>Uploaded:</p>
<img src="<?php echo htmlspecialchars($imgpath); ?>" width="200">
<?php elseif(!empty($error)): ?>
<p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>
<form method="post" enctype="multipart/form-data">
Choose image: <input type="file" name="file"><br>
<button type="submit">Upload</button>
</form>
</body></html>
