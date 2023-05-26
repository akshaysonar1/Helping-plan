@extends('layouts.master')
@section('content')

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">HELP SWITCH ON/OFF</h6>
            </div>
            <!-- DataTales Example -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                 <th>ID </th>
                                <th>Joinig Date </th>
                                <th>Unique No </th>
                                <th>Bank Name</th>
                                <th>Mobile No. </th>
                                <th>Id Switch On/Off </th>

                            </tr>
                        </thead>

                        <tbody>
                            @php
                            $i = 1;
                        @endphp
                            @if (isset($data) && !empty($data))
                            @foreach ($data as $list)
                            
                            <tr>
                                <td>{{ $i }}</td>
                            
                                <td>{{ $list->created_at }}</td>
                                <td>{{ $list->customer_id }}</td>
                                <td>{{ $list->bank_name }}</td>
                                <td>{{ $list->mobile }}</td>

                                <td>
                                    @if ($list->pin_status == '0')
                                    <button class="btn btn-success btn-circle"
                                        onclick="sweetAlertAjax('get','{{ route('status', $list->pin_number) }}', 'Are you sure you want to Deactivate user?')"></button>
                                    @else
                                    <button class="btn btn-danger btn-circle"
                                        onclick="sweetAlertAjax('get','{{ route('status', $list->pin_number) }}', 'Are you sure you want to Activate user?')"></button>
                                    @endif
                                </td>
                                <!-- <td><button class="btn btn-success btn-circle"></button></td>
                                <td><button class="btn btn-danger btn-circle"></button></td> -->
                            </tr>
                            @php
                                        $i++;
                                    @endphp
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
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