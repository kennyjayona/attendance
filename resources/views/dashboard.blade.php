@extends('layouts.app')

@section('title', 'Dashboard - Laravel Admin Panel With Login and Registration')

@section('contents')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Users</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>johndoe@example.com</td>
                                <td>User</td>
                                <td>08:00 AM</td>
                                <td>05:00 PM</td>
                                <td>
                                    <!-- Edit and Delete buttons for John Doe -->
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Kenny</td>
                                <td>kenny@gmail.com</td>
                                <td>Admin</td>
                                <td>07:30 AM</td>
                                <td>04:30 PM</td>
                                <td>
                                    <!-- Edit and Delete buttons for Kenny -->
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Frelzy</td>
                                <td>frelzy@gmail.com</td>
                                <td>User</td>
                                <td>09:00 AM</td>
                                <td>06:00 PM</td>
                                <td>
                                    <!-- Edit and Delete buttons for Frelzy -->
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
