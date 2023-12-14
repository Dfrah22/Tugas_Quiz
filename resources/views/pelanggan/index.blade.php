@extends('layouts.app')
@section('content')

<h2>Pelanggan</h2>

<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3 float-end">Add Pelanggan</a>

<table class="table table-striped text-center">
      <tr>
            <th style="background-color: #A0E9FF;">NO</th>
            <th style="background-color: #A0E9FF;">KODE</th>
            <th style="background-color: #A0E9FF;">NAME</th>
            <th style="background-color: #A0E9FF;">ALAMAT</th>
            <th style="background-color: #A0E9FF;">HP</th>
            <th style="background-color: #A0E9FF;">KTP</th>
            <th style="background-color: #A0E9FF;">SERI</th>
            <th style="background-color: #A0E9FF;">METERAN</th>
            <th style="background-color: #A0E9FF;">STATUS</th>
            <th style="background-color: #A0E9FF;">Golongan Pelanggan</th>
            <th style="background-color: #A0E9FF;">EDIT</th>
            <th style="background-color: #A0E9FF;">DELETE</th>
      </tr>

      @foreach ($rows as $row)
      <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->pel_no }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_alamat }}</td>
            <td>{{ $row->pel_hp }}</td>
            <td>{{ $row->pel_ktp }}</td>
            <td>{{ $row->pel_seri }}</td>
            <td>{{ $row->pel_meteran }}</td>
            @if ($row->pel_aktif === 'Y')
            <td><span class="badge bg-success">Aktif</span></td>
            @else
            <td><span class="badge bg-danger">NonAktif</span></td>
            @endif
            <td>{{ $row->golongan['gol_nama'] }}</td>

            <td><a href="{{ url('pelanggan/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
            <td>
                  <form action="{{ url('pelanggan/' . $row->id) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                  </form>
            </td>
      </tr>
      @endforeach

</table>

@endsection