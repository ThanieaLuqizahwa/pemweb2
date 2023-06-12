@extends('admin.sepuluh.app')
@section('content')
    <h1>Test About Sepuluh</h1>
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
@endsection