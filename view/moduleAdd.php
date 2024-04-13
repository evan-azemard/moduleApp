<?php

include './controller/ModuleAdd.php';
if(isset($_POST['name']) && isset($_POST['type'])) ModuleAdd::addModule($_POST['name'], $_POST['type']);

?>
<h2>Add</h2>
<form method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-description="enter the name of the module" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type" class="form-control" id="type" placeholder="Enter type">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
