
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add New File {{$id}}</h1>
@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <style type="text/css">
        #myTable_wrapper {
            background-color: white;
            padding:10px;
        }
    </style>
@stop

@section('js')

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@stop