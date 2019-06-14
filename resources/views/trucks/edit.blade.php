@extends('layouts.default')
@section('content')
    <p class="breadcrumb"><a href="/" class="breadcrumb-item">Home</a>
        <a href="/manage" class="breadcrumb-item">Go to trucks</a>
        <span class="breadcrumb-item">Edit truck</span>
    </p>
    <div style="width: 100%; max-width: 500px; margin: 0 auto">
        <form action="/manage/{{$truck->id}}" method="post" class="input-group mb-3">
        @method('PUT')
        @csrf <!-- {{ csrf_field() }} -->
            <input lass="form-control" placeholder="Name truck" type="text"
                   name="name_truck" style="width: 500px; " value="{{$truck->name}}">
            <br><br>

            <select class="custom-select" style="width: 500px;" name="rider">
                @foreach($riders as $rider)
                    <option @if ($rider->id == $truck->rider->id) selected="selected" @endif value="{{$rider->id}}">{{$rider->fio}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <select class="custom-select" style="width: 500px;" name="type_truck">
                @foreach($types as $type)
                    <option @if ($type->id == $truck->type->id) selected="selected" @endif value="{{$type->id}}" value="{{$type->id}}">{{$type->val}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <select class="custom-select" style="width: 500px;" name="state_truck">
                @foreach($states as $state)
                    <option @if ($state->id == $truck->state->id) selected="selected" @endif value="{{$state->id}}" value="{{$state->id}}">{{$state->val_state}}</option>
                @endforeach
            </select>

            <br>
            <br>
            <button style="display: inline-block" type="submit" class="btn btn-success">Save change</button>
        </form>
    </div>
@endsection