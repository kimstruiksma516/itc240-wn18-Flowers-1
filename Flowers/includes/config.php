<?php

/*
config.php

put configuration information here


*/





define('DEBUG',TRUE); #we want to see all errors

/*
// a constant never changes
// always available, access within functions
*/
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


$nav1['index.php'] = "HOME";
$nav1['contact_us.php'] = "CONTACT US";
$nav1['customer_form.php'] = "REGISTRATION";
$nav1['customers.php'] = "CUSTOMERS";
$nav1['daily.php'] = "DAILY ARRANGEMENTS";


//defaults for header.php
$banner = 'Flowers';
$slogan = 'Flowers give the world color and joy!';

/*
//$_SERVER, browser, kind software, get lots of interesting stuff!!! Want name of current file

//echo $_SERVER['PHP_SELF']; this is how the page identifies itself...the url of hte page that it's in; delivers the full URL beyond the domain!

echo basename($_SERVER['PHP_SELF']);
this will strip off all data on the left and the right

define();
-- this defines a constant, define('THIS_PAGE'), we just defined a constant of THIS_PAGE
*/

//echo basename($_SERVER['PHP_SELF']);
//die;



//echo THIS_PAGE;
//die;


/*
// other include files referenced here
*/




switch(THIS_PAGE){
        
    case 'template.php':
        $title = 'Template Page';
        break;
    case 'contact_us.php' :
        $title = 'Contact Us';
            break;      
    case 'customer_form.php' :
        $title = 'Customer Form';       
        break;     
            
     case 'daily.php' :
        $title = 'Daily Arrangement';  
              break;   
        
      case 'index.php' :
        $title = 'Home';            
              break;    
    
    /*
    require GOOGLE have unique title page on every page!
    */
    default:
            $title = THIS_PAGE;
        
        
}





function flowers_links($nav1){
    
    foreach($nav1 as $url)
        
        
        echo 'Why hello there '. $url;
            
            /*
            '<li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" 
                    href="' . $url . '">' . $text . '</a>
                </li>
        
        ';
        */
    }
    
    



include 'credentials.php';

/*

              <!--
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
            </li>
              
              
              <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contactus.php">Contact Us</a>
            </li>
              
              
              
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contactuscomplex.php">Contact Us Complex</a>
            </li>             
              
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.html">Products</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.html">Store</a>
            </li>
              
              -->


*/








?>