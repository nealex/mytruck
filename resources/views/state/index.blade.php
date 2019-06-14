@extends('layouts.default')
@section('content')
    <p class="breadcrumb"><a href="/" class="breadcrumb-item">Home</a>
        <a href="/manage" class="breadcrumb-item">Go to trucks</a>
        <span class="breadcrumb-item">State list</span>
    </p>
    <div style="width: 100%; max-width: 1024px; margin: 0 auto">
        <p style="text-align: center">
        <form method="post" action="/manage/states" class="input-group mb-3">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="text" style="max-width: 600px" class="form-control" placeholder="Enter new state truck..."
                   name="val_state">
            <div class="input-group-append">
                <button style="display: inline-block" type="submit" class="btn btn-success">Add State</button>
            </div>
        </form>
        </p>
    </div>
    <div style="width: 100%; max-width: 1024px; margin: 0 auto">
        <table class="table" style="width: 100%">
            <thead>
            <th scope="col">#</th>
            <th scope="col">Type State</th>
            <th scope="col">Action</th>
            </thead>
            @foreach($allState as $state)
                <tr>
                    <td></td>
                    <td>{{$state->val_state}}</td>
                    <td>
                        <a href="/manage/states/{{$state->id}}/edit">Edit</a>
                        &nbsp;
                        <form action="/manage/states/{{$state->id}}" method="post" style="display: inline;">
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