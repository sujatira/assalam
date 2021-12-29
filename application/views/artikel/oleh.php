<div class="card-body card-shadow container">
  <div class="card shadow" style="max-width: 900px ;">
    <h5 class="card-header text-white" style="background-color: darkslategray;">Detail akun penulis artikel</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
          <img src="<?= base_url('assets/images/profile/') . $userid->image; ?>" style="max-width: 300px; max-height: 200px;" class="bg-dark">
        </div>
        <div class=" col-md-4">
          <div class="card-body">
            <p class="font-weight-bolder"><?= $userid->nama ?></p>
            <p class="font-weight"><?= $userid->email ?></p>
            <p>Bergabung sejak : <?= date('d F Y', $userid->date_create)  ?></p>
            <p>Sebagai : <?= $userid->sebagai ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>