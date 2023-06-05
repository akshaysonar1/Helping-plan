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
            gap: 10px;
            padding: 20px;
            margin: 0 4px 0;
            border-radius: 5px;
            border: 1px solid #e3e6f0;
            background: #fff;
        }

        .pad-bg .btn {
            height: fit-content;
        }

        .pad-bg label {
            margin-bottom: 0;
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
        /* button {
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
        } */
        button {
       width: auto;
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
       margin-bottom: 10px;
   }
        
        .button-res .dt-button{
            width:auto !important;
            padding: 12px 8px !important;


        }
        @media(max-width:767px){

            .button-res .dt-buttons{
                display:flex;
                justify-content:center;
                gap:8px;
                flex-direction:row;
                margin-bottom:20px
                }
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
                <div class="">
                    <div class="card-body">

                        <form action="{{ route('pinhistory') }}" method="get" class='pad-bg shadow'>
                            <div class="row align-items-end">
                                <div class="col-xl-4">
                                   <b> <label for="exampleInputPassword1">Pin Amount</label></b>
                                    <div class="form-group form-control">
                                        
                                        <div class="d-flex" style="gap: 5px;">
                                            <input id="name" type="radio" name="currency" value="500" {{ request()->input('currency') ==
                                            '500' ? 'checked' : '' }} autocomplete="name" autofocus> <span class="form-group mb-0 mr-2">500</span>
                                            <input id="name" type="radio" name="currency" value="1000" {{ request()->input('currency')
                                            == '1000' ? 'checked' : '' }} autocomplete="name" autofocus> <span class="form-group mb-0 mr-2">1000</span>
                                            <input id="name" type="radio" name="currency" value="2000" {{ request()->input('currency')
                                            == '2000' ? 'checked' : '' }} autocomplete="name" autofocus> <span class="form-group mb-0 mr-2">2000</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-4">
                                    <div class="form-group">
                                    <b><label for="exampleInputPassword1">From</label></b>
                                        <input id="start_date" class="form-control" type="date" name="start_date" value="" autocomplete="name" autofocus>
                                    </div>
                                </div>
                                
                                
                                <div class="col-xl-4">
                                    <div class="form-group">
                                        <b><label for="exampleInputPassword1">To</label></b>
                                        <input id="pin_sale_date" class="form-control" type="date" name="end_date" value="" autocomplete="name" autofocus>
                                    </div>
                                </div>
                                
                                <div class="col-xl-3">
                                   
                                   
                                   
                                    <div class="form-group d-flex " style="gap: 6px !important;">
                                       
                                        <div class="">
                                        <button type="submit" class="btn btn-primary w-auto px-4 mt-0">Search</button>
                                    </div>
                                        <div class="">
                                        <a href="{{ route('pinhistory') }}" class="btn btn-primary w-auto px-4">Clear</a>
                                    </div>
                                         
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Used for the data  -->

                <div class="container-fluid">

                    <!-- Page Heading -->
                    {{-- <h1 class="h3 mb-2 text-gray-800">Pin History Data</h1> --}}
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive button-res">
                                <table class="table table-bordered" id="pinHistoryTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Genrated Date </th>
                                            <th> Pin</th>
                                            <th> Pin Amount </th>
                                            <th> User Person ID </th>
                                            <th> Name </th>
                                            <th> Mobile NO </th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @if (isset($data) && !empty($data))
                                        @foreach ($data as $row)
                                        @if ($row->pin_status == '0')
                                        <tr>

                                            <td>{{ $row->pin_sale_date }}</td>
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
@endsection
@section('custom-js')
<script>
$(document).ready(function() {
    $('#pinHistoryTable').DataTable( {
        dom: 'lBfrtip',
        // Bfrtip
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print',
        ]
    } );
} );
</script>
@endsection