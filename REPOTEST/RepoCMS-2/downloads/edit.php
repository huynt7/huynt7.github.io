<?php
$file_path = 'control';

if(isset($_POST['submit']))
{
   file_put_contents($file_path, $_POST['content']);
}

$file_text = file_get_contents($file_path);
?>

<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
   <textarea name="content" rows="20" cols="60"><?= $file_text ?></textarea>
   <input type="submit" name="submit" value="save">
</form>