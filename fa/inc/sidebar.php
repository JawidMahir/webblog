    <div class="widgets"> 
    <form action="index.php" method="post">
    <div class="input-group">
      <input type="text" name="search-title" class="form-control" placeholder="جستجو برای..." aria-label="Search for...">
      <span class="input-group-btn">
          <input type="submit" value="جستجو" class="btn btn-default" name="search">
      </span>
      
      
    </div><!--input-group-->
     </form>
        </div><!--widgets close-->
<div class="widgets">
  <div class="popular ">
             <h4><strong>نشریات محبوب</strong></h4>
             <?php
      $p_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY views DESC LIMIT 5";
      $p_run = mysqli_query($con,$p_query);
      if(mysqli_num_rows($p_run) > 0){
          while($p_row = mysqli_fetch_array($p_run)){
              $p_id = $p_row['id'];
              $p_date = getdate($p_row['date']);
              $p_day = $p_date['mday'];
              $p_month = $p_date['month'];
              $p_year = $p_date['year'];
              $p_title = $p_row['title'];
              $p_image = $p_row['image'];

      ?>
                        <hr>
              <div class="row">
                  <div class="col-xs-4">
                      <a href="post.php?post_id=<?php echo $p_id;?>"><img src="img/<?php echo $p_image;?>" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8" detalils>
                     <a href="post.php?post_id=<?php echo $p_id;?>"><h6><?php echo $p_title;?></h6></a>
                      <p><i class="fa fa-clock-o"></i><?php echo "$p_day $p_month $p_year";?></p>
                  </div>
              </div>  
                      <?php  
          } 
      }
          else{
              echo "<h3>No Post Available</h3>";
          }
      
      ?>         
   </div> 
</div>
<div class="widgets">
  <div class="popular ">
  <h4><strong>نشریات آخیر</strong></h4>
 <?php
      $p_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC LIMIT 5";
      $p_run = mysqli_query($con,$p_query);
      if(mysqli_num_rows($p_run) > 0){
          while($p_row = mysqli_fetch_array($p_run)){
              $p_id = $p_row['id'];
              $p_date = getdate($p_row['date']);
              $p_day = $p_date['mday'];
              $p_month = $p_date['month'];
              $p_year = $p_date['year'];
              $p_title = $p_row['title'];
              $p_image = $p_row['image'];
      ?>
                        <hr>
<div class="row">
<div class="col-xs-4">
<a href="post.php?post_id=<?php echo $p_id;?>">
<img src="img/<?php echo $p_image;?>" alt="Image 1"></a>
</div>
<div class="col-xs-8" detalils>
<a href="post.php?post_id=<?php echo $p_id;?>"><h6><?php echo $p_title;?></h6></a>
<p><i class="fa fa-clock-o"></i><?php echo "$p_day $p_month $p_year";?></p>
</div>
</div>  
<?php  
          } 
      }
          else{
              echo "<h3>No Post Available</h3>";
          }
      
      ?>
                       
               
   </div> 
</div>

<!--widgets close-->       
<div class="widgets">
<div class="popular"> 
<h4><strong>کلیپ بازرگانی</strong></h4> 
<hr>           
<video width="320" controls>
  <source src="videos/HTML5Video.mp4" type="video/mp4">
  <source src="videos/HTML5Video.ogg" type="video/ogg">
</video>

                                                                          
  </div>
  </div><!--widgets close-->           
<div class="widgets">
<div class="popular">
             <h4><strong>صفحات اجتماعی</strong></h4>
            <hr>
             <div class="row">
                 <div class="col-xs-4">
                     <a href="http://www.google.com"><img src="img/googleplus.png" alt="Googleplus"></a>
                 </div>
                 <div class="col-xs-4">
                      <a href="http://www.twitter.com"><img src="img/Twitter.png" alt="Twitter"></a>
                 </div>
                 <div class="col-xs-4">
                      <a href="http://www.linkedin.com"><img src="img/LinkedIn.png" alt="linkedIn"></a>
                 </div>
             </div>
              <hr>
             <div class="row">
                 <div class="col-xs-4">
                     <a href="http://www.facebook.com/AhmadJawidMahir"><img src="img/facebook.png" alt="Facebook"></a>
                 </div>
                 <div class="col-xs-4">
                      <a href="http://www.skype.com"><img src="img/Skype.png" alt="Skype"></a>
                 </div>
                 <div class="col-xs-4">
                      <a href="https://www.youtube.com/channel/UC-1E9vL_r0YnmbMY5Oqm4VA?view_as=subscriber"><img src="img/youtube.png" alt="Youtube"></a>
                 </div>
             </div>
              
               </div>
  </div><!--widgets close--> 