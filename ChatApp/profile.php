<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<style>
img{
    border-radius:14rem;
    height:10rem;
}
button,input{
    background:black;
    border-radius:1rem;
    color :white;
    width:14rem;
}
a{
    color:white;
}
</style>
<html>
    <title>chat app your profile</title>
<body>
    <header>
    <div class='wrapper' style='padding:4rem;min-width:37rem;'>
        <div class="content">
          <?php 
                      echo "UID:";
                      echo $_SESSION['unique_id'];
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt=""><hr>
          <div class="details">
          <h3>user name:</h3>
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><h3>Status:</h3><?php echo $row['status']; ?></p>
          </div>
        </div>

        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">
         <button>
       Logout 
        </button>  </a>  
       
        <a href="post.php" class="post"><button>
        Post
        </button></a>   
       
        <form action='del.php' method='post'>
<input type="submit" value="delete account" name="delete">
</form>

    </header>
    <div class="set">
      
<a href=""><div id="login"><h4 id="fnt">Reload</h4></div></a>
      <a href=users.php><div id="chat"><h3 id="fnt">Chat</h3></div>
      <a href=post.php><div id="post"><h3 id="fnt">Post</h3></div>
      <a href=view.php><div id="hunt"><h3 id="fnt">Hunt</h3></div>
      <a href=profile.php><div id="drag"><h3 id="fnt">Bio</h3></div>
   
    </div></div>
    </body>
<html>