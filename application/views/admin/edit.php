<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h3 style="text-align:center">EDIT PESERTA</h3>
  </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
      <?php foreach ($peserta as $key){?>
      <form class="" action="<?php echo base_url('Admin/updatePeserta/'.$key['pin']);?>" method="post">
        <input type="hidden" name="_token" value=" csrf_token() ">
          <div class="form-group">
            <input type="text" name="pin" class="form-control" value="<?php echo $key['pin'] ?>" readonly>
          </div>
          <div class="form-group">
            <input type="text" name="name" class="form-control" value="<?php echo $key['name'] ?>" />
          </div>
          <div class="form-group">
             <input type="email" class="form-control" name="email" value="<?php echo $key['email'] ?>"/>
          </div>
          <div class="form-group">
            <input type="tel" name="telp" class="form-control" value="<?php echo $key['telp'] ?>" />
          </div>
           <div class="form-group">
             <label for="kategori" style="font-size:16px"><strong>Kategori</strong></label><br>
             <input type="radio" name="kategori" value="mhs"> Mahasiswa Udinus
             <input type="radio" name="kategori" value="umum"> Umum
          </div>
          <div class="form-group" id="nim" style="display:none">
            <input type="text" name="nim" class="form-control"value="<?php echo $key['nim'] ?>" hidden="true" />
          </div>
          <div class="form-group" id="progdi"  style="display:none">
            <input type="text" name="progdi" class="form-control" value="<?php echo $key['progdi'] ?>" hidden="true" />
          </div>
          <div class="form-group" id="alamat"  style="display:none">
            <input type="text" name="alamat" class="form-control" value="<?php echo $key['alamat'] ?>" hidden="true"/>
          </div>
           <div class="text-center">
             <input type="submit" name="Submit" value="Update" class="btn btn-lg btn-block btn-primary">
           </div>
        </form>
        <?php } ?>
      </div>
</div>
