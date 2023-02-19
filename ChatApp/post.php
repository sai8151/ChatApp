<?php 
 session_start();
 include_once "php/config.php";
 if(!isset($_SESSION['unique_id'])){
   header("location: login.php");
 }
 include_once "header.php"; 


if(isset($_POST['submit'])){
  // file properties
  $file = $_FILES['file'];
  $file_name = $file['name'];
  $file_tmp = $file['tmp_name'];
  $file_size = $file['size'];
  $file_error = $file['error'];

  // file extension
  $file_ext = explode('.', $file_name);
  $file_ext = strtolower(end($file_ext));

  $allowed = array('zip','jpg','jpeg','png','mp3','mp4','html');
 
  if(in_array($file_ext, $allowed)){
    if($file_error === 0){
      if($file_size <= 10000000){
        $file_name_new = uniqid('', true) . '.' . $file_ext;
        $file_destination = 'upload/'.$file_name_new;
        if(move_uploaded_file($file_tmp, $file_destination)){
            $conn = mysqli_connect($hostname, $username, $password, $dbname);
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          $user_id =$_SESSION['unique_id'];
          $public = 1;
          $query = "INSERT INTO post (unique_id, public, file_name, file_path) VALUES('$user_id', '$public', '$file_name', '$file_destination')";
          mysqli_query($conn, $query);
          mysqli_close($conn);
          echo 'Uploaded Successfully';
        }
      }
    }
  }
}
?>
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" name="submit" value="Upload">
</form>
<div class="set">
      
<a href=""><div id="login"><h4 id="fnt">Reload</h4></div></a>
      <a href=users.php><div id="chat"><h3 id="fnt">Chat</h3></div>
      <a href=post.php><div id="post"><h3 id="fnt">Post</h3></div>
      <a href=view.php><div id="hunt"><h3 id="fnt">Hunt</h3></div>
      <a href=profile.php><div id="drag"><h3 id="fnt">Bio</h3></div>
   
    </div>