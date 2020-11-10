@extends('layouts.app')
@section('content')


    <div class="container">
    <div class="row">
        <div class="col-lg-11">
            <h2>Laravel  Ajax CRUD Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="#" data-toggle="modal" data-target="#addModal">Add</a>
        </div>
    </div>

        <div class=" alert-add" >

        </div>

    <table class="table table-bordered" id="BookTable">
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Descriptionse</th>
            <th width="150px">Action</th>
        </tr>
        </thead>
        <tbody id="table_data">

            @foreach ($booklist as $reads)

                <tr id="{{ $reads->id }}">
                    <td>{{ $reads->id }}</td>
                    <td>{{ $reads->name }}</td>
                    <td>{{ $reads->descriptions }}</td>
                    <td>
                        <a data-id="{{ $reads->id }}" class="btn btn-primary btnEdit">Edit</a>
                        <a data-id="{{ $reads->id }}" class="btn btn-danger btnDelete">Delete</a>
                    </td>
                </tr>

            @endforeach




        </tbody>
    </table>

    {!! $booklist->render() !!}


    </div>
    @include('pop-up')

    @include('script')
@endsection
