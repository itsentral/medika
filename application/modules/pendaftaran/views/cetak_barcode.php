<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cetak Barcode</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 30px; }
        .box {
            display: inline-block;
            padding: 20px;
            border: 2px solid #000;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="box">
        <b>No Reg:</b><?= $no_pendaftaran; ?>,&nbsp<b>Tgl Reg:</b><?= $tgl_daftar; ?><br>
		<b>Nama :</b><?= $nama; ?>,&nbsp<b>Tgl lahir :</b><?= $lahir; ?><br>
        <img src="data:image/png;base64,<?= $barcode; ?>" alt="barcode" /><br>
        <?= date('d/m/Y H:i'); ?>
    </div>
</body> 
</html>
