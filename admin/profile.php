<!DOCTYPE html>
<html>
<?php require_once('inc/top.php');
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
 }
 
$session_username = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username = '$session_username'";
    $run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($run);
    
     $image = $row['image'];
     $id = $row['id'];
     $date = getdate($row['date']);
     $day = $date['mday'];
     $month = substr($date['month'],0,3);
     $year = $date['year'];
     $first_name = $row['first_name'];
     $last_name = $row['last_name'];
     $username = $row['username'];
     $email = $row['email'];
     $role= $row['role'];
     $details = $row['details'];
 
 ?>
   <body id="profile">
  <div id="wrapper">
<?php require_once('inc/header.php'); ?>
<div class="container-fluid body-section">
    <div class="row">
        <div class="col-md-3">
            
    <?php require_once('inc/sidebar.php'); ?>     
        </div>
        <div class="col-md-9">
            <h1><i class="fa fa-user"></i> Profile <small>Personal Details</small></h1><hr> 
            <ol  class="breadcrumb">
          
         <li><a href="index.php"><i class="fa fa-tachometer"></i> Dashboard</a></li>
         <li class="active"><i class="fa fa-user"></i> Profile</li>       
            </ol>
             <div class="row">
                 <div class="col-xs-12">
                     <center><img src="img/<?php echo $image;?>" alt="" id="profile-image" width="200px" class="img-circle img-thumbnail"></center><br><br>
             <a href="edit-profile.php?edit=<?php echo $id;?>" class="btn btn-primary pull-right ">Edit Profile</a>
             <center>
                 <h3>Profile Details</h3>
             </center>
             <br>
             <table class="table   table-bordered">
                 <tr>
                     <td width="20%"><b>User ID:</b></td>
                     <td width="30%"><b><?php echo $id;?></b></td>
                     <td width="20%"><b>Signup Date:</b></td>
                     <td width="30%"><b><?php echo "$day $month $year";?></b></td>
                 </tr>
                   <tr>
                     <td width="20%"><b>First Name:</b></td>
                     <td width="30%"><b><?php echo $first_name;?></b></td>
                     <td width="20%"><b>Last Nme:</b></td>
                     <td width="30%"><b><?php echo $last_name;?></b></td>
                 </tr>
                   <tr>
                     <td width="20%"><b>Username:</b></td>
                     <td width="30%"><b><?php echo $username;?></b></td>
                     <td width="20%"><b>Eamil:</b></td>
                     <td width="30%"><b><?php echo $email;?></b></td>
                 </tr>
                   <tr>
                     <td width="20%"><b>Role:</b></td>
                     <td width="30%"><b><?php echo $role;?></b></td>
                     <td width="20%"><b></b></td>
                     <td width="30%"><b></b></td>
                 </tr>
             </table>
             <div class="row">
                 <dov class="col-lg-8 col-sm-12">
                     <b>Details:</b>
                     <div><?php echo $details;?></div>
                 </dov>
             </div>
         <br>
                 </div>
             </div>
        </div>
    </div>
</div>
 <?php require_once('inc/footer.php'); ?>
     
      </div>
    </body>
</html>