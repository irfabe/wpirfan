<body>
    <?php
    $email ='Irfanfebriawan@gmail.com';
    $pass ='12345'

    $user = [
        ['fulname '=> 'Irfan',
        'email '=> 'Irfanfebriawan@gmail.com',
        'password '=> '12345',
        ]
        





    ];
    //; var_dump ($user);
    //echo $user [0]['password]
    foreach ($user as $value) {
        if ($value ['email'] = = $email)
        echo'Ada';
    break
    }else {
        echo 'Silahkan Registrasi';
    }
    }
    ?>