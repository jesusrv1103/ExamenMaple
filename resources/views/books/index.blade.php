@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h3>Books

            </h3>
            <hr>

            <table id="books" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>category</th>
                        <th>Author</th>
                        <th>Realease date</th>
                        <th>Publish date</th>
                    </tr>
                </thead>

            </table>

            <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

            <!--js code here-->

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        var table = $('#books').DataTable({
                ajax: '',
                serverSide: true,
                processing: true,
                aaSorting:[[0,"desc"]],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'category', name: 'category'},
                    {data: 'author', name: 'author'},
                    {data: 'realease_date', name: 'realease_date'},
                    {data: 'publish_date', name: 'publish_date'},

                ]
            });


    })
</script>

@endsection
