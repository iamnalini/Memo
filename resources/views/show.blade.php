@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="wrapper">
            <nav id="sidebar" class="navbar navbar-expand-lg navbar-dark">
                
                <ul class="list-unstyled components" style="margin-top:50px; margin-left:20px;font-size:25px;">
        
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
                    
                        @csrf
                        <div class="form-group">
                            <h3>View your selected Note</h3>
                        </div>
                        <div class="form-group">
                            <label for="title">Notes Title</label>
                            <input type="text" name="title" value="{{$note->title}}" id="title" class="form-control" readonly/>
                        </div>
                        <div class="form-group">
                            <label for="category">Notes Category</label><br>
                            <select id = "category" class="form-control" disabled>
                                <option value = "others">{{$note->category}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Notes Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" readonly>{{$note->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <a href="/view" class="btn btn-primary">Back</a>
                        </div>
        </div>
    </div>
</div>
@endsection