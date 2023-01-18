<!-- <?php
    
//INSERT INTO `todo `.`todo` (`sno`, `title`, `description`, `tstamp`) VALUES ('1', 'test', 'good Evening', current_timestamp());
    
    // $server = "localhost";
    // $username = "root";
    // $password ="";
    // $database = "todo";

    // // create a db connection   
    // $con = mysqli_connect($server,$username,$password,$database);

    // //check for connection success
    // if(!$con)
    // {
    //     die("connection to this database failed due to ". mysqli_connect_error());
    // }
    // else{
    //   //  echo "connection was successful";
    // }
    

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO </title>
    <link href ="<?php echo base_url();?>fe/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    
    

</head>
<body>
    <img class="bg" src="<?php echo base_url();?>fe/images/op.jpg" alt = "one piece">
<div class ="container">
    <h1> Note Down Your Tasks</h1>
    

<form method = "POST" action  = <?php echo base_url(). "insert_data"; ?>>
    <p>Task</p>
    <input type="text" name ="title" id ="title" placeholder="">
    <p>Task Description</p>
    <textarea name = "description" id="description" cols="30" rows=""></textarea>
    <br>
    <button class="btn">Add Task</button>
</form>


</div>
<div class="container">
    <!-- <?php

        // $sql = "Select * from `todo`";
        // $result = mysqli_query($con, $sql);
        // while ($row = mysqli_fetch_assoc($result)){
        //     echo $row['sno']. ". Title   ".$row['title'] ."desc is ". $row['description'];
        //     echo "<br>";
        // }


    ?> -->
    <table class="table" id ="mytable">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Task</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php

$sql = "Select * from `todo`";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <th scope='row'>" . $row['sno'] . "</th>
    <td>" . $row['title'] . "</td>
    <td>" . $row['description'] . "</td>
    <td> <a href = '/edit'>Edit </a>   <a href = '/del'>Delete</a></td>
  </tr>";
  
  
   // echo $row['sno']. ". Title   ".$row['title'] ."desc is ". $row['description'];
    echo "<br>";
}


?>
    
    
  </tbody>
</table>

</div>

<script src = "//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"> </script>
    <script>
      $(document).ready( function () {
      $('#mytable').DataTable();
      } );
      </script>

</body>
</html> 