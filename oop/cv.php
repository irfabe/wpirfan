

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
    include_once 'Database.php';
    include_once 'schools.php';
    include_once 'User.php';

    $database = new Database();
    $db = $database->getConnection();

    $query = new User($db);
    $listUser = $query->getUserId($_GET['id'])->fetchAll(PDO :: FETCH_ASSOC);
    var_dump ($listUser[0]['fullname']);

    $query2 = new schools($db);
    $result = $query2->getschoolsByUser($_GET['id'])->fetchAll(PDO :: FETCH_ASSOC);
 


    ?>
	<table  border="1" width ="50%" align="center">
	<td></td>
	<thead>
		<tr class ="text-center">
			<th scope ="col">Fullname</th>
			<th scope ="col">Nama Sekolah</th>
			<th scope ="col">Tahun</th>
            <th scope ="col">Nilai</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<?php foreach($result as $schools ){?>
		<td colspan="1" align="center" > <?php echo $schools['fullname']?></td>
		<td colspan="1" align="center" > <?php echo $schools['nama_sekolah']?></td>
		<td colspan="1" align="center" > <?php echo $schools['tahun']?></td>
        <td colspan="1" align="center" > <?php echo $schools['nilai']?></td>
		</tr>
		<?php } ?>
		
	<tbody>
	</table>
	
	
	
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

