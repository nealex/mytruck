@extends('layouts.default')
@section('content')
    <p class="breadcrumb"><a href="/" class="breadcrumb-item">Home</a>
        <a href="/manage" class="breadcrumb-item">Go to trucks</a>
        <a href="/manage/states" class="breadcrumb-item">States list</a>
    </p>
    <div style="width: 100%; max-width: 1024px; margin: 0 auto">
        <form action="/manage/states/{{$state->id}}" method="post" class="input-group mb-3">
        @method('PUT')
        @csrf <!-- {{ csrf_field() }} -->
            <input lass="form-control" placeholder="Enter new state type..." type="text" value="{{$state->val_state}}"
                   name="val_state" style="width: 500px;">
            <button style="display: inline-block" type="submit" class="btn btn-success">Save change</button>
        </form>
    </div>
@endsection