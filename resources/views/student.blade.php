<!-- resources/views/home.blade.php -->



@extends('layout.layout')

@section('title', 'Student')

@section('content')

    <table class="table table-container table-striped">
        <thead>
            <tr>
                <th scope="col">Student ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($student as $stud)
                <tr>
                    <td>{{ $stud->student_id }}</td>
                    <td>{{ $stud->first_name }}</td>
                    <td>{{ $stud->middle_name }}</td>
                    <td>{{ $stud->last_name }}</td>
                    <td>{{ $stud->email_address }}</td>
                    <td>{{ $stud->address }}</td>
                    <td>{{ $stud->phone_number }}</td>
                    <td>{{ $stud->created_at }}</td>
                    <td>{{ $stud->updated_at }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
