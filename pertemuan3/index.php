<?php
//Pengulangan
//for
//while
//do.. while

// for( $i = 0; $i < 5; $i++ ) {
//     echo "Hello World !! </br>";
// }

// $i = 0;
// while( $i < 5 ) {
//     echo "Hello World !! </br>";

// $i++; 
// }

// $i = 0;
// do {
//     echo "Hello World !! </br>";
// $i++;
// } while( $i < 5 );

// $i = 0;
// while( $i < 5 ) {
//     echo "Hello World !! </br>";

// $i++;
// }

$i = 10;
do {
    echo "Hello World !! </br>";

$i++;
} while( $i < 5 );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .warna_baris {
            background-color: gray;
        }
    </style>
</head>

<body>
    
        <table border="1" cellpadding="10" cellspacing="0">
            <?php for( $i = 1; $i <= 5; $i++ ) : ?>
                <?php if ( $i%2 == 1 ) : ?>
                    <tr class="warna_baris">
                <?php else : ?>
                    <tr>
                <?php endif; ?>
                    <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                        <td><?= "$i, $j"; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    
</body>

</html>