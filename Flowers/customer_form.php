<?php include 'includes/config.php'?> 
<?php include 'includes/header.php'?>    
<h2>Contact Us</h2>
<?php
//email2.php

if(isset($_POST['Submit']))
{//send email?
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = "kimstruiksma516@gmail.com";
    
    $subject = "My WebSite Feedback " . date("m/d/y, G:i:s");
    
    //collect and clean post data
    $FirstName = coffee_clean_post('FirstName');
    $LastName = coffee_clean_post('LastName');
    $Email = coffee_clean_post('Email');
    $Comments = coffee_clean_post('Comments');
    
    
    

                            
    $SubscribeNewsletter = coffee_clean_post('subscribeNews');
    $WeeklyUpdates = coffee_clean_post('ContactActivities');
    $Volunteer = coffee_clean_post('Foundation');
    $CustomerType = coffee_clean_post('CustomerType');    
    $FavColor = coffee_clean_post('FavoriteColor');   
    
    
    
    //build body of email
    $text = '';//initialize variable
    $text .= 'First Name: ' .  $FirstName . PHP_EOL . PHP_EOL;
    $text .= 'Last Name: ' . $LastName . PHP_EOL . PHP_EOL;
    $text .= 'Email: ' . $Email . PHP_EOL . PHP_EOL;
    $text .= 'Comments: ' . $Comments . PHP_EOL . PHP_EOL;
    
    
     $text .= 'Subscribe to newsletter: ' . $SubscribeNewsletter . PHP_EOL . PHP_EOL;   
     $text .= 'Contact about weekly activities: ' . $WeeklyUpdates . PHP_EOL . PHP_EOL;    
     $text .= 'Contact about volunteer opportunities: ' . $Volunteer . PHP_EOL . PHP_EOL;        
     $text .= 'Customer type: ' . $CustomerType . PHP_EOL . PHP_EOL;    
     $text .= 'Favorite Color: ' . $FavColor . PHP_EOL . PHP_EOL;   
    
    
    
    
    $headers = 'From: noreply@kimberliemariecodes.xyz' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    
    
    mail($to,$subject,$text,$headers);
    
    echo '<div class="row">
        <div class="col-lg-12">
            <h3>Message Sent</h3>
            <p>We will contact you within 24 hours!</p>
        </div>
    </div>
    ';

}else{//show form!
    echo '
    <form action="" method="post">
    
    <div class="row">
        <div class="form-group col-lg-4">
            <label class="text-heading" for="FirstName">First Name</label>
            <input class="form-control" type="text" name="FirstName" id="FirstName" autofocus required />
        </div>
        
       <div class="form-group col-lg-4">
            <label class="text-heading" for="LastName">Last Name</label>
            <input class="form-control" type="text" name="LastName" id="LastName" required />
        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading" for="Email">Email</label>
            <input class="form-control" type="email" name="Email" id="Email" required />
        </div>
        

  <div class="form-group col-lg-12" align="left">  
  
  <input type="checkbox" id="subscribeNews" name="subscribeNews" value="Yes">
  <label for="subscribeNews">Subscribe to newsletter?</label><br>
  
  <input type="checkbox" id="ContactActivities" name="ContactActivities" value="Yes">
  <label for="ContactActivities">Receive weekly updates about new events?</label><br>
  
   <input type="checkbox" id="Foundation" name="Foundation" value="Yes">
  <label for="DonationContact">Would you like volunteer with our coffee to the homeless foundation?</label>  
  
   </div>     
     
        
        
        

        <div class="form-group col-lg-12" align="left">
            <label class="text-heading" for="CustomType">Customer Type:    </label>
            <input type="radio" name="CustomerType" id="CustomerType" value="New">   New     
            

            <input type="radio" name="CustomerType" id="CustomerType" value="Former">   Former    
            
            <input type="radio"  name="CustomerType" id="CustomerType" value="Very Important">   Very Important     <br>
        </div>
           
        
        
            <div class="form-group col-lg-12" align="left">
            <label class="text-heading" for="FavoriteColor">Favorite Color:    </label>
            <input type="radio" name="FavoriteColor" id="FavoriteColor" value="Purple">   Purple     
            <input type="radio" name="FavoriteColor" id="FavoriteColor" value="Blue">   Blue      
            <input type="radio" name="FavoriteColor" id="FavoriteColor" value="Red">   Red <br>
            </div>
    
        

  
       <div class="form-group col-lg-12">
            <label class="text-heading" for="Comments">Comments</label>
            <textarea class="form-control" name="Comments" id="Comments"></textarea>
        </div>

        

        <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-secondary" name="Submit">Submit</button>
        </div>

        
        

                <div class="clearfix"></div>
        
        
  

        

        
        
    </div>
</form>


    ';

}

?>
<?php include 'includes/footer.php';


function coffee_clean_post($key)
{
    if(isset($_POST[$key])){
        return strip_tags(trim($_POST[$key]));
    }else{
        return '';
    }
 
}







?>
                