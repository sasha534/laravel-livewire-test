@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">    
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Email Verified</th>
          <th>Created date</th>
          <th>Updated date</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
        <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Email Verified</th>
          <th>Created date</th>
          <th>Updated date</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->email_verified_at }}</td>
          <td>{{ $user->created_at }}</td>
          <td>{{ $user->updated_at }}</td>
        </tr>
        @endforeach   
      </tbody>
    </table>
  </div>
</div>
@endsection