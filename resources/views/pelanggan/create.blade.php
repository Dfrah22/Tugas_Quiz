@extends('layouts.app')

@section('content')
<h2>Add Pelanggan</h2>

<form action="{{ url('pelanggan') }}" method="post">
    @csrf
    <input type="hidden" name="pel_id_user" value="{{ Auth::user()->id }}">
    <div class="mb-3">
        <label for="">NO</label>
        <input type="text" name="pel_no" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="pel_nama" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">ALAMAT</label>
        <input type="text" name="pel_alamat" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">HP</label>
        <input type="text" name="pel_hp" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">KTP</label>
        <input type="text" name="pel_ktp" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">SERI</label>
        <input type="text" name="pel_seri" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">METERAN</label>
        <input type="text" name="pel_meteran" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="aktif" class="form-label">Status <sup class="text-danger fw-bold">*</sup></label>
        <select name="pel_aktif" id="aktif" class="form-select">
            <option value="Y">Aktif</option>
            <option value="N">Tidak Aktif</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="golongan" class="form-label">Golongan Pelanggan <sup class="text-danger fw-bold">*</sup></label>
        <select name="pel_id_gol" id="gol" class="form-select">
            @foreach ($golongan as $row)
            <option value="{{ $row->id }}">{{ $row->gol_nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>
@endsection