<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Print Pengajuan</title>
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

    strong {
      text-align: center;
    }
  </style>
</head>

<body>

  <table>
    <tr>
      <th>
        <img src="./assets/images/msjd.png" alt="" style="width: 100px; height: 100px;">
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
  <p dir="rtl"><strong> بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ</strong></p>
  <p dir="rtl"><strong>السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</strong></p>
  <!-- <p>Assalamu'alaikum Warohmatullahi Wabarokatuh.</p> -->
  <p>Atas nama kepengurusan dewan masjid Jami Assalam, menerangkan bahwa. Pengajuan pengeluaran kas yang diajukan pada tanggal :</p>
  <br>
  <span>Tanggal : <?= date('d F Y', $kukuk->tanggal_pengajuan) ?> </span><br><br>
  <span>Keperluan : <?= $kukuk->nama_pengajuan ?></span><br><br>
  <span>Keterangan : <?= $kukuk->keterangan ?></span><br><br>

  <p>dengan nominal sebesar <strong>Rp. <?= number_format($kukuk->jumlah_pengajuan)  ?></strong>. Berdasarkan peninjauan dan musyawarah bersama seluruh kepengurusan, bahwa pengajuan pengeluaran diatas tersebut dinyatakan <strong>disetujui</strong>. Besar harapan bersama surat pernyataan ini dapat dilanjutkan sebagai mestinya dan bermanfaat untuk umat. Terimakasih.</p>
  <!-- <p>Wassalamu'alaikum Warohmatullahi Wabarokatuh.</p> -->
  <p dir="rtl"><strong>وَ السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</strong></p>
  <br><br><br>
  <table>
    <tr>
      <th></th>
      <th></th>
    </tr>
  </table>

</body>

</html>