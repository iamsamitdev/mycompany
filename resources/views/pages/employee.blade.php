<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.master_template')
@section('title') รายชื่อพนักงาน @endsection
@section('content')

<div class="jumbotron">
    <div class="container">
        <h2 class="display-3 head-title">รายชื่อพนักงาน</h2>
    </div>
</div>

<div class="container">

    <table class="table table-bordered">
        <thead>
            <tr class="bg-primary text-white">
                <th>ID</th>
                <th>Fullname</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Age</th>
                <th>Address</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $key => $emp)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $emp->fullname }}</td>
                    <td>{{ $emp->gender }}</td>
                    <td>{{ $emp->email }}</td>
                    <td>{{ $emp->tel }}</td>
                    <td>{{ $emp->age }}</td>
                    <td>{{ $emp->address }}</td>
                    <td>{{ $emp->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $employees->links() }}
</div>


@endsection