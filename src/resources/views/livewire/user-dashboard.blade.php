@extends('layouts.app')
<div class="container mt-3">
  <div class="row">
    <div class="col col-lg-2">
        <select wire:model="paginationCount" class="form-select" aria-label="Default select example">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>
    <div class="col col-lg-2">
        <button wire:click="resetSortUsersByName('desc')">Sort by Name</button>
    </div>
  </div>
<div>
<div class="container mt-3">
  <div class="row">    
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Id</th>
          <th class="col-xs-1" data-field="Name" data-sortable="true">Name</th>
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
          <td>{{ $user->date_created_at_for_humans }}</td>
          <td>{{ $user->date_updated_at_for_humans }}</td>
        </tr>
        @endforeach   
      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="row justify-content-md-center">
        {{ $users->links() }}
    </div>
  </div>
</div>
