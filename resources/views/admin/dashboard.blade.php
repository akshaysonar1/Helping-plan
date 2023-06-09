@extends('layouts.master')
@section('content')
<style>
    /* .btn2 {
        height: 35px;
        width: auto;
        margin-top: auto;
    } */
    label.error {
        color: red !important;
    }
    button {

        /* width: 5%; */
        padding: 8px 12px;

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
    .btn1 {

        /* width: 20%; */
        padding: 8px 12px;

        border-radius: 5px;
        border: none;
        background: #3b43d6;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        background-color: #4e73df;
        border-color: #4e73df;
        /* margin-top: 20px; */
        white-space: nowrap;
    }
    .btn-flex{
        display:flex;
        gap:10px;
        flex-wrap:wrap;

    }
    .link-btn{
        color: #fff !important;
        text-decoration: none !important;
        display: inline-block;
        text-align: center;
    }
    .btn-new{
        padding: 8px 12px !important;
        border-radius: 6px !important;
        background-color: #4e73df !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        color:#fff !important;
        height: fit-content !important;
        margin-top: 0px !important;

    }

    @media(max-width:767px){
        .dt-buttons{
            display:flex;
            justify-content:center;
            gap:8px;
            margin-bottom:20px;
        }
    }

    .radio-shadow:focus-visible{
       outline:none !important;
    }

    .session-error{
        background: #90EE90;
        color: rgb(0, 0, 0);
    }

    /* .btn-new{
        width: 30%;
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
    .btn-flex{

    }
</style>
<div class="container-fluid">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
            </div>
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-12">



                <div class="p-4">

                        @if (Session::has('message'))
                        <p class="alert alert-info session-error">{{ Session::get('message') }}</p>
                        @endif
                        <form class="form-group pad-bg" method="post" action="{{ route('home') }}" id="Dashboard">
                            @csrf
                            @method('POST')
                            <div class="form-group form-text">
                                <br><label style="font-weight: 900;">Note:-</label></br>
                                <textarea class="form-control" rows="5" name="note" id="note" placeholder="Enter The Note" id="numberInput" readonly> @if(isset($store->note) && !empty($store->note)){{$store->note}} @endif</textarea>
                                <input type="hidden" id="Noteid" name="Noteid" value="@if(isset($store->id) && !empty($store->id)){{$store->id}} @endif"><br>


                                <div class="btn-flex">
                                <button class="btn-new" type="submit">Submit</button>
                                <a href="#" class="btn-new " id="changeButton" onclick="makeInputReadOnly()">Change Note</a>
                                <!-- <div class="col-sm-6">
                                    </div> -->
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Today Genrated PIN</h6>
                </div>
                <div class="">
                    <div class="card-body">

                        {{-- <form action="{{ route('home.search') }}" method="get" class='pad-bg shadow'>

                            <div class="row align-items-end">
                                <div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto">
                                    <b> <label for="exampleInputPassword1">Pin Amount</label></b>
                                    <div class="form-group form-control">
                                        <div class="d-flex" style="gap: 5px;">
                                            <input id="name" type="radio" class="radio-shadow" name="currency" value="500" {{ request()->input('currency') ==
                                            '500' ? 'checked' : '' }} checked> <span class="form-group mb-0 mr-2">500</span>
                                            <input id="name" type="radio" class="radio-shadow" name="currency" value="1000" {{ request()->input('currency')
                                            == '1000' ? 'checked' : '' }} autocomplete="name" autofocus> <span class="form-group mb-0 mr-2">1000</span>
                                            <input id="name" type="radio" class="radio-shadow" name="currency" value="2000" {{ request()->input('currency')
                                            == '2000' ? 'checked' : '' }} autocomplete="name" autofocus> <span class="form-group mb-0 mr-2">2000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto">
                                    <div class="form-group">
                                        <b><label for="exampleInputPassword1">Total </label></b>
                                        <input id="total" type="text" name="total" value="" autocomplete="name" class="form-control" autofocus oninput="process(this)" maxlength="5"> <span class="form-group" ></span>
                                    </div>
                                </div>
                                <!-- <div class="col-auto ml-auto"> -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary w-auto px-4" style="margin-left:12px;">Search</button>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </form> --}}
                    </div>
                </div>
                <!-- Used for the data  -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    {{-- <h1 class="h3 mb-2 text-gray-800">Pin History Data</h1> --}}
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dashboardTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th> Pin Genrated Date </th>
                                            <th> Pin </th>
                                            <th> Pin Amount </th>
                                            <th> Pin Status </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($pinData) && !empty($pinData))
                                        @if (isset($pinData) && !empty($pinData))
                                        @foreach ($pinData as $list)
                                        <tr>
                                        <td>{{ $list->created_at }}</td>
                                            <td>{{ $list->pin_number }}</td>
                                            <td>{{ $list->pin_ammount }}</td>
                                            <td>@if(!empty($list->pin_sale_user_id) && $list->pin_status == 0) <p style="color: red"> PIN Used </p> @else <p style="color: rgb(29 149 29);"> PIN Not Used </p>@endif</td>
                                        </tr>
                                        @endforeach
                                        @endif

                                        
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
    $("document").ready(function() {
        setTimeout(function() {
            $(".session-error").remove();
        }, 5000); // 5 secs
    });
</script>
<script>
    $(document).ready(function() {
        $("#Dashboard").validate({
            errorClass: "error fail-alert",
            validClass: "valid success-alert",
            rules: {
                note: {
                    required: true,
                    maxlength: 200,
                },
            },
            messages: {
                note: {
                    required: 'Please Enter Your Notes',
                    maxlength: 'You Can Only Type 200 Words',
                },
            }
        });
    });
</script>
<script>
    function makeInputReadOnly() {
        var input = document.getElementById('note');
        input.readOnly = false;
    }
</script>
<!-- <script>
    $(document).ready(function() {
        $('#dashboardTable').DataTable({
            dom: 'lBfrtip',
            // Bfrtip
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print',
            ]
        });
    });
</script> -->
<script>
    function process(input) {
        let value = input.value;
        let numbers = value.replace(/[^0-9]/g, "");
        input.value = numbers;
    }
    function validateInput(input) {
        input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
    }
</script>
@endsection