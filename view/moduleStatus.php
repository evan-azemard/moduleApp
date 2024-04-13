<?php
include './controller/ModuleStatus.php';
$image_url = ModuleStatus::getPlot();

?>
<!--<img src="--><?php //echo $image_url; ?><!--" alt="Graphique" />-->
<h2>Choice module</h2>
<form method="post" class="mb-5">
    <div class="form-group">
        <label for="select">Select module</label>
        <select id="select" class="form-control" aria-description="select the module">
            <option name="default">---Select module---</option>
            <option name="module1">Module 1</option>
        </select>
    </div>
    <button type="submit" class="btn btn-dark mt-3">Submit</button>
</form>
<h2>Module</h2>
<table class="table table-striped">
    <thead class="table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">date_created</th>
        <th scope="col">type</th>
        <th scope="col">status</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@mdo</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@mdo</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>

<h2>Datas of the module</h2>
<table class="table table-striped">
    <thead class="table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">id_module</th>
        <th scope="col">date_start</th>
        <th scope="col">date_end</th>
        <th scope="col">value_module</th>
        <th scope="col">date_save</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>

