@extends('layout/main')

@section('title', 'Binus Data Mahasiswa - Dashboard')

@section('index')
<div class="container container-index">
    <div class="row text-center">
        <table class="table table-bordered m-5">
            <thead>
                <tr>
                    <th scope="row">No</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Place of birth</th>
                    <th>Date of birth</th>
                    <th>Image</th>
                    <th>Certificate</th>
                    <th>CV</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $students)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $students->fullname }}</td>
                        <td>{{ $students->gender }}</td>
                        <td>{{ $students->placeofbirth }}</td>
                        <td>{{ $students->dateofbirth }}</td>
                        <td>{{ $students->image }}</td>
                        <td>{{ $students->certificate }}</td>
                        <td>{{ $students->cv }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
