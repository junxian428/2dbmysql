<!DOCTYPE html>
<html>
	 <head>

		       <title>STOCK SYSTEM</title>

<style>

 body {
                  background-image: url("https://i.pinimg.com/originals/6b/51/b5/6b51b52544ed291fd617fc2b42a7ec24.jpg");
		  background-size: cover;
		  background-position: center;
		  background-attachment: fixed;
	     }

table, th, td {

  border: 1px solid black;
}
</style>


	 </head>


          <body>
                  <h1>STOCK MANAGEMENT SYSTEM</h1>
		 
                  <a href"../POS/"><h5>POS</h5></a>
               <?php
               


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PointOfSale";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query 	= "SELECT * FROM `products`";

$result = $conn -> query($query);

echo '<table>';
while($row = $result -> fetch_assoc()) 
{              echo '<tr>';
               echo '<td>'. $row['product_name'] . '</td>'.'<td>' . $row['quantity'] .'</td>';
               echo  '</tr>';
}
echo '</table>';
echo '<br />';
echo '<hr>';
echo '<a href="../ecommerce/"><h5>E-Commerce</h5></a>';
echo '<br />';
$dbname2 ="khanstore";
$conn1 = new mysqli($servername,$username,$password,$dbname2);
if ($conn1->connect_error) {
  die("DataBase 2 Connection failed: " . $conn1->connect_error);
}
$query1 = "SELECT * FROM `products`";
$run_query = mysqli_query($conn1,$query1);
echo '<table>';
if(mysqli_num_rows($run_query) > 0){
	while($row = mysqli_fetch_array($run_query)){
		        echo '<tr>';
			echo '<td>'. $row['product_title'] . "</td>" .'<td>'. $row['product_qty'].'</td>';
			echo '</tr>';
	}
}
echo '</table>';
echo '<br />';
?>
                      
        </body>


</html>
