@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">State</h1>                   
</div>
<div class="row">
<div class="card mx-auto">
    <div>
        @if(session()->has('message'))
        <div class="alter alter-success">
            {{ session('message')}}
        </div>
        @endif
    </div>
    <div class="card-header">
        <div class="row">
            <div class="col">
                <form method="GET" action="{{ route('states.index')}}">
                    <div class="form-row align-items-center">
                        <div class="col">
                            <input type="search" name="search" class="form-control nb-2" id="inlineFormInput" placeholder="search">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary nb-2">Search</button>
                        </div>
                    </div>
                </form> 
            </div>
            <a href="{{ route('states.create')}}" class="float-right">Create</a>
        </div>
    </div>
    <div class="card-body">
    <table class="table">
        <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Country Code</th>
      <th scope="col">Email</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>
    @foreach($states as $state)
    <tr>
        <th scope="row">{{ $state->id }}</th>
        <td>{{ $state->country->country_code }}</td>
        <td>{{ $state->name }}</td>
        <td>
            <a href="{{ route('states.edit', $state->id) }}" class="btn btn-success">Edit</a>
        </td>
    </tr>
    @endforeach 
  </tbody>

</div>
</table>
    </div>
</div>
@endsection
