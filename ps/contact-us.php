<!DOCTYPE html>
<html lang="en">
 <html>
  <head>
<?php require_once('inc/top.php');
?>
  </head>
  <body>
<?php require_once('inc/header.php')?>
    
   <div class="jumbotron">
       <div class="container">
           <div id="details" class="animated fadeInLeft">
               <h1>Contact <span>Us</span></h1>
               <p>We are available 24/7. So Feel Free to Contact Us. </p>
           </div>
       </div>
    
       <img src="img/img5.jpg" alt="">
   </div>
   
   
    <section>
       <div class="container">
        <div class="row">
            <div class="col-md-8">
           <div class="row">
               <div class="col-md-12">
         <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=ahmad jawid mahir'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://acadooghostwriter.com/'>https://AcadooGhostwriter.com</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=61a6fe9193914c5035dddd6cff914fb341b9ea42'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(34.528222395680935,69.16594162824174),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(34.528222395680935,69.16594162824174)});infowindow = new google.maps.InfoWindow({content:'<strong>Ministry of Interior </strong><br>شهرآرا<br>0101 Kabul<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
               </div> 
                <div class="col-md-12 contact-form">
                <?php
                    if(isset($_POST['submit'])){
                        $name = mysqli_real_escape_string($con,$_POST['name']);
                        $email = mysqli_real_escape_string($con,$_POST['email']);
                        $website = mysqli_real_escape_string($con,$_POST['website']);
                        $comment = mysqli_real_escape_string($con,$_POST['comment']);
                        
                        $to = "ahmad.jawid770@gmail.com";
                        $header = "From: $name<$email>";
                        $subject = "Message From $name";
                        
                         $message = "<b>Name:</b> $name \n\n<b>Email:</b> $email \n\n<b>Websites:</b> $website \n\n<b>Message:</b> $comment";
                        
                        if(empty ($name) or empty ($email) or empty ($comment)){
                            
                            $error = "All (*) Fields Are Required";
                        }
                        else{
                            if(mail($to,$subject,$message,$header)){
                                $msg = "Message Has Been Sent";
                                
                            }
                            else{
                                $error = "Message Has Been Not Sent";
                                
                            }
                        }
                    }
                    ?>
                    
                <h2>Contact Form</h2><hr>
                <form action="" method="post">
                   <div class="form-group">
                 <lable for="full-name">Full Name*:</lable>
                        <?php
                       if(isset($error)){
                           echo "<span class='pull-right' style='color:red'>$error</span>";
                       }
                        if(isset($msg)){
                           echo "<span class='pull-right' style='color:green'>$msg</span>";
                       }
                       
                       
                       
                       
                       ?>
                         
                   <input type="text" id="full-name" class="form-control" placeholder="Full Name" name="name">
               </div>
               <div class="form-group">
                   <lable for="email">Email*:</lable>
                   <input type="text" id="email" class="form-control" placeholder="Email Address" name="email">
               </div> 
               <div class="form-group">
                   <lable for="website">Website:</lable>
                   <input type="text" id="website" class="form-control" placeholder="Website" name="website">
               </div>
               <div class="form-group">
                   <lable for="message">Message:</lable>
                   <textarea id="message" cols="30" rows="10 " class="form-control" placeholder="Your message Should be Hre" name="comment">
                   </textarea>
               </div>
               <input type="submit" name="submit" value="submit" class="btn btn-primary">                    
                </form>     
                </div>          
            </div>
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