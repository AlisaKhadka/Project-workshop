<?php
?>
<html>

<head>
    <title>table</title>
 <!-- <link rel="stylesheet" href="<?= base_url('css/alisa.css')?>"> -->
 <link href="<?=base_url("bootstrap-5.0.2-dist\css\bootstrap.min.css")?>" rel="stylesheet">
</head>

<body>
   <table border="2">
   <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>psw</th>
    </tr>
   </thead>
   <tbody>
    <?php foreach($data as $item){?>
        <tr>
            <td><?= $item['id']?></td>
            <td><?= $item['name']?></td>
            <td><?= $item['psw']?></td>
        </tr>
   <?php }?>
   </tbody>
</table>   
</body>
</html>

<!-- <h1>student view</h1> -->