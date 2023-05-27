



@extends('layouts.admin')

@section('style')
<style>
   .table{
    width: 90%;
    margin: 0 auto;
   }
</style>
@endsection

@section('title')
Clients
@endsection


@section('content')
<div class="row mt-5">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">email</th>
            <th scope="col">created_at</th>
            <th scope="col">status</th>
            <th scope="col">operations</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clients as $client)
          <tr>
            <th scope="row">{{ $client->id }}</th>
            <td>{{ $client->email }}</td>
            <td>{{date('Y-m-j', strtotime($client->created_at))  }}</td>
            <td>{{ $client->is_admin ? "admin" : "client" }}</td>
            <td>
              <div class="actions">
                <a href="{{ route('adminclient',$client->id) }}" class="btn btn-icon btn-sm btn-primary">
                  <i class="bi bi-eye"></i></i>
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>


@endsection