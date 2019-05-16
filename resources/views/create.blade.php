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
            <form action="store" method="POST" autocomplete="off">
            @csrf
                <div class="form-group">
                    <h3>Create New Notes</h3>
                </div>
                <div class="form-group">
                    <label for="title">Notes Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter your Notes title" />
                </div>
                <div class="form-group">
                    <label for="category">Notes Category</label><br>
                    <select name="category" id = "category" class="form-control">
                        <option value = "others">Others</option>
                        <option value = "personal">Personal</option>
                        <option value = "work">Work</option>
                        <option value = "entertainment">Entertainment</option>    
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Notes Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Notes description"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" value="save" class="btn btn-primary">Save</button>
                </div>
            </form>
                
        </div>
    </div>
</div>
@endsection