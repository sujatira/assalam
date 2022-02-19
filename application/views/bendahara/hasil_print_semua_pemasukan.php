<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Data Pemasukan Kas</title>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #1cc98a;
      color: white;
    }

    h3,
    h1 {
      text-align: center;
    }
  </style>
</head>

<body>
  <table id="customers">
    <tr>
      <td>
        <img src="./assets/images/msjd.png" alt="" style="width: 100px; height: 100px;">
      </td>
      <td>
        <h1>Masjid Jami Assalam</h1>
        Jl. Sapan-Majalaya Bojongrangkas RT.03/RW.12 Rancakasumba<br />
        Solokanjeruk Kab. Bandung<br />
      </td>
    </tr>
  </table>
  <br>
  <br>
  <h3>Tabel Pemasukan Kas</h3>
  <table id="customers">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Nominal</th>
      <th>Ketegori</th>
      <th>Tanggal</th>
      <th>Keterangan</th>
    </tr>
    <?php
    $i = 1;
    foreach ($pemasukan as $p) :
    ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><?= $p['nama'] ?></td>
        <td>Rp. <?= number_format($p['nominal'])  ?></td>
        <td><?= $p['kategori'] ?></td>
        <td><?= $p['tanggal'] ?></td>
        <td><?= $p['keterangan'] ?></td>
      <?php endforeach; ?>
  </table>
</body>

</html>