<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        // Lakukan Looping Di Sini

        echo "LOOPING PERTAMA <br>";
        for ($i=2 ;$i<=20 ; $i++){
            if ($i % 2 == 0){
                echo $i ." - I Love PHP <br>";
            }
           
        }

        echo "LOOPING KEDUA<br>";
        for ($j=20 ;$j>=2 ; $j--){
            if ($j % 2 == 0){
                echo $j ." - I Love PHP <br>";
            }
        }

        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        /* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini
        for ($k=0; $k < count($numbers) ;$k++){
            $sisabagi= $numbers[$k]%5;
            $array_sisaBagi[$k]=$sisabagi;
        }

        echo "<br>";
        echo "Array sisa baginya adalah:  " ; 
        print_r($array_sisaBagi);
        echo "<br>";

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

        */
        $items = array(
                 array('id' => '001', 'Name' => 'Keyboard Logitek','price' => 60000, 'description' => 'Keyboard yang mantap untuk kantoran', 'source' =>'logitek.jpeg'),
                 array('id' =>'002', 'Name' =>'Keyboard MSI', 'price' =>300000, 'description' =>'Keyboard gaming MSI mekanik', 'source' =>'msi.jpeg'),
                 array('id' =>'003', 'Name' =>'Mouse Genius', 'price' =>50000, 'description' =>'Mouse Genius biar lebih pinter','source' => 'genius.jpeg'),
                 array ('id' =>'004', 'Name' =>'Mouse Jerry', 'price' =>30000, 'description' =>'Mouse yang disukai kucing', 'source' =>'jerry.jpeg')
            );
        
        // Output: 
        for($h=0; $h < count($items); $h++){
            print_r($items[$h]);
            echo "<br>";
        }
        


        
        echo "<h3>Soal No 4 Asterix </h3>";
        /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
        echo "Asterix: ";
        echo "<br>";   
        for ($b=0;$b<5;$b++){
            for($c=0; $c<5;$c++){
                if ($c<=$b){
                    echo "* ";
                }               
            }
            echo "<br>";
        }     
    ?>

</body>
</html>
