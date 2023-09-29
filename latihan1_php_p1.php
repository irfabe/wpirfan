

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <h1 class="text-center">Nama Pegawai</h1>
      <h1 class="text-center">Dinas Bina Marga Pengelolaan Jalan dan Jembatan </h1>
      <h1 class="text-center">Wilayah Pelayanan V </h1>
      <?php
      //VAIABLE

      $nk = ['Tasya, Irvan, Hendrik,Heri, Hendi,Sarwedi,Wawan,'];
      $um =['21,25,40,38,50,49,35']
      //code
    ?>
    <?php
      for ( $i=0; $i <count($um) ;$i++){?>
      <?php
      }
      ?>

      <div class="container">
        <table class="table table-dark table-striped">
          <div class="row">
            <tr class="text-center">
              <th scope="col">Nama</th>
              <th scope="col">UMUR</th>
    </tr>
    <?php
       for ( $i=0; $i <count($nk) ;$i++){?>
          <div>
              <tr class=table-secondary text-center">
              <td><?php echo $nk[$i];?></td>
              <td><?php echo $um[$i];?></td>
              </tr>
       </div>
       <?php
      }
      ?>
    </table>
    </div>
             

















    </body>
</html>

