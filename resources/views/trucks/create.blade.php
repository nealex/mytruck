@extends('layouts.default')
@section('content')
    <p class="breadcrumb"><a href="/" class="breadcrumb-item">Home</a>
        <a href="/manage" class="breadcrumb-item">Go to trucks</a>
        <span class="breadcrumb-item">Add new Truck</span>
    </p>
    <div style="width: 100%; max-width: 1024px; margin: 0 auto">
        <form action="/manage" method="post">
        @csrf <!-- {{ csrf_field() }} -->
            <input lass="form-control" placeholder="Name truck" type="text" value=""
                   name="name_truck" style="width: 500px;">
            <br><br>
            <select class="custom-select" style="width: 500px;" name="rider">
                @foreach($riders as $rider)
                    <option value="{{$rider->id}}">{{$rider->fio}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <select class="custom-select" style="width: 500px;" name="type_truck">
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->val}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <select class="custom-select" style="width: 500px;" name="state_truck">
                @foreach($states as $state)
                    <option value="{{$state->id}}">{{$state->val_state}}</option>
                @endforeach
            </select>

            <br>
            <br>
            <button type="submit" class="btn btn-success">Add new truck</button>
        </form>
    </div>
@endsection