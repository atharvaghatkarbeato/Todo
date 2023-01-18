
<html>
    <head>
        
        <title>
            Test Todo
        </title>
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    
    </head>
    <h1> TO DO  </h1>
<body>
    <div class="container">


<form  action  = "<?php echo base_url() . 'test/insert_data'; ?>"  method = "POST"  >
    <p>Task</p>
    <input type="text" name ="title" id ="title" placeholder="Enter Task">
    <p>Task Description</p>
    <textarea name = "description" id="description" cols="30" rows="4" placeholder= "Enter Description"></textarea>
    <br><br>
    <!-- <input type = "submit"> -->
    <button type ="submit"  class="btn">Add Task</button>
    </form>
 

    <div class="container">
    <br><br>
    <table class="table" id ="mytable">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Task</th>
      <th scope="col">Description</th>
      <th scopt ="col"> Time Stamp</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($test2 as $row ): ?>
    <tr>
    <td><?php echo $row->sno; ?></td>
    <td><?php echo $row->title; ?></td>
    <td><?php echo $row->description; ?></td>
    <td><?php echo $row->tstamp; ?></td>
    <td><a href = "<?php  echo base_url('test/edit/' . $row->sno) ?>">Edit </a> . <a href = "<?php  echo base_url('test/delete/' . $row->sno) ?>">Delete </a> </td>
  </tr>

  <?php endforeach ?>

   
  </tbody>
</table>

</div>
</div>




    <script src = "//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"> </script>
    <script>
      $(document).ready( function () {
      $('#mytable').DataTable();
      } );
      </script>

    </body>


</html>
    