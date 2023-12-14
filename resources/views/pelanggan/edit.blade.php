@extends('layouts.app')

@section('content')
<h2>Edit Pelanggan</h2>

<form action="{{ url('pelanggan/' . $row->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        <label for="">NO</label>
        <input type="text" name="pel_no" id="" class="form-control" value="{{ $row->pel_no }}">
    </div>
    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="pel_nama" id="" class="form-control" value="{{ $row->pel_nama }}">
    </div>
    <div class="mb-3">
        <label for="">ALAMAT</label>
        <input type="text" name="pel_alamat" id="" class="form-control" value="{{ $row->pel_alamat }}">
    </div>
    <div class="mb-3">
        <label for="">HP</label>
        <input type="text" name="pel_hp" id="" class="form-control" value="{{ $row->pel_hp }}">
    </div>
    <div class="mb-3">
        <label for="">KTP</label>
        <input type="text" name="pel_ktp" id="" class="form-control" value="{{ $row->pel_ktp }}">
    </div>
    <div class="mb-3">
        <label for="">SERI</label>
        <input type="text" name="pel_seri" id="" class="form-control" value="{{ $row->pel_seri }}">
    </div>
    <div class="mb-3">
        <label for="">METERAN</label>
        <input type="text" name="pel_meteran" id="" class="form-control" value="{{ $row->pel_meteran }}">
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
            @foreach ($golongans as $golongan)
            <option value="{{ $golongan->id }}" {{ $golongan->id == $row->golongan->id ? 'selected' : '' }}>
                {{ $golongan->gol_nama }}
            </option>
            @endforeach
        </select>

    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>
@endsection