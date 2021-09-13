@extends('layouts.app')

@section('content')
    <h1> Search form </h1>

    {!! Form::open(['action' => 'App\Http\Controllers\SearchController@show', 'method' => 'GET']) !!}
    
        {{Form::label('model:')}}
        {{Form::text('model', '', ['placeholder' => 'Model'])}}<br>

        {{Form::label('age:')}}
        {{Form::text('age', '', ['placeholder' => 'Age'])}}<br>

        {{Form::label('condition:')}}
        {{Form::text('condition', '', ['placeholder' => 'Condition'])}}<br>

        {{Form::label('mileage:')}}
        {{Form::text('mileage', '', ['placeholder' => 'Mileage'])}}<br>

        {{Form::label('category:')}}
        {{Form::text('category', '', ['placeholder' => 'Category'])}}<br>

        {{Form::label('price:')}}
        {{Form::text('price', '', ['placeholder' => 'Price'])}}<br>
        
        {{Form::submit('search')}}
    {!! Form::close() !!}
@endsection

