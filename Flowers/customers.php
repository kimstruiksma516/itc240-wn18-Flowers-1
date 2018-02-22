<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<h2>Customers</h2>

<?php 

$sql = "select * from test_Customers";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

$display = mysqli_num_rows($result);
echo $display;



if ($display > 1)
{
    while ($row = mysqli_fetch_assoc($result)){
        
       print "<p>";
       print "FirstName: <b>" . $row['FirstName'] . "</b><br />";
       print "LastName: <b>" . $row['LastName'] . "</b><br />";
       print "Email: <b>" . $row['Email'] . "</b><br />";
       print "</p>";
        
        
    }
}else{print '<div align="center">What! No customers?  There must be a mistake!!</div>';
    
    
}





@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database


?>
                
 <?php include 'includes/footer.php';?>
