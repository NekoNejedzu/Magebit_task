<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<form action="display-data.php" method="post">
<table>
<div>LIST : <?php print_r($obj->flex_buttons()); ?></div>
<div>SORT BY :
    <input name="sort" type="radio" value="date" checked>DATE</input>
    <input name="sort" type="radio" value="email" <?php if ($_POST['sort'] == 'email') { ?>checked <?php }; ?>>EMAIL</input>
  </div>
  <div>SEARCH :
    <input name="search" placeholder="Input part of a email.." value="<?php echo (isset($_POST['search']))?$_POST['search']:'';?>"></input>
  </div>

<tr>
<th>Id</th>
<th>Email</th>
<th>DATE</th>
</tr>


<?php
    print_r($obj->display());
    ?>
<?php


 public class display_info{
  public function display($table = 'registration'){
    $conn = mysqli_connect("localhost", "vitalijs", "vitalijs", "magebit_test");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, email FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["email"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
      $sort = isset($_POST['sort']) ? $_POST['sort'] : "date";
      $search = isset($_POST['search']) ? $_POST['search'] : "";
      $filter = isset($_POST['filter']) ? $_POST['filter'] : "";
  
      if($filter != ""){
        $filter = " WHERE SUBSTRING(email, LOCATE('@',email) + 1)='".$_POST['filter']."'";
      } else {
        $filter = "";
      }
  
     $listall = $conn->query("SELECT id, email FROM ".$table. $filter." ORDER BY ".$sort);
      if ($listall->num_rows > 0) {
        while($row = $listall->fetch_assoc()) {
          if(str_contains($row["email"], $search)){
            echo "<tr><th>" . $row["ID"]. "</th><th>" . $row["email"]. "</th><th>" . $row["date"]. "</th><th><input name='email[]' type='checkbox' value=".$row["ID"]."></input></th></tr>";
          }
       }
      }  else {
        echo "<tr><th>ERROR=SOMETHING WRONG!</th>";
      }
    }
      public function flex_buttons($table = 'registration', $sort = "date"){
        $domains = $this->conn->query("SELECT  DISTINCT SUBSTRING(email, LOCATE('@',email) + 1) AS domain FROM ".$table);
        echo'<button name="filter" value="">All results</button>';
        while($row = $domains->fetch_assoc()) {
          echo '<button name="filter" value="' . $row["domain"]. '">' . $row["domain"]. '</button>';
        }
    }
  }
      $obj = new display_info();
?>
