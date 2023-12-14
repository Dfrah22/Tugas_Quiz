@extends('layouts.app')
@section('content')

<h2>Golongan</h2>

<a href="{{ url('golongan/create') }}" class="btn btn-primary mb-3 float-end">Add Golongan</a>

<table class="table table-striped">
      <tr>
            <th style="background-color: #A0E9FF;">NO</th>
            <th style="background-color: #A0E9FF;">KODE</th>
            <th style="background-color: #A0E9FF;">NAMA</th>
            <th style="background-color: #A0E9FF;">EDIT</th>
            <th style="background-color: #A0E9FF;">DELETE</th>
      </tr>

      @foreach ($rows as $row)
      <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a href="{{ url('golongan/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
            <td>
                  <form action="{{ url('golongan/' . $row->id) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                  </form>
            </td>
      </tr>
      @endforeach

</table>

@endsection