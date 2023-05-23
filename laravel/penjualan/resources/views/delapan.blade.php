<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Form HTML pada PHP</h1>
<form action="{{ url('hasildelapan') }}" method="POST">
    {{ csrf_field() }}
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="lokasi" class="col-4 col-form-label">Lokasi</label> 
    <div class="col-8">
      <select id="lokasi" name="lokasi" class="custom-select">
        <option value="">Pilih Lokasi</option>
        <option value="Jakarta">Jakarta</option>
        <option value="Bogor">Bogor</option>
        <option value="Depok">Depok</option>
        <option value="Tangerang">Tangerang</option>
        <option value="Bekasi">Bekasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
          <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan"> 
          <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Skill</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="skill" id="skill_0" type="checkbox" class="custom-control-input" value="PHP"> 
          <label for="skill_0" class="custom-control-label">PHP</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="skill" id="skill_1" type="checkbox" class="custom-control-input" value="MySQL"> 
          <label for="skill_1" class="custom-control-label">MySQL</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="skill" id="skill_2" type="checkbox" class="custom-control-input" value="Javascript"> 
          <label for="skill_2" class="custom-control-label">Javascript</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="skill" id="skill_3" type="checkbox" class="custom-control-input" value="HTML"> 
          <label for="skill_3" class="custom-control-label">HTML</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="skill" id="skill_4" type="checkbox" class="custom-control-input" value="CSS"> 
          <label for="skill_4" class="custom-control-label">CSS</label>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
        <input type="submit" value="Proses" class="btn btn-success">
    </div>
  </div>
</form>