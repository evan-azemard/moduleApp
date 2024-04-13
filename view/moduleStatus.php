<?php
include 'controller/Api.php';

if ($_SERVER["REQUEST_METHOD"] === 'GET'){
    if (isset($_GET['id'])){
        $req = new Api($_GET['id']);
    }
}
?>
<div id="data-container"></div>

<script>
    fetch('api/file.json')
        .then(response => response.json())
        .then(data => {
            const dataContainer = document.getElementById('data-container');
            dataContainer.innerHTML = JSON.stringify(data[0].name);
        })
        .catch(error => console.error('Error fetching data:', error));
</script>
<h2>ModuleStatus</h2>
<table class="table table-striped">
    <thead class="table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">date_created</th>
        <th scope="col">type</th>
        <th scope="col">status</th>
        <th scope="col">date_start</th>
        <th scope="col">date_end</th>
        <th scope="col">value_module</th>
        <th scope="col">date_save</th>
    </tr>
    </thead>
    <tbody>

        <tr>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
        </tr>

    </tbody>
</table>
