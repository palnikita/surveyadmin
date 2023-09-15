

@extends('home.header')  
<div class="container">
    <div class="container" style="margin-top:6rem; margin-left:1rem">
<form class="search-form d-flex align-items-center" method="GET" action="{{ route('display') }}">
        @csrf
        <input type="text" name="search" placeholder="Search by ID" title="Enter ID" value="{{ $search }}" style="width:23rem" >
        <button type="submit" title="Search" style="height:29px"><i class="bi bi-search"></i></button>
    </form>
    </div>
<h1 style="margin-top:5rem; margin-left:1rem">Form Data</h1>

    <table class="table" style=" width: 50rem;margin: 5rem 6rem;">
        <thead>
            <tr>
                <th>Date of Survey</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formData1 as $data)
                <tr>
                    <td>{{ $data->date_event }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->address }}</td>
                     <td><a href="show/{{$data->id}}" style="text-decoration:none"><button class="btn btn-success">View</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>


