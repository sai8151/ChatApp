<html>
<body style="padding:4rem;">
<div class="set">
      <div id="login"><a href=""><h4 id="fnt">Reload</h4></a></div>
            <div id="chat"><a href=users.php><h3 id="fnt">Chat</h3></a></div>
            <div id="post"><a href=post.php><h3 id="fnt">Post</h3></a></div>
            <div id="hunt"><a href=view.php><h3 id="fnt">Hunt</h3></a></div>
           <div id="drag"> <a href=profile.php><h3 id="fnt">Bio</h3></a></div>
          </div>
<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  } 
include_once "header.php";
$query = "SELECT * FROM post";
$result = mysqli_query($conn, $query);
echo "<center>";
while($row = mysqli_fetch_array($result)){
    echo "<div class='wrapper' style='padding:2rem;'><div style='width:60rem;'><br><hr style='width:50%;'>";
    echo "<p><strong>File Name: </strong>" . $row['file_name'] . "<br>";
    echo "<strong>User Name: </strong>" ;
    $sql1 = mysqli_query($conn, "SELECT * FROM users where unique_id = {$row['unique_id']}");
            if(mysqli_num_rows($sql1) > 0){
              $row1 = mysqli_fetch_assoc($sql1);
            }
      echo " ". $row1['fname'] ." ". $row1['lname'] ."";
      echo "<br><img  style='height:4rem;width:4rem;border-radius :3rem;' src=php/images/". $row1['img'] ."></img>";
    
      echo "<br><strong>File Path: </strong><a href=" . $row['file_path'] . ">Download file </a><br></div><br><br><br>";
    if(strpos($row['file_path'],".jpg")){
    echo "image";
    echo "<br><img  style='width:14rem;border-radius :3rem;' src=". $row['file_path'] ."></img></div><br><br><br>";
    }
    else if(strpos($row['file_path'] ,".png")){
    echo "image<br><img  style='width:14rem;border-radius :3rem;' src=". $row['file_path'] ."></img></div><br><br><br>";
    }  
    else if(strpos($row['file_path'] ,".jpeg")){
    echo "image";
    echo "<br><img  style='width:14rem;border-radius :3rem;' src=". $row['file_path'] ."></img></div><br><br><br>";
    }
    else if(strpos($row['file_path'] ,".zip")){
      echo "ZIP FILE";
      echo "<br><img  style='width:14rem;border-radius :3rem;' src='upload/acc/zip.png'></img></div><br><br><br>";
      }
    else if(strpos($row['file_path'] ,".html")){
        echo "HTML";
        echo "<br><img  style='width:7rem;height:9rem;border-radius :0rem;' src='upload/acc/html.png'></img></div><br><br><br>";
        }
    else if(strpos($row['file_path'] ,".mp3")){
          echo "mp3";
          echo '<audio
          controls
          src='. $row['file_path'] .'>
              <a href='. $row['file_path'] .'>
                  Download audio
              </a>
      </audio>';
          echo "<br><img  style='width:7rem;height:9rem;border-radius :0rem;' src='upload/acc/mp3.png'></img></div><br><br><br>";
          }
    
    else if(strpos($row['file_path'] ,".mp4")){
      echo "mp4";
      echo '<video width="400" padding:7px;border:10px; controls>
      <source src='. $row['file_path'] .' type="video/mp4">
    </video></div><br><br><br>';
    //  echo "<br><img  style='width:7rem;height:9rem;border-radius :0rem;' src='upload/acc/mp4.png'></img>";
      }
    echo "</p><div>";
}
mysqli_close($conn);
?>
