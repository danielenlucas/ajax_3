<?php
  include "dbVars.php";
  $debug = true;
  $q = $_GET['q'];
  $g = filter_var($q, FILTER_SANITIZE_STRING);
  $con = mysqli_connect($servername, $uid, $pwd, $database);
  if (!$con) die('could not connect : ' . mysqli_error($con));
  $sql = "SELECT * FROM user_details WHERE last_name LIKE '$q%'";
  if ($debug) echo $sql;
  $result = mysqli_query($con, $sql);
  echo "<table>
  <tr>
  <th>--</th>
  <th>Firstname</th>
  <th>--</th>
  <th>Lastname</th>
  <th>     -------------------     </th>
  <th>Password</th>
  <th>     -------------------     </th>
  <th>Username</th>
  <th>---</th>
  <th>Gender</th>
  </tr>";
  while ($row = mysqli_fetch_array($result)) {
    echo "<table>";
    echo "<tr>";
    echo "<td>" .  "-----" . "</td>";
    echo "<td>" .  $row['first_name'] . "</td>";
    echo "<td>" .  "-------" . "</td>";
    echo "<td>" .  $row['last_name'] . "</td>";
    echo "<td>" .  "-------" . "</td>";
    echo "<td>" .  $row['password'] . "</td>";
    echo "<td>" .  "-------" . "</td>";
    echo "<td>" .  $row['username'] . "</td>";
    echo "<td>" .  "-------" . "</td>";
    echo "<td>" .  $row['gender'] . "</td>";
    echo "</tr>";
  }
  mysqli_close($con);
 ?>
