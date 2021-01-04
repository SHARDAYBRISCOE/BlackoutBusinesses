<?php
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blackout Businesses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="contact.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="blackout20px.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="directory.html">Directory</a></li>
              <li><a href="articles.html">Articles</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.php" class="active">Contact</a></li>
              <li><a href="downloadtheapp.html">Download the App</a></li>  
              </ul>
      
    </div>
  </div>
</nav>

<div>
 <div class="container adspace col-lg-3 col-md-3 col-sm-12 col-xs-12">
  
        <img class="img-responsive jumbotron" src="adspaceexample.jpeg" height="400px" width="400px">

    </div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 jumbotron" id="succesMessage">
  <h3>Contact Blackout Businesses </h3>
          <p class="lead">Please fill out this form to contact Blackout Businesses. Responses take between 24-48 hours.</p>
         <?php
         $result = '<div class= "alert alert-success">Form submitted </div>';
         
         //echo result2 if there is an error.
         $result2 = '<div class= "alert alert-danger">Form was not submitted. Try again. </div>';

         //echo $result;
         //echo $result2;
         
         ?>
            <form id="contact-form" method="post" role="form" type="submit">

    <div class="messages"></div>

    <div class="controls">


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">First Name *</label>
                    <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Last Name *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
        </div>

      <div class="labelboxes" id="form_boxes">
              <label for="form_boxes" id="form_title">Category :<br /> </label>
        
        <label class="radio-inline"><input type="radio" name="optradio" value="business-submission" required="required" data-error="Valid subject is required.">Business submission</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="question" required="required" data-error="Valid subject is required.">Question</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="suggestion" required="required" data-error="Valid subject is required.">Suggestion</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="advertisement" required="required" data-error="Valid subject is required.">Advertisement inquiry</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="other" required="required" data-error="Valid subject is required.">Other</label>

      </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Please enter a message *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12" id="sendmessage">
                <input type="submit" class="btn btn-primary btn-send" id="submit_button" value="Send message" name="submit" onclick="location.href='http://www.blackoutbusinesses.com/phptest/formsubmitted.html';> </div>

                <div id="contact_message"></div>
                <span id="status"></span>
             <?php
              //$to = $subject = $message = $headers = "";
              unset($to);
              unset($subject);
              unset($message);
              unset($headers);

              //define variables and set to empty values.

             /*
             echo $_POST["firstname"];
             echo $_POST["surname"];
             echo $_POST["email"];
             echo $_POST["phone"];
             echo $_POST["optradio"];
             
             $to = 'contact@blackoutbusinesses.com';
             $subject = 'subject';
             $message = 'message';
             $headers = 'header';
             */
             

             //$to = 'contact@blackoutbusinesses.com';
             $subject = $_POST["optradio"];
             $message = "(FROM: ".$_POST["firstname"]. $_POST["surname"]. ")" . "\r\n" ."(EMAIL: ". $_POST["email"] .")" . "\r\n". $_POST["message"];  ;
              //echo $message;
              
              
              if($subject == "business-submission"){
             //echo "businesses";
             $to = 'businesses@blackoutbusinesses.com';
              }else {
             //echo "other"; 
             $to = 'contact@blackoutbusinesses.com';
             }
             
             //mail($to, $subject, $message);
             
             //DISPLAY IF EMAIL WAS SENT
             if(subject !== ""){
              $result ='<div class= "alert alert-success">Form submitted </div>';
              //echo $result;
             }
             
             ?>
             
             
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </div>

</form>
  
   

</div>
<div class="clear"> </div>

    <div class="container adspace col-lg-3 col-md-3 col-sm-12 col-xs-12">
  
        <img class="img-responsive jumbotron" src="admob.png" height="400px" width="400px">

    </div>

</div>

    <div style="clear:both;"></div>


 


</div>

<br /> <br /> <br /> <br /> <br /> <br />
<div class="clear"> 
</div>

<footer> 

Blackout Businesses | Copyright © 2016
      
</div>
</footer>

</div>
<script src="https://www.gstatic.com/firebasejs/3.6.1/firebase.js"></script>
<script type="text/javascript">
  document.getElementById('submit_button').addEventListener('click', function(){
    //alert('hello world');
    window.location = 'www.blackoutbusinesses.com/phptest/formsubmitted.html'

  })
  $(document).ready(function(){

    $("#contact-form").validate().on("submit", function(event){
      if (event.isDefaultPrevented()){
        //handle the invalid form
        formError();
        submitMSG(false, "Did you fill in the form propertly?");
      }else{
        event.preventDefault();
        submitForm();
      }
    });

   

    $("#submit_button").click(function(){
      //ON CLICK, IF ALL FIELDS ARE NOT EMPTY, ALERT SUCCESS
     // alert('hello');
     //GO TO NEW PAGE.
     document.getElementById('succesMessage').innerHTML = "SUCCESS";
      })

  })
</script>
</body>
</html>

