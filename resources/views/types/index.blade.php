@extends('layouts.default')
@section('content')
    <p class="breadcrumb"><a href="/" class="breadcrumb-item">Home</a>
        <a href="/manage" class="breadcrumb-item">Go to trucks</a>
        <span class="breadcrumb-item">Type list</span>
    </p>
    <div style="width: 100%; max-width: 1024px; margin: 0 auto">
        <p style="text-align: center">
        <form method="post" action="/manage/types" class="input-group mb-3">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="text" style="max-width: 600px" class="form-control" placeholder="Enter new type truck..."
                   name="val">
            <div class="input-group-append">
                <button style="display: inline-block" type="submit" class="btn btn-success">Add type</button>
            </div>
        </form>
        </p>
    </div>
    <div style="width: 100%; max-width: 1024px; margin: 0 auto">
        <table class="table" style="width: 100%">
            <thead>
            <th scope="col">#</th>
            <th scope="col">Types truck</th>
            <th scope="col">Action</th>
            </thead>
            @foreach($allType as $type)
                <tr>
                    <td></td>
                    <td>{{$type->val}}</td>
                    <td>
                        <a href="/manage/types/{{$type->id}}/edit">Edit</a>
                        &nbsp;
                        <form action="/manage/types/{{$type->id}}" method="post" style="display: inline;">
                        @method('DELETE')
                        @csrf <!-- {{ csrf_field() }} -->
                            <button class="btn btn-link">Remove</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection