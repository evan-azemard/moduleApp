<?php
include './controller/ModulesStatus.php';
$modules = ModulesStatus::getModules();
$datas = ModulesStatus::getDatas();

//redirects module page
if ($_SERVER["REQUEST_METHOD"] === 'POST'){
    if (isset($_POST['selected_module'])){
    ModulesStatus::showModule($_POST['selected_module']);
    }
}
//$image_url = ModuleStatus::getPlot();

?>
<!--<img src="--><?php //echo $image_url; ?><!--" alt="Graphique" />-->
<h2>Choice modules</h2>
<form method="post" class="mb-5">
    <div class="form-group">
        <label for="select">Select module</label>
        <select id="select" class="form-control" aria-description="select the module" name="selected_module">
            <option>---Select module---</option>
            <?php
            for ($i = 0; $i < count($modules); $i++){
                var_dump($modules[$i]);
                echo '<option value="'.$modules[$i]['id'].'">'.$modules[$i]['name'].'</option>';
            }
            ?>
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
    <?php
    for ($i = 0; $i < count($modules); $i++){
        ?>
        <tr>
            <td><?= $modules[$i]['id'] ?></td>
            <td><?= $modules[$i]['name'] ?></td>
            <td><?= $modules[$i]['date_created'] ?></td>
            <td><?= $modules[$i]['type'] ?></td>
            <td><?= $modules[$i]['status'] ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

<h2>Datas of the modules</h2>
<table class="table table-striped">
    <thead class="table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">id_module</th>
        <th scope="col">name_module</th>
        <th scope="col">date_start</th>
        <th scope="col">date_end</th>
        <th scope="col">value_module</th>
        <th scope="col">date_save</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i = 0; $i < count($datas); $i++){
        ?>
        <tr>
            <td><?= $datas[$i]['id_datas'] ?></td>
            <td><?= $datas[$i]['id_modules'] ?></td>
            <td><?= $datas[$i]['module_name'] ?></td>
            <td><?= $datas[$i]['date_start'] ?></td>
            <td><?= $datas[$i]['date_end'] ?></td>
            <td><?= $datas[$i]['value_modules'] ?></td>
            <td><?= $datas[$i]['date_save_value'] ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

