<h1>This is Edit Page</h1>
<html>
    <head>
        <title>
            TO DO Edit
</title>
</head>
<body>
<div class="container">

<form  action  = "<?php echo base_url('test/update/'.$test2['sno']) ?>"  method = "POST"  >
    <p>Task</p>
    <input type="text" name ="title" id ="title" value="<?= $test2['title']?>" placeholder="Edit Task">
    <p>Task Description</p>
    <textarea name = "description" id="description" value="<?= $test2['description'] ?>" cols="30" rows="4" placeholder= "Edit Description"></textarea>
    <br><br>
    <!-- <input type = "submit"> -->
    <button type ="submit"  class="btn">Update Task</button>
    </form>
</div>
</body>
</html>
