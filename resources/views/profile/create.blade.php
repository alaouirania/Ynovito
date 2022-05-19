
@extends('layouts.app')
@section('content')
<style>
    
    .justify-content-center{
        margin-top: 30px;
        box-shadow: 5px 7px #628272 ;
        border-radius: 5px;
        
    }
    .card-body{
        color: #21574a;
    }
    .card-header{
        text-align: left;
        font-weight: bold;
        color: #21574a;
        font-size: 25px;
    }
    .float-right a{
        box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #21574a;
        color: #fff;
        font-weight: 300;
        border: 1px solid #21574a;
        float: right;
        padding: 5px 10px 5px 10px;
    }
    .float-right a:hover{
        background-color: #628272;
        border: 1px solid #628272;
    }
    button{
        margin-top: 20px;
        margin-left: 535px;
    }
    .btn{
        box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #21574a;
        border: 1px solid #21574a;
        padding: 5px 50px 5px 50px;
    }
    .btn:hover{
        background-color: #628272;
        border: 1px solid #628272;
    }
    

</style>
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Create post
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('profile.index') }}">Posts</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::open(array('route' => 'profile.store', 'method'=>'POST')) !!}
                    <div class="form-group">
                        <strong>Title:</strong>
                        {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Body:</strong>
                        {!! Form::textarea('body', null, array('placeholder' => 'Body','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Description:</strong>
                        {!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Price:</strong>
                        {!! Form::text('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                            <label><strong>Category :</strong></label><br>
                            <select name="category" id="category">
                                <option value="IT and electrics">IT and electrics</option>
                                <option value="Vehicles">Vehicles</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Clothing and well-being">Clothing and well-being</option>
                                <option value="Hobbies and entertainment">Hobbies and entertainment</option>
                            </select>
                           </div>
                    <div class="form-group">
                        <strong>Image: <br></strong>
                        {!! Form::file('image', null, array('placeholder' => ' Choose File','class' => 'form-control', 'multiple', 'accept'=>"image/*")) !!}
                    </div>
                    <div class="form-group">
                        <strong>Location:</strong>
                        {!! Form::text('location', null, array('placeholder' => 'Location','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Brand:</strong>
                        {!! Form::text('brand', null, array('placeholder' => 'Brand','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <label><strong>State :</strong></label><br>
                        <select name="state" id="state">
                            <option value="New">New</option>
                            <option value="Almost New">Almost New</option>
                            <option value="Normal">Normal</option>
                            <option value="Old/Obsolete">Old/Obsolete</option>
                        </select>
                    </div>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection