@extends('layouts.master')



@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            button {
            width: 5%;
            padding: 8px;
            border-radius: 5px;
            border: none;
            background: #3b43d6;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df;
            margin-top: 20px;
        }
            </style>
    </head>

    <body>
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">CUSTOMER DETAILS</h6>
                    </div>

                    <div class="card-body p-6">
                        <table id="customerDetails" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr.no</th>
                                    <th>Date</th>
                                    <th>Unique No</th>
                                    <th>Name</th>
                                    <th>Mobile No.</th>
                                    <th>Provide Help</th>
                                    <th>Get Help</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($users as $row)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $row->created_at->todatestring() }}</td>
                                        <td>{{ $row->customer_id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->mobile }}</td>
                                        <td>{{ $row->provide_help_ammount }}</td>
                                        <td>{{ $row->get_help_ammount }}</td>
                                        <td>
                                            @if (empty($row->provide_help_ammount))
                                                <button type="button" class="btn btn-danger"
                                                    style="width:90px">empty</button>
                                        </td>
                                    @else
                                        @if ($row->ammount_Received == $row->get_help_ammount)
                                            <button type="button" class="btn btn-success" style="width:90px ">Done</button>
                                            </td>
                                        @else
                                            <button type="button"
                                                class="btn btn-warning"style="width:90px">Pending</button></td>
                                        @endif
                                @endif
                                </tr>
                                @php
                                    $i++;
                                @endphp
                                @endforeach

                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>

                    </div>
                    
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
@section('custom-js')

<script>
$(document).ready(function() {
    $('#customerDetails').DataTable( {
        dom: 'lBfrtip',
        // Bfrtip
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print',
        ]
    } );
} );
</script>

@endsection
