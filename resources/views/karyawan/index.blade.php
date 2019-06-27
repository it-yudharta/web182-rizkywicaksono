@extends('layouts.master')

@section('content')
      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
      @endif
          <div class="row">
          <div class="col-4">
          <h1>Data karyawan</h1>
          </div>
          
          <div class="col-6">
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
  Tambah data karyawan
</button>


          </div>
            
            <table class='table table-hover'>
                <tr>
                    <th>Nama karyawan</th>
                    <th>Nik</th>
                    <th>Alamat</th>
                    <th>Departemen</th> 
                        
                </tr>
                @foreach($data_karyawan as $karyawan)
                <tr>
                    <td>{{$karyawan->nama_karyawan}}</td>
                    <td>{{$karyawan->Nik}}</td>
                    <td>{{$karyawan->Alamat}}</td>
                    <td>{{$karyawan->Departemen}}</td>
                    <td>
                       <a href="/karyawan/{{$karyawan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                       <a href="/karyawan/{{$karyawan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('dihapus tenan ta ?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
          </div>
         </div>
    
    
     
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nambah jeneng karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/karyawan/create" method="POST">
            {{csrf_field()}}  
              <div class="form-group">
                  <label for="exampleInputEmail1">Nama Karyawan</label>
                  <input name="nama_karyawan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Karyawan">
              </div>


              <div class="form-group">
                  <label for="exampleInputEmail1">Nik</label>
                  <input name="Nik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nik">
              </div>


             
              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input name="Alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
              </div>

              <div class="form-group">
                  <label for="exampleFormControlSelect1">Pilih Departemen</label>
                  <select name="Departemen" class="form-control" id="exampleFormControlSelect1">
                  <option value='produksi'>Produksi</option>
                  <option value='maintenance'>maintenance</option>
                  <option value='warehouse'>warehouse</option>
                  <option value='SHE'>SHE</option>
                </select>
                </div>




</div>

    <button type="submit" class="btn btn-warning">Update</button>
</form>
</div>
</div>
@endsection