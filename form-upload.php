<form action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" method="post">
    <input type="file" name="gambar">
    <br>
    <button type="submit" name="upload">upload</button>
</form>

<?php
if (isset($_POST['upload'])){
    $file_name = $_FILES['gambar']['name'];
    $file_size = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $isupload = move_uploaded_file($file_tmp, "gambar/$file_name");
    if ($isupload){
        echo "upload success <br> <img width=100 src='gambar/$file_name'>";
    }else{
        echo 'upload gagal';
        //echo print_r($_FILES['gambar']['error']);
    }
}
?>