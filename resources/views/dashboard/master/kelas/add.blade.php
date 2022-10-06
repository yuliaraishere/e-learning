<div class="modal fade" id="addKelas" tabindex="-1" role="dialog" aria-labelledby="addKelasLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addKelasLabel">Add Kelas</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('pengajar/save') }}" class="needs-validation" novalidate="" method="POST">
          @csrf
          <div>
            <div class="col-md-12">
              <label class="form-label">NIP Pengajar</label>
              <input class="form-control @error('id_pengajar') is-invalid @enderror" type="text" name="id_pengajar" disabled>
              @error('id_pengajar')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          <div>
            <div class="col-md-12">
              <label class="form-label">Nama Pengajar</label>
              <input class="form-control @error('nm_pengajar') is-invalid @enderror" type="text" name="nm_pengajar">
              @error('nm_pengajar')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          <div>
            <div class="col-md-12">
              <label class="form-label">Waktu Pengajar Mulai </label>
              <input class="form-control @error('wkt_mulai') is-invalid @enderror" type="date" name="wkt_mulai">
              @error('wkt_mulai')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          <div>
            <div class="col-md-12">
              <label class="form-label">Waktu Pengajar Berakhir </label>
              <input class="form-control @error('wkt_akhir') is-invalid @enderror" type="date" name="wkt_akhir">
              @error('wkt_akhir')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="col">
              <div class="form-group m-t-15 m-checkbox-inline mb-0">
                <label class="form-label">Status</label>
                <label class="d-block" for="chk-ani1">
                  <input class="radio_animated" id="chk-ani1" type="radio" value="Active"
                    name="stts_kurikulum">Active
                </label>
                <label class="d-block" for="chk-ani2">
                  <input class="radio_animated" id="chk-ani2" type="radio" value="Non Active"
                    name="stts_kurikulum">Non Active
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
