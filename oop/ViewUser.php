

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
      $email = '';
      $pass = '';

      if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
      }

      $user = [
        [
          'fullname' => 'Haisyam',
          'email' => 'haisyam@mail.com',
          'password' => '12345'
        ],
        [
          'fullname' => 'M.Irgi',
          'email' => 'irgi@mail.com',
          'password' => '12345'
        ],
        [
          'fullname' => 'Irvan.F',
          'email' => 'irvan@mail.com',
          'password' => '12345'
        ],
        [
          'fullname' => 'Al Faisal ',
          'email' => 'faisal@mail.com',
          'password' => '12345'
        ],
        [
          'fullname' => 'M.Lutfi',
          'email' => 'lutfi@mail.com',
          'password' => '12345'
        ]

      ];
      // var_dump($user);
      // echo $user[0]['password'];
      foreach ($user as $i => $value) {
       // echo 'Percobaan ke '.($i + 1)."<br>";
        if ($value['email'] == $email && $value['password'] == $pass) {
          echo 'Ada';
          break;
        } elseif ($value['email'] == $email && $value['password'] != $pass) {
          echo 'Password Salah';
          break;
        } elseif(count($user)- 1 == $i && $value['email'] != $email){
          echo 'Silahkan Registrasi';
          break;
        }else {
          continue;
        }

      }
    ?>
    <?php
    include_once 'User.php'
    ?>
	<table  border="1" width ="50%" >
	<td></td>
	<thead>
		<tr class ="text-center">
			<th scope ="col">Fullname</th>
			<th scope ="col">Email</th>
			<th scope ="col">Password</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<?php foreach($user as $user ){?>
		<td colspan="1" align="center" > <?php echo $user ['fullname']?></td>
		<td colspan="1" align="center" > <?php echo $user ['email']?></td>
		<td colspan="1" align="center" > <?php echo $user ['password']?></td>
		</tr>
		<?php } ?>
		
	<tbody>
	</table>
	
	
	
    <div class="container text-center">
      <form class="row g-3" method="POST">
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="pass">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

