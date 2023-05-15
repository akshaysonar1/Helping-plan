@extends('layouts.master')
@section('content')

<head>
    <style>
        body,
        h1,
        h3,
        input {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #666;
        }


        .pad-bg {
            width: 86%;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: solid 1px #ccc;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
            background: #ebebeb;
        }

        button {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: none;
            background: #3b43d6;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
        }

        button:hover {
            background: #3b43d6;
        }
    </style>

</head>
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">PIN HISTORY</h6>
                </div>

                <div class="card-body">

                    <form action="{{ route('pinhistory') }}" method="get" class='pad-bg'>
                        <div class="form-group">
                            <input id="name" type="radio" name="currency" value="500" {{ request()->input('currency') ==
                            '500' ? 'checked' : '' }} autocomplete="name"
                            autofocus> <span class="form-group">500</span>
                            <input id="name" type="radio" name="currency" value="1000" {{ request()->input('currency')
                            == '1000' ? 'checked' : '' }} autocomplete="name"
                            autofocus> <span class="form-group">1000</span>
                            <input id="name" type="radio" name="currency" value="2000" {{ request()->input('currency')
                            == '2000' ? 'checked' : '' }} autocomplete="name"
                            autofocus> <span class="form-group">2000</span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Total</label>
                            <input id="total" type="text" name="total" value="" autocomplete="name" autofocus> <span
                                class="form-group"></span>
                        </div>

                        <div class="form-group">

                            <label for="exampleInputPassword1">From</label>
                            <input id="start_date" type="date" name="start_date" value="" autocomplete="name" autofocus>
                            <span class="form-group"></span>

                            <label for="exampleInputPassword1">To</label>
                            <input id="end_date" type="date" name="end_date" value="" autocomplete="name" autofocus>
                            <span class="form-group"></span>


                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pin</label>
                            <input id="pin" type="text" name="pin" value="" autocomplete="name" autofocus> <span
                                class="form-group"></span>
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                    <!-- Used for the data  -->

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Pin History</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Genrated Date </th>
                                                <th> Pin Detail </th>
                                                <th> Pin Amount </th>
                                                <th> User Person ID </th>
                                                <th> Name </th>
                                                <th> Mobile NO </th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @if (isset($data) && !empty($data))
                                            @foreach ($users as $row)
                                            @if ($row->pin_status == '0')
                                            <tr>
                                                <td>{{ $row->created_at }}</td>
                                                <td>{{ $row->pin_number }}</td>
                                                <td>{{ $row->pin_ammount }}</td>

                                                <td>{{ $row->customer_id }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->mobile }}</td>
                                            </tr>
                                            @else
                                            @endif
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end for data -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom.js')
<script>
    $(document).ready(function() {
            $('#dataTable').DataTable({
                dom: 'frtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
</script>
@endsection