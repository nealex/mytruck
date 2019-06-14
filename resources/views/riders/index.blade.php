@extends('layouts.default')
@section('content')
    <p class="breadcrumb"><a href="/" class="breadcrumb-item">Home</a>
        <a href="/manage" class="breadcrumb-item">Go to trucks</a>
        <span class="breadcrumb-item">Riders list</span>
    </p>
    <div style="width: 100%; max-width: 1024px; margin: 0 auto">
        <p style="text-align: center">
        <form method="post" action="/manage/riders" class="input-group mb-3">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="text" style="max-width: 600px" class="form-control" placeholder="Enter new riders name..."
                   name="fio">
            <div class="input-group-append">
                <button style="display: inline-block" type="submit" class="btn btn-success">Add Rider</button>
            </div>
        </form>
        </p>
    </div>
    <div style="width: 100%; max-width: 1024px; margin: 0 auto">
        <table class="table" style="width: 100%">
            <thead>
            <th scope="col">#</th>
            <th scope="col">Name rider</th>
            <th scope="col">Action</th>
            </thead>
            @foreach($allRiders as $rider)
                <tr>
                    <td></td>
                    <td>{{$rider->fio}}</td>
                    <td>
                        <a href="/manage/riders/{{$rider->id}}/edit">Edit</a>
                        &nbsp;
                        <form action="/manage/riders/{{$rider->id}}" method="post" style="display: inline;">
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