@extends('layouts.app')

@section('content')
    <div class="layout-addNewCar">
    <div class="col-lg-9">
        <div class="card">
                <div class="card-header"> {{ __('Add new car')}} </div>
                <div class="card-body">

                    @if($errors->any())
                        @foreach($errors->all as $error)
                            {{$error}}
                        @endforeach
                    @endif
                    {!! Form::open(['action' => 'App\Http\Controllers\VehicleController@store', 'method' => 'POST']) !!}
                        {{Form::label('model:')}}
                        {{Form::text('model', '', ['placeholder' => 'Model'])}}
                        <br>
                        <br>
                        {{Form::label('mileage:')}}
                        {{Form::text('mileage', '', ['placeholder' => 'Mileage'])}}
                        <br>
                        <br>
                        {{Form::label('color:')}}
                        {{Form::text('color', '', ['placeholder' => 'Color'])}}
                        <br>
                        <br>

                        <!-- ENUM -->
                        {{Form::label('condition:')}}
                        {{Form::text('condition', '', ['placeholder' => 'Condition'])}}
                        <br>
                        <br>

                        <!-- ENUM -->
                        {{Form::label('category:')}}
                        {{Form::text('category', '', ['placeholder' => 'Category'])}}
                        <br>
                        <br>

                        <!-- ENUM -->
                        {{Form::label('fuel_type:')}}
                        {{Form::text('fuel_type', '', ['placeholder' => 'Fuel_type'])}}
                        <br>
                        <br>

                        <!-- ENUM -->
                        {{Form::label('type:')}}
                        {{Form::text('type', '', ['placeholder' => 'Type'])}}
                        <br>
                        <br>

                        {{Form::label('kteo:')}}
                        {{Form::date('kteo', '', ['placeholder' => 'Kteo'])}}
                        <br>
                        <br>

                        {{Form::label('year:')}}
                        {{Form::date('year', '', ['placeholder' => 'Year'])}}
                        <br>
                        <br>

                        {{Form::label('engine:')}}
                        {{Form::number('engine', '', ['placeholder' => 'Engine'])}} <b>cc</b>
                        <br>
                        <br>

                        {{Form::label('doors:')}}
                        {{Form::number('doors', '', ['placeholder' => 'Doors'])}}
                        <br>
                        <br>

                        {{Form::label('seats:')}}
                        {{Form::number('seats', '', ['placeholder' => 'Seats'])}}
                        <br>
                        <br>

                        {{Form::label('price:')}}
                        {{Form::number('price', '', ['placeholder' => 'Price'])}}
                        <br>
                        <br>
                        {{Form::submit('submit')}}
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection