<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p style="color:rgb(102, 255, 102);"><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>
  <div class="set">
      <div id="login"><a href=""><h4 id="fnt">Reload</h4></a></div>
            <div id="chat"><a href=users.php><h3 id="fnt">Chat</h3></a></div>
            <div id="post"><a href=post.php><h3 id="fnt">Post</h3></a></div>
            <div id="hunt"><a href=view.php><h3 id="fnt">Hunt</h3></a></div>
            <div id="drag"><a href=profile.php><h3 id="fnt">Bio</h3></a></div>
         
          </div>
</body>
</html>
