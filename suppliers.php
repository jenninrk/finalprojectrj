<?php

  include_once "header.php";
  include_once "includes/dbh-inc.php";

 ?>

 <div class="breadcrumbs1_wrapper">
     <div class="container">
         <div class="breadcrumbs1"><a href="index.php">Home</a><span>/</span>Suppliers</div>
     </div>
 </div>
<div id = "content">
  <div class = "container">
    <div><h1>Available Suppliers List</h1>

      <form action = "suppliers.php" method='post'>
        <!-- name='form_filter'  -->

          <select name="type">
              <option value = "All">All</option>
              <option value = "Data">Data</option>
              <option value = "Voice">Voice</option>
              <option value = "Wireless">Wireless</option>
              <option value = "Software">Software</option>
              <option value = "Hardware">Hardware</option>
              <option value = "Infrastructure">Infrastructure</option>
          </select>

          <input type='submit' value = 'Filter'>

      </form>

</br>

<?php

$type = isset($_POST['type']) ? $_POST['type'] : '';

echo "<h3>Filter Selected = " . $type . "</h3>";

if($type == 'Data') {

  $sql = "SELECT ID, Provider_Name, URL, Logo FROM suppliers WHERE Data = 1;";

 }

elseif($type == 'Voice') {

  $sql = "SELECT ID, Provider_Name, URL, Logo FROM suppliers WHERE Voice = 1;";

}

elseif($type == 'Wireless') {

  $sql = "SELECT ID, Provider_Name, URL, Logo FROM suppliers WHERE Wireless = 1;";

}

elseif($type == 'Software') {

  $sql = "SELECT ID, Provider_Name, URL, Logo FROM suppliers WHERE Software = 1;";

}

elseif($type == 'Hardware') {

  $sql = "SELECT ID, Provider_Name, URL, Logo FROM suppliers WHERE Hardware = 1;";

}

elseif($type == 'Infrastructure') {

  $sql = "SELECT ID, Provider_Name, URL, Logo FROM suppliers WHERE Infrastructure = 1;";

}

else  {

$sql = "SELECT ID, Provider_Name, URL, Logo FROM suppliers;";

}

  $results = mysqli_query($conn, $sql);
  $resulCheck = mysqli_num_rows($results);

  if ($resulCheck > 0) {

    echo "<table class ='table table-dark'>
    <tr>
    <th>ID</th>
    <th>ProviderName</th>
    <th>Website</th>
    <th>Logo</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($results)) {
      echo "<tr>";
      echo "<td>" . $row['ID'] . "</td>";
      echo "<td>" . $row['Provider_Name'] . "</td>";
      echo "<td>" . "<a href=" . $row['URL'] . " target='_blank'>" . $row['URL'] . "</a></td>"; //<a href="https://www.w3schools.com">Visit W3Schools.com!</a>
      echo "<td><img src = 'images/Logos/" . $row['Logo'] . "' height=100 width = 100></td>";
      echo "</tr>";
    }

    echo "</table>";

  }

 ?>
  </div>
</div>

 <?php

   include_once "footer.php"

  ?>
