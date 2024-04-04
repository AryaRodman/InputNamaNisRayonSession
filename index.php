<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="position-absolute top-50 start-50 translate-middle">

        <div class=container>
            <form method="post">
                <br>
                <label for="nama">MASUKKAN NAMA</label><br>
                <input type="text" placeholder = "Nama Anda" id="nama" name="nama" required><br>
                <label for="nis">MASUKKAN NIS</label><br>
                <input type="number" placeholder = "NIS Anda" id="nis" name="nis" required><br>
                <label for="nis">MASUKKAN RAYON</label><br>
                <input type="select" placeholder = "Rayon Anda" id="rayon" name="rayon" required><br>
                <br>
                <input class="btn btn-primary" type="submit" value="KIRIM">
                <button type="button" class="btn btn-secondary"><a href="session.php">CETAK</a></button>
                <br>
                <?php
            // PAGINASI
            echo '<br>';
            echo "<a href = http://localhost/latihsession/session2.php><button type='button' class='btn btn-warning'>Hapus Semua</button></a>"; 
            echo"<br>";
            ?>
                <br>
                <table class="table table-striped">
                    <tr>
                        <th>NAMA</th>
                        <th>NIS</th>
                        <th>RAYON</th>
                        <th>AKSI</th>
                    </tr>
                    
                </div>
            </div>
            </form>
            
            
            <?php
        session_start();
        if(!isset($_SESSION['dataSiswa'])){
            $_SESSION['dataSiswa']=array();
        }
        
        if(isset($_POST['nama']) && isset($_POST['nis'])
        && isset($_POST['rayon'])){
    $data = array(
        'nama' => $_POST['nama'],
        'nis' => $_POST['nis'],
        'rayon' => $_POST['rayon'],
    );
    array_push($_SESSION['dataSiswa'], $data);
    };
    // var_dump($_SESSION['dataSiswa']);

   
    ?>
    </div>

    <?php
    foreach($_SESSION['dataSiswa'] as $index => $value){
        echo '<tr>';
        echo '<td>' . $value['nama'] . '</td>';
        echo '<td>' . $value['nis'] . '</td>';
        echo '<td>' . $value['rayon'] . '</td>';
        echo '<td><a href="?apus='.$index.'"><button type="button" class="btn btn-danger">Hapus</button></td>';
        echo '</tr>';
    }
    echo '</table>';
    if(isset($_GET['apus'])) {
        $index = $_GET['apus'];
        unset($_SESSION['dataSiswa'][$index]);
        header("Location: http://localhost/latihsession/index.php", true, 301);
        exit;
    }

    ?>
   

   <p>&copy; Arya Rodman Karale | 2024</p>
</body>
</html>