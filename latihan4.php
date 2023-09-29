<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan Irfan P2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
<body>
    <?php
    $email='';
    $pass='';
    
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];


    }
    ?>


    <?php
    $email ='Irfanfebriawan@gmail.com';
    $pass ='12345';

    $user = [
        ['fulname'=> 'Irfan',
        'email'=> 'Irfanfebriawan@gmail.com',
        'password'=> '12345',
        ]
        





    ];
    //; var_dump ($user);
    //echo $user [0]['password]
    foreach ($user as $value) {
        if ($value ['email'] == $email){
        echo'Ada';
    break;
    }else {
        echo 'Silahkan Registrasi';
        break;
    }
    };
    ?>

<form>
    <div class="container text-center"></div>
    <div  class="row mb-3" method="POST">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" name="email">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" name="pass">
      </div>
    </div>
    </fieldset>
    <div class="row mb-3">
      <div class="col-sm-10 offset-sm-2">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck1">
          <label class="form-check-label" for="gridCheck1">
            Simpan Login
          </label>
        </div>
      </div>
    </div >
    
    <button type="submit"  class="btn btn-primary" >Sign in</button>
  </form>
</body>
</html>