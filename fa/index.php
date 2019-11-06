<!DOCTYPE html>
<html lan="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all">
    <meta name="keywor" content="Technalogy,Science,Sport,Job">
<?php require_once('inc/top.php');
  
?>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
  </head>
  <body>
   <?php require_once('inc/header.php');
      
     $number_of_posts = 3;
      
      if(isset($_GET['page'])){
          $page_id = $_GET['page'];
      }
      else{
          $page_id = 1;
      }

          if(isset($_GET['cat'])){
          $cat_id = $_GET['cat'];
          $cat_query = "SELECT * FROM categories WHERE id = $cat_id"; 
          $cat_run = mysqli_query($con, $cat_query);
          $cat_row = mysqli_fetch_array($cat_run);
          $cat_name = $cat_row['category'];
          
      }
      if(isset($_POST['search'])){
      $search = $_POST['search-title'];
      $all_posts_query = "SELECT * FROM posts WHERE status = 'publish'";
      $all_posts_query .= "and tags LIKE '%$search%'";
      $all_posts_run = mysqli_query($con, $all_posts_query);
      $all_posts = mysqli_num_rows($all_posts_run);
      $total_pages = ceil($all_posts / $number_of_posts);
      $posts_start_from = ($page_id - 1) * $number_of_posts;

      }
      else{
           
      $all_posts_query = "SELECT * FROM posts WHERE status = 'publish'";
      if(isset($cat_name)){
          $all_posts_query .= "and categories = '$cat_name'";
      }
      $all_posts_run = mysqli_query($con, $all_posts_query);
      $all_posts = mysqli_num_rows($all_posts_run);
      $total_pages = ceil($all_posts / $number_of_posts);
      $posts_start_from = ($page_id - 1) * $number_of_posts;

           
      }
     
      
?>

   <div class="jumbotron">
       <div class="container">
           <div id="details" class="animated fadeInLeft">
               <h1>ویب <span>بلاک</span></h1>
               <p>این ویب لاک برای به اشتراک گذاشتن معلومات تکنالوژی است!</p>
           </div>
       </div>
    
       <img src="img/img5.jpg" alt="Top Image">
   </div>
   
   
    <section>
       <div class="container">
        <div class="row">
            <div class="col-md-8">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
    <li><img src="data1/images/technology_evolutions.png" alt="technology_evolutions" title="technology_evolutions" id="wows1_4"/></li>
    <li><img src="data1/images/job_opportunities.jpg" alt="job_opportunities" title="job_opportunities" id="wows1_1"/></li>
    <li><img src="data1/images/science_evolutions.png" alt="science_evolutions" title="science_evolutions" id="wows1_2"/></li>
    <li><a href="http://wowslider.net"><img src="data1/images/sportsmix.jpg" alt="bootstrap carousel" title="sports_mix" id="wows1_3"/></a></li>
  </ul></div>
  <div class="ws_bullets"><div>
    <a href="#" title="science_evolutions"><span><img src="data1/tooltips/science_evolutions.png" alt="science_evolutions"/>3</span></a>
    <a href="#" title="job_opportunities"><span><img src="data1/tooltips/job_opportunities.jpg" alt="job_opportunities"/>2</span></a>
    <a href="#" title="sportsmix"><span><img src="data1/tooltips/sportsmix.jpg" alt="sports_mix"/>4</span></a>
    <a href="#" title="technology_evolutions"><span><img src="data1/tooltips/technology_evolutions.png" alt="technology_evolutions"/>5</span></a>
  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slideshow javascript</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>  
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
 <?php
        
        
                  if(isset($_POST['search'])){
                   $search = $_POST['search-title'];
                   $query ="SELECT * FROM posts WHERE status = 'publish'";
                   $query .= "and tags LIKE '%$search%'";
                   $query .= " ORDER BY id DESC LIMIT   $posts_start_from,$number_of_posts";  
           } 
           else {
                  $query ="SELECT * FROM posts WHERE status = 'publish'";
                  if(isset($cat_name)){
                      $query .= "and categories = '$cat_name'";
                  }
                  $query .= "ORDER BY id DESC LIMIT $posts_start_from,$number_of_posts";
           }
            
           $run = mysqli_query($con,$query);
           if(mysqli_num_rows($run) > 0 ){
               while($row = mysqli_fetch_array($run)){
                   $id = $row['id'];
                   $date = getdate($row['date']);
                   $day = $date['mday'];
                   $month = $date['month'];
                   $year = $date['year'];
                   $title = $row['title'];
                   $author = $row['author'];
                   $author_image =$row['author_image'];
                   $categories = $row['categories'];
                   $tags = $row['tags'];
                   $post_data = $row['post_data'];
                   $views = $row['views'];
                   $status = $row['status'];
                   $image= $row['image'];
               ?>
                
                <div class="post">
                <div class="row">
                    <div class="col-md-2 post-date">
                        <div class="day"><?php echo $day;?></div>
                        <div class="month"><?php echo  $month;?></div>
                        <div class="year"><?php echo $year;?></div>
                        
                    </div>
                    <div class="col-md-8 post-title">
                        <a href="post.php?post_id=<?php echo $id;?>"><h2><?php echo $title;?></h2></a> 
                         <p>نگارش توسط:<span> <?php echo ucfirst($author);?></span></p>
                    </div>
                     <div class="col-md-2 profile-picture">
                     <img src="img/<?php echo $author_image;?>" alt="Profile pic" class="img-circle">   
                        
                        
                    </div>
                </div>
                <a href="post.php?post_id=<?php echo $id;?>"><img src="img/<?php echo $image;?>"></a>
                <div class="desc">
                    
                   <?php echo substr($post_data,0,300)."......";?>
                    
                </div>
                <a href="post.php?post_id=<?php echo $id;?>" class="btn btn-primary">بیشتربخوانید...</a>
                <div class="bottom">
                    <span class="first"><i class="fa fa-folder" aria-hidden="true"></i><a href="#"> 
                       <?php echo ucfirst($categories);?></a></span> |      
                              <span class="second"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">
                                  نظریات</a></span>
                </div>
            </div> 
              <?php
               }
           }   
           else{
               echo "<center><h2>No Posts Available</h2></center>";
               
           }
           ?>
 
            </div>
            
 
  <nav id="pagination">
  <ul class="pagination">
    <?php
    for($i = 1; $i <= $total_pages; $i++){
      echo "<li class='".($page_id == $i ? 'active':'')."'><a href='index.php?page=".$i."&".(isset($cat_name)?"cat=$cat_id":"")."'>$i</a></li>";
    }



    ?>
                </ul>
          </nav>
              
            </div>
            <div class="col-md-4">
                <?php require_once('inc/sidebar.php');
?>
                 
            </div>
        
           </div>
        </div>
     </section>
<?php require_once('inc/footer.php');
?>
  </body>
</html>