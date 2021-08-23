<!-- Modal -->
<div class="modal fade" id="ubahPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Password Suplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/ubahPasswordSup" method="post" role="form">
        {{csrf_field()}}
          <input type="hidden" name="id_suplier" id="id_suplier" class="id_suplier">
      <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="name">Password Lama</label>
              <input type="password" class="form-control" name="passwordlama" id="passwordlama" placeholder="Masukkan Password Lama" required>
            </div>
            <div class="form-group">
              <label for="name">Password Baru</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Baru" required>
            </div>
          </div>
          <!-- /.card-body -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>