{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Upload Documents</h1>
@stop

@section('content')
    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
       Document Title:
        <br />
        <input type="text" name="name" />
        <br /><br />
        File:
        <br />
        <input type="file" name="logo" />
        <br /><br />
        <input type="submit" value=" Save " />
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@stop

@section('js')

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@stop