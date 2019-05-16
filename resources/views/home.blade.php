@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="wrapper">
            <nav id="sidebar" class="navbar navbar-expand-lg navbar-dark">
                
                <ul class="list-unstyled components" style="margin-top:80px; margin-left:20px;font-size:25px;">

                    <li>
                        <a href="/create">Create</a>
                    </li><br>
                    <li>
                        <a href="/view">View</a>
                    </li>
                    
                </ul>
            </nav>
        </div>
        <div class="col-md-8" style="margin-left:60px;">
            <div>       
                <h3>View your Notes</h3>
            </div><br>
            <div>       
                <table class="table" >
                    <thead align="center">
                        <tr>
                            <th>Notes Id</th>
                            <th>Notes Title</th>
                            <th>Category</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        @foreach($notes as $note)
                            <tr>
                                <td>{{$note->id}}</td>
                                <td>{{$note->title}}</td>
                                <td>{{$note->category}}s</td>
                                <td>
                                    <a href="/show/{{$note->id}}">Show</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="/edit/{{$note->id}}">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a type="button" href="/delete/{{$note->id}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
