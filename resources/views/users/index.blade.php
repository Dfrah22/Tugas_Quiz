@extends('layouts.app')
@section('content')

<h2>Data Users</h2>
<br>

<table class="table table-striped text-center">
      <tr>
            <th style="background-color: #A0E9FF" ;>ID</th>
            <th style="background-color: #A0E9FF" ;>EMAIL</th>
            <th style="background-color: #A0E9FF" ;>PASSWORD</th>
      </tr>

      @foreach ($rows as $row)
      <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->password }}</td>
      </tr>
      @endforeach

</table>

@endsection