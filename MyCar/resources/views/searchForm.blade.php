@extends('layouts.app')

@section('content')
    <div class="search-layout">
        <h1> Search form </h1>

        {!! Form::open(['action' => 'App\Http\Controllers\SearchController@show', 'method' => 'GET']) !!}
        
            {{Form::label('model:')}}
            {{Form::text('model', '', ['placeholder' => 'Model'])}}<br>
            <br>
            {{Form::label('condition:')}}
            {{Form::text('condition', '', ['placeholder' => 'Condition'])}}<br>
            <br>
            {{Form::label('mileage:')}}
            {{Form::text('mileage', '', ['placeholder' => 'Mileage'])}}<br>
            <br>
            {{Form::label('category:')}}
            {{Form::text('category', '', ['placeholder' => 'Category'])}}<br>
            <br>
            {{Form::label('price:')}}
            {{Form::number('price', '', ['placeholder' => 'Price'])}}<br>
            <br>
            {{Form::submit('search')}}
        {!! Form::close() !!}
    </div>
@endsection

