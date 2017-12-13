<?php  
$servername = "localhost";
$username = "quentinjoseph";
$password = "thisispassword";
$dbname = "nicolejoseph";

?>

<?php 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT description FROM events";
$result = $conn->query($sql);
?>

<?php if ($result->num_rows > 0):  ?>  
    
   <?php while($row = $result->fetch_assoc()): ?>  

    	<h1><?php echo $row['description']; ?></h1>
    <?php endwhile; ?>
 <?php   else:
    echo "0 results";
	
 ?>
<?php endif; ?>
<?php $conn->close(); ?>
<?php get_footer(); ?>