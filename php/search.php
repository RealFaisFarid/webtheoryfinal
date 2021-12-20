

<form role="form" action="search.php" method="post">
    <div class="form-group">
        <label class="sr-only" for="form-first-name">Input Search Criteria</label>
        <input type="text" name="id" />
    </div>
    <button type="submit" class="btn" name="Submit"><strong>Search</strong></button>
</form>                                        


<?php
include_once("config.php");
if(isset($_POST['Submit'])){
$result = mysqli_query($mysqli, "SELECT * FROM students WHERE id='$_POST[id]'");
?>

<html>	
<body>
  <table border="1">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
		    <th>City</th>
      </tr>
    </thead>
    <tbody>
			<?php
			while($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td class='bg-danger'>".$res['first_name']."</td>";
				echo "<td>".$res['last_name']."</td>";
				echo "<td>".$res['email']."</td>";
				echo "<td>".$res['city_name']."</td>";
				echo "</tr>";
			}
			?>
    </tbody>
  </table>
</body>
</html>

<?php
   }
?>
