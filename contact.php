<?php
session_start();
error_reporting(0);



$name= filter_input(INPUT_POST,'name');
$email= filter_input(INPUT_POST,'email');
$phone= filter_input(INPUT_POST,'phone');
$subject= filter_input(INPUT_POST,'subject');
$message= filter_input(INPUT_POST,'message');

$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'mtk';
//connection
$con=mysqli_connect("localhost", "root", "", "mtk");
if(mysqli_connect_errno()){
 echo "Connection Fail".mysqli_connect_error();
 }
 else{

$sql="INSERT INTO contact(name,email,phone,subject,message)
values('$name','$email','$phone','$subject','$message')";


if($con->query($sql)){
  
    

    
   }
   else{
    echo"error:".$sql."<br>".$con->error;
   }
   
    }
   
    $con->close();
   

?>


    <!DOCTYPE html>
    <html lang="en">

    <?php require_once "header.php" ?>

    <body>
        <section>
        <!--Navigation bar-->
        <?php require_once "navigation.php" ?>
        </section>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="background-color: rgb(241,247,252);">
                        <form action="" method="POST">
                            <div class="form-group">
                                <h1 class="text-center">contact us&nbsp;</h1>
                            </div>
                        <div class="form-group"><input class="form-control"name="name" type="name" placeholder="Name" required="" style="width: 330px;"></div>
                         <div class="form-group"><input type="email" name="email" style="width: 330px;height: 39px;" required="" placeholder="Email"></div>
                        <div class="form-group"><input type="tel" name="phone" placeholder="Phone No" style="width: 330px;height: 38px;" required=""></div>
                        <div class="form-group"><input type="text" name="subject" placeholder="Subject" style="width: 330px;height: 38px;" required=""></div>
                        <div class="form-group"><textarea style="width: 330px;height: 200px;" name="message" placeholder="Message" required=""></textarea></div>
                        <div class="form-group"><button class="btn btn-info" type="submit" style="width: 330px;">Submit</button></div>
                        </form>
                        
                    </div>
                    <div class="col-md-6" style="padding-left: 20px;padding-right: 20px;background-color: rgb(241,247,252);">
                        <fieldset></fieldset>
                        <legend><i class="fas fa-industry"></i>&nbsp;Company Name</legend>
                        <p></p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><i class="fas fa-map-marker-alt" style="height: 24px;width: 24px;"></i></td>
                                        <td>597,Ghandhi Nagar,Rangasamutram Post,Sathyamangalam - 638 402</td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td><i class="fa fa-phone" style="width: 24px;height: 24px;"></i></td>
                                        <td>+91 98428 73007</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-envelope" style="width: 24px;height: 24px;"></i></td>
                                        <td>kalaivaniagencieserd@gmail.com<br>kalaivanisarees@gmail.com<br><br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer and scripts-->
        <?php require_once "footer.php" ?>

    </body>

    </html>