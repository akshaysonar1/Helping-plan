@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Genrated Pin</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>Joinig Date </th>
                            <th>Id NO </th>
                            <th>Name</th>
                            <th>Mobile No. </th>
                            <th>Id Switch On/Off </th>

                        </tr>
                    </thead>

                    <tbody>
                        @if(isset($data) && !empty($data))
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->created_at}}</td>
                            <td>{{$list->customer_id}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->mobile}}</td>

                            <td>
                                @if ($list->status == '1')
                                <button class="btn btn-success btn-circle" onclick="sweetAlertAjax('get','{{ route('status', $list->id) }}', 'Are you sure you want to Deactivate user?')"></button>
                                @else
                                <button class="btn btn-danger btn-circle" onclick="sweetAlertAjax('get','{{ route('status', $list->id) }}', 'Are you sure you want to Activate user?')"></button>
                                @endif
                            </td>
                            <!-- <td><button class="btn btn-success btn-circle"></button></td>
                            <td><button class="btn btn-danger btn-circle"></button></td> -->
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
@section('custom-js')
<script>
    function sweetAlertAjax(type, url, title) {
        swal({
            title: title,
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: url,
                    type: type,
                    data: {
                        "_token": $("#csrf-token").val(),
                    },
                    success: function(response) {
                        swal({
                            text: response.message,
                            icon: "success",
                            button: "Ok",
                        }).then(function() {
                            location.reload();
                        });
                    }
                });
            }
        });
    }
</script>
@endsection