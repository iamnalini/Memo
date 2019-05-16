@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="wrapper">
            <nav id="sidebar" class="navbar navbar-expand-lg navbar-dark">
            
                <ul class="list-unstyled components" style="margin-top:50px; font-size:25px;">

                    
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
                    
            <form action="{{URL::to('/')}}/cedit" method="post">
            @csrf
                <input type="hidden" name="id" value="{{$note->id}}" />
                <div class="form-group">
                    <h3>Update your Existing Notes</h3>
                </div>
                <div class="form-group">
                    <label for="notetitle">Notes Title</label>
                    <input value="{{$note->title}}" type="text" name="title" class="form-control" placeholder="Enter your Notes title" />
                </div>
                <div class="form-group">
                    <label for="notedesc">Notes Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Update your existing description">{{$note->description}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" value="update" class="btn btn-primary">Update</button>
                </div>
            </form>
                
        </div>
    </div>
</div>
@endsection