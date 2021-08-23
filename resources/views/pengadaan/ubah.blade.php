<!-- Modal -->
<div class="modal fade" id="ubahModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pengadaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/ubahPengadaan" method="post" role="form" enctype="multipart/form-data">
        {{csrf_field()}}
          <input type="hidden" name="id_pengadaan" id="id_pengadaan" class="id_pengadaan">
      <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputNama">Nama Pengadaan</label>
              <input type="text" class="form-control nama_pengadaan" id="u_nama_pengadaan" name="u_nama_pengadaan" placeholder="Masukkan Nama Pengadaan" >
            </div> 
            <div class="form-group">
              <label for="exampleInputdeskripsi">Deskripsi</label>
              <textarea class="form-control deskripsi" rows="3" id="u_deskripsi" name="u_deskripsi" placeholder="Masukkan Deskripsi Pengadan" ></textarea>
            </div>
           
            <div class="form-group">
              <label>Anggaran: <input type="" class="labelRp" disabled style="border:none; background-color: white, color: black;"></label>
              <input type="text" class="form-control anggaran" id="u_anggaran" name="u_anggaran" placeholder="Masukkan Anggaran" onkeyup="currency2()">
            </div>
          </div>
          <!-- /.card-body -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
</div>