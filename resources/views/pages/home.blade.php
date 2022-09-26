@extends('layouts.layout')
@section('title') Login @endsection
@section('description') The login page. @endsection
@section('keywords') login, online @endsection

@section('content')
    <div> <table class="table">
        <thead class="thead-dark">
        <div id="create"><form><input type="submit" method="delete"></form><a type="submit" href="/createListForm">Create list</a></div>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
    @foreach($lists as $list)
                        <tr>
                            <td>{{ $list["title"] }}</td>
                            <td>{{ $list["description"] }}</td>
                            <td>{{ $list["date"] }}</td>
                            <td><form action="{{ route('editListForm', $list["id"]) }}" method="GET">
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-pencil"></i></button></form><td>
                            <td><form action="{{ route('deleteList', $list["id"]) }}" method="POST">@method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></form></td>
                        </tr>
                    @endforeach
        </tbody>
        </table>
       <div width="100px">{{ $lists->links() }}</div>
    </div>

@endsection
