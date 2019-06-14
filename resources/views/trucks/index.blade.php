@extends('layouts.default')
@section('content')
    <p style="text-align: center">
        <a class="btn btn-success" href="/manage/create">Add truck</a>
        &nbsp;
        <a class="btn btn-secondary" href="/manage/states">Manage state truck</a>
        &nbsp;
        <a class="btn btn-secondary" href="/manage/riders">Manage Riders</a>
        &nbsp;
        <a class="btn btn-secondary" href="/manage/types">Manage type truck</a>
        &nbsp;
    </p>
    <table class="table">
        <thead>
        <th scope="col">#</th>
        <th scope="col">Truck</th>
        <th scope="col">Type</th>
        <th scope="col">State</th>
        <th scope="col">Rider</th>
        <th scope="col">Action</th>
        </thead>

        @foreach($allTruck as $truck)
            <tr>
                <td>{{$truck->id}}</td>
                <td>{{$truck->name}}</td>
                <td>{{$truck->type->val}}</td>
                <td>{{$truck->state->val_state}}</td>
                <td>{{$truck->rider->fio}}</td>

                <td>
                    <a href="/manage/{{$truck->id}}/edit">Edit</a>
                    &nbsp;
                    <form action="/manage/{{$truck->id}}" method="post" style="display: inline;">
                    @method('DELETE')
                    @csrf <!-- {{ csrf_field() }} -->
                        <button class="btn btn-link">Remove</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection