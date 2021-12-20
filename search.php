

<form role="form" action="search.php" method="post">
    <div class="form-group">
        <label class="sr-only" for="form-first-name">Input Search Criteria</label>
        <input type="text" name="search_criteria" />
    </div>
    <button type="submit" class="btn" name="Submit"><strong>Search</strong></button>
</form>                                        


<?php
include_once("config.php");
if(isset($_POST['Submit'])){
$result = mysqli_query($mysqli, "SELECT * FROM tablename WHERE search_criteria='$_POST[search_criteria]'");
?>

<html>	
<body>
  <table border="1">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
		<th>Department</th>
      </tr>
    </thead>
    <tbody>
			<?php
			while($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td class='bg-danger'>".$res['name']."</td>";
				echo "<td>".$res['age']."</td>";
				echo "<td>".$res['email']."</td>";
				echo "<td>".$res['dept']."</td>";
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
