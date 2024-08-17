<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/bootstrap.bundle.js"></script>
    <?php include('app/kontroller.php'); ?>
</head>
<body>
    <div class="container mt-5">

    <div class="card col-6 mx-auto">
        <div class="card-header bg-primary h4 text-white">SELECT OPTION DINAMIS</div>
        <div class="card-body">
        <form action="" method="post">
            <?php
                $query = $myapp->tampilBenua();
                $res = $query->fetch_all(MYSQLI_ASSOC);
            ?>
            <div class="mt-2">
                <label for="benua">Daftar Benua</label><br>
                <select name="benua" id="benua" class="form-select">
                    <option value="1" selected>Silakan Pilih</option>
                    <?php foreach($res as $row):?>
                    <option value="<?=$row['id_benua']?>"><?=$row['nama_benua']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php
                $query = $myapp->tampilNegara();
                $res = $query->fetch_all(MYSQLI_ASSOC);
            ?>
            <div class="mt-2">
                <label for="negara">Daftar Negara</label><br>
                <select name="negara" id="negara" class="form-select">
                    <option value="Tiongkok" selected>Silakan Pilih</option>
                    <?php foreach($res as $row):?>
                    <option data-kategori="<?=$row['id_negara_benua']?>" value="<?=$row['nama_negara']?>"><?=$row['nama_negara']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mt-4">
                <input type="submit" value="KIRIM" class="form-control btn btn-success">
            </div>
        </form>
        </div>
    </div>

    <script src="assets/js/select_dynamic.js"></script>

    </div>
</body>
</html>