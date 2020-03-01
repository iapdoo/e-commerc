@extends('layouts.app')
@section('customCSS')
@endsection

@section('content')
    <div class="demo">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($users as $user)
               <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
               @endforeach

        </table>
    </div>

@endsection
