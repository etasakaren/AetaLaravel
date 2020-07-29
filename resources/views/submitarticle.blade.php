@extends('layouts.app')

@section('content')
<div class = "col-md-8 col-lg-8">        
       <h1>Submit Article</h1>

{!! Form::open(['url' => 'submitarticle/submit']) !!}
    <div class="form-group">
        {{Form::label('author', 'Author')}}
        {{Form::text('author', '', ['class' => 'form-control'], ['placeholder' => 'Enter name'])}}
    </div>    
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control'], ['placeholder' => 'Enter title of the content'])}}
    </div>
        <div class="form-group">
        {{Form::label('contentarticle', 'Content')}}
        {{Form::textarea('contentarticle', '', ['class' => 'form-control'], ['placeholder' => 'Enter content for the article'])}}
    </div>
    <div>
        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
</div> 
@endsection