
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
       $fn1 = "Irvan Febriawan";
       $fn2 = "Muhammad Irgi";
       $fn3 = "Muhammad Lutfi";
       $fn4 = "Alfaisal Darmawan";
       $u1  =  "20";
       $u2  =  "21";
       $u3  =  "22";
       $u4  =  "23";
       $data = ['Haisyam','Irvan Febriawan','Muhammad Irgi','Muhammad Lutfi','Alfasila Darmawan'];

       ?>

    <div class="container text-center">
        <div class="row">
            <?php
            for ($i=0; $i < count[data]; $i++) { 
                # code...
            }
            ?>
            <div class="col">
            <?php echo $fn1; ?>
            </div>
            <div class="col">
            <?php echo $fn2; ?>
            </div>
            <div class="col">
            <?php echo $fn3; ?>
            </div>
            <div class="col">
            <?php echo $fn4; ?>
            </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
            <button type="button" class="btn btn-primary">
            <?php echo  $u1; ?>
            </button>
            </div>
            <div class="col">
            <?php echo  $u2; ?>
            </div>
            <div class="col">
            <?php echo  $u3; ?>
            </div>
            <div class="col">
            <?php echo  $u4; ?>
            </div>
    </div>
  
    </body>
</html>

