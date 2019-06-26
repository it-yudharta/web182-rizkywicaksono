@extends('layouts.master')

@section('content')
      <h1>Edit data karyawan</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
                <div class="row">
                <div class="col-lg-12">
                
                        <form action="/karyawan/{{$karyawan->id}}/update" method="POST">
                    {{csrf_field()}}  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama karyawan</label>
                        <input name="nama_karyawan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Karyawan" value="{{$karyawan->nama_karyawan}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nik</label>
                        <input name="Nik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nik" value="{{$karyawan->Nik}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$karyawan->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Departemen</label>
                        <select name="Departemen" class="form-control" id="exampleFormControlSelect1">
                        <option value='produksi' @if($karyawan->Departemen == 'Produksi') selected @endif>Produksi</option>
                        <option value= 'maintenance'@if($karyawan->Departemen == 'maintenance') selected @endif>maintenance</option>
                        <option value= 'warehouse'@if($karyawan->Departemen == 'warehouse') selected @endif>warehouse</option>
                         <option value= 'SHE'@if($karyawan->Departemen == 'SHE') selected @endif>SHE</option>
                        </select>
                        </div>
                    
                        <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
            </div>
@endsection