@extends('layouts.layout')
@section('title') Login @endsection
@section('description') The login page. @endsection
@section('keywords') login, online @endsection

@section('content')
    <div style="height: 100vh;" class="d-flex align-items-center">
        <div style="max-width: 600px;" class="w-100 m-auto bg-white p-3 rounded ">
            <h1 class="h3 mt-3 mb-3 text-center text-black">Edit list</h1>
            <form  action=action="{{ route('editList', $list["id"]) }}" method="post">
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="mb-4 row">
                    <label class="col-sm-2 form-label" for="email">Title</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="title" id="title"  value="{{ $list["title"]}}">
                    </div>
                    {{--                {% if data['email_error'] %}--}}
                    {{--                <p class="danger text-danger">{{ data['email_error']}}</p>--}}
                    {{--                {% endif %}--}}
                </div>
                <div class="mb-4 row">
                    <label class="col-sm-2 form-label" for="email">Description</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="description" id="description"  value="{{ $list["description"] }}">
                    </div>
                    {{--                {% if data['email_error'] %}--}}
                    {{--                <p class="danger text-danger">{{ data['email_error']}}</p>--}}
                    {{--                {% endif %}--}}
                </div>

                <div class="mb-4 row">
                    <label class="col-sm-2 form-label" for="email">Date</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="date" name="date" id="date" value="{{ $list["date"] }}">
                    </div>
                    {{--                {% if data['email_error'] %}--}}
                    {{--                <p class="danger text-danger">{{ data['email_error']}}</p>--}}
                    {{--                {% endif %}--}}
                </div>

                <div class="mt-3">
                    <input class="btn btn-lg btn-dark w-100" type="submit" value="Edit>
                    {{--                <button type="button">Sing in</button>--}}
                </div>
            </form>
        </div>
    </div>
@endsection
