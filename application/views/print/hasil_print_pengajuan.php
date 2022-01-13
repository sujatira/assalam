<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    th {
      border: 1px solid #0000;
      text-align: left;
      padding: 8px;
      text-align: center;
    }

    td {
      border: 1px solid #0000;
      text-align: left;
      padding: 8px;
    }
  </style>
</head>

<body>

  <table>
    <tr>
      <th>
        <img src="./assets/images/profile/default.jpg" alt="" style="width: 100px; height: 100px;">
        <i class="fas fa-fw fa-mosque"></i>
      </th>
      <th>
        <h3>Lembar persetujuan pengeluaran kas</h3>
        <h4>Masjid Jami Assalam</h4>
        <h4>Jl. Sapan-Majalaya Bojongrangkas 03/12 </h4>
        <h4> Rancakasumba Solokanjeruk Kab. Bandung</h4>
      </th>
    </tr>
  </table>

  <!-- <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Keperluan</th>
        <th>Harga</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
      </tr>
    </tbody>
  </table> -->
  <p>Solokanjeruk, <?= date('d m Y') ?></p> <br>
  <p>Assalamu'alaikum Warohmatullahi Wabarokatuh.</p>
  <p>Atas nama kepengurusan dewan masjid Jami Assalam, menerangkan bahwa. Pengajuan pengeluaran kas yang diajukan pada tanggal :</p>
  <br>
  <span>Tanggal : <?= $kukuk->tanggal ?></span><br><br>
  <span>Keperluan :</span><br><br>
  <span>Keterangan :</span><br><br>

  <p>dengan nominal sebesar <strong>Rp. 20000</strong>. Berdasarkan peninjauan dan musyawarah bersama seluruh kepengurusan, bahwa pengajuan pengeluaran diatas tersebut dinyatakan <strong>disetujui</strong>. Besar harapan bersama surat pernyataan ini dapat dilanjutkan sebagai mestinya dan bermanfaat untuk umat. Terimakasih.</p>
  <p>Wassalamu'alaikum Warohmatullahi Wabarokatuh.</p>
  <br><br><br>
  <table>
    <tr>
      <th></th>
      <th></th>
    </tr>
  </table>

</body>

</html>