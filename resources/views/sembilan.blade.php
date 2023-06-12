<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Form Pemerikasaan Kesehatan</h1>
<form action="{{ url('hasilsembilan') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama</label> 
      <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="tgl_periksa" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
      <div class="col-8">
        <input id="tgl_periksa" name="tgl_periksa" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir/Usia</label> 
      <div class="col-8">
        <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Jenis Kelamin</label> 
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
          <label for="jk_0" class="custom-control-label">Laki-Laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
          <label for="jk_1" class="custom-control-label">Perempuan</label>
        </div>
      </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" value="Proses" class="btn btn-success">
        </div>
    </div>
</form>

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Jenis Tes</th>
        <th scope="col">Hasil Pemerikasaan</th>
        <th scope="col">Normal</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Tekanan darah</td>
        <td></td>
        <td>120/80 mmhg</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Asam urat</td>
        <td></td>
        <td>Pria : lebih kecil dari 7 mg/dl | Wanita : lebih kecil dari 6 mg/dl</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Kolesterol total</td>
        <td></td>
        <td>lebih kecil dari 200 mg/dl</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Gula darah</td>
        <td></td>
        <td>
            <p>Puasa: 70-110 mg/dl
            <p>2 jam setelah makan: 100-150 mg/dl
            <p>Sewaktu/acak : 70-125 mg/dl
        </td>
      </tr>
    </tbody>
  </table>