<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>A simple, clean, and responsive HTML invoice template</title>

  <style>
    .invoice-box {
      max-width: 800px;
      margin: auto;
      padding: 30px;
      border: 1px solid #eee;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
      font-size: 16px;
      line-height: 24px;
      font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
      color: #555;
    }

    .invoice-box table {
      width: 100%;
      line-height: inherit;
      text-align: left;
      border-collapse: collapse;

    }


    .invoice-box table tr {
      text-align: right;
    }




    .invoice-box table tr.heading {
      background: #eee;
      border-bottom: 1px solid #ddd;
      font-weight: bold;
    }

    .invoice-box table tr.details {
      padding-bottom: 20px;
    }

    .invoice-box table tr.item {
      border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last {
      border-bottom: none;
    }


    th {
      border: 1px solid #0000;
      text-align: center;
    }

    td {
      border: 1px solid #0000;
      text-align: center;
    }

    h3 {
      font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;

    }
  </style>
</head>

<body>
  <div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
      <tr class="top">
        <td colspan="2">
          <table>
            <tr>
              <td class="title">
                <img src="./assets/images/msjd.png" alt="" style="width: 100px; height: 100px;">
              </td>

              <td>

                <h1>Masjid Jami Assalam</h1>
                Jl. Sapan-Majalaya Bojongrangkas RT.03/RW.12 Rancakasumba<br />
                Solokanjeruk Kab. Bandung<br />
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <br>
    <br>
    <h3>Tabel kas pemasukan</h3>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Tanggal</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>xxxxxx</td>
          <td>xxxxxx</td>
          <td>xxxxxx</td>
      </tbody>
    </table>

    <!-- <tr class="information">
        <td colspan="2">
          <table>
            <tr>
              <td>
                Sparksuite, Inc.<br />
                12345 Sunny Road<br />
                Sunnyville, CA 12345
              </td>

              <td>
                Acme Corp.<br />
                John Doe<br />
                john@example.com
              </td>
            </tr>
          </table>
        </td>
      </tr> -->

    <!-- <tr class="heading">
        <td>Payment Method</td>

        <td>Check #</td>
      </tr>

      <tr class="details">
        <td>Check</td>

        <td>1000</td>
      </tr> -->
    <!-- <tr>
      <td>
        <h2>Pemasukan Kas</h2>
      </td>
    </tr>



    <tr class="heading">
      <td>Item</td>

      <td>Price</td>
    </tr>

    <tr class="item">
      <td>Website design</td>

      <td>$300.00</td>
    </tr>

    <tr class="item">
      <td>Hosting (3 months)</td>

      <td>$75.00</td>
    </tr>

    <tr class="item last">
      <td>Domain name (1 year)</td>

      <td>$10.00</td>
    </tr>

    <tr class="total">
      <td></td>

      <td>Total: $385.00</td>
    </tr> -->
  </div>
</body>

</html>