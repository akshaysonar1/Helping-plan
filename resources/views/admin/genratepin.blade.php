@extends('layouts.master')
@section('content')


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

    .btn1 {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: none;
        background: #3b43d6;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
    }

    .btn1:hover {
        background: #3b43d6;
    }

    label.error {
        color: red !important;
    }
</style>


<div class="container">
    @if (Session::has('message'))
    <p class="alert alert-info error">{{ Session::get('message') }}</p>
    @endif
    <div class="card o-hidden border-0 shadow-lg my-5">

        <div class="card-body p-0">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">PIN GENRATE</h6>
            </div>
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-7">
                    <div class="p-5">
                        <form class="form-group pad-bg" method="post" action="{{ route('genratepin.data') }}" id="genratePin">
                            @csrf
                            Select Price For Pin
                            <div class="form-group">
                                <input id="pin_ammount" type="radio" name="pin_ammount" value="500" autocomplete="name" > <span class="form-group">500</span>
                                <input id="pin_ammount" type="radio" name="pin_ammount" value="1000" autocomplete="name" > <span class="form-group">1000</span>
                                <input id="pin_ammount" type="radio" name="pin_ammount" value="2000" autocomplete="name" > <span class="form-group">2000</span>
                            </div>
                            <!-- <label id="pin_ammount-error" class="error fail-alert" for="pin_ammount"> -->

                            <div class="form-group form-text">
                                <label>Enter Total Pin </label><br>
                                <input type="text" class="form-control" name="total_pin" placeholder="Enter The pin" maxlength="1" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>


                            <br>
                            <button class="btn1" type="submit">Submit</button>
                            <!-- <div class="col-sm-6">
                             </div> -->
                    </div>
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="p-4">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Genrated Pin</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="short" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Genrate Date </th>
                                                <th>Pin Detail </th>
                                                <th>Pin Price </th>
                                                <th>Sending Detail </th>
                                                <th>Status </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($data) && !empty($data) )
                                            @foreach ($data as $list)
                                            <tr>
                                                <td>{{ $list->created_at }}</td>
                                                <td>{{ $list->pin_number }}</td>
                                                <td>{{ $list->pin_ammount }}</td>
                                                <td>{{ $list->updated_at }}</td>
                                                <td>
                                                    @if($list->sell_pin_status=='1')
                                                    <button type="button" class="btn btn-danger" style="width:100px" data-toggle="modal" data-id="{{ $list->id }}" data-pin_number="{{ $list->pin_number }} ">sold</button>
                                                    @else
                                                    <button type="button" class="btn btn-primary examps" data-toggle="modal" data-target="#exampleModal" data-id="{{ $list->id }}" data-pin_number="{{ $list->pin_number }}  " style="width:100px">sell</button>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.pinsale') }}" method="post" id="PinSellModel">
                    @csrf
                    @method('post')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Sale Pin </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="sale_name" id="sale_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mobile</label>
                            <input type="text" class="form-control" id="pin_number" name="sale_mobile" oninput="process(this)" maxlength="10">
                            <input type="hidden" class="form-control" id="id" name="id" value="">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sell
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
    @section('custom-js')
    <script>
        $(document).ready(function() {
            $('#total_pin').keyup(function() {
                if ($(this).val() > 10) {

                    alert("No numbers above 10");
                    $(this).val('10');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".examps").click(function() {
                var id = $(this).data('id');
                $("#id").val(id);

            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

        $(document).ready(function() {
            $('#short').DataTable({
                "aaSorting": [
                    [4, "asc"]
                ]
            });
        });



        // $(document).on('click', '.d', function() {
        //     alert(123)

        //     var id = $(this).data('id');
        //     var name = $(this).data('name');


        //     $('.id').val(id)
        //     $('.name').val(name)


        // });
    </script>
    
    <script>
        function process(input) {
            let value = input.value;
            let numbers = value.replace(/[^0-9]/g, "");
            input.value = numbers;
        }
    </script>

<script>
    $("document").ready(function() {
        setTimeout(function() {
            $(".error").remove();
        }, 5000); // 5 secs
    });
</script>
    <script>
        $(document).ready(function() {
            $("#genratePin").validate({
                errorClass: "error fail-alert",
                validClass: "valid success-alert",
                rules: {
                    pin_ammount: {
                        required: true,
                    },
                    total_pin: {
                        required: true,
                        maxlength: 1,
                    },
                },
                messages: {
                    pin_ammount: {
                        required: 'Please Enter Your Name',
                    },
                    total_pin: {
                        required: 'Please Enter To Genrate Pin',
                        maxlength: 'You Are Only Allow 0-9 Pins TO Genrate',
                    },

                }
            });
        });
    </script>
    <script>
        setTimeout(function() {
            $(".errors").remove();
        }, 5000); // 5 secs
    </script>



<script>
        $(document).ready(function() {
            $("#PinSellModel").validate({
                errorClass: "error fail-alert",
                validClass: "valid success-alert",
                rules: {
                    sale_name: {
                        required: true,
                    },
                    sale_mobile: {
                        required: true,
                        maxlength: 10,
                        minlength:10,
                    },
                },
                messages: {
                    sale_name: {
                        required: 'Please Enter The Name ',
                    },
                    sale_mobile: {
                        required: 'Please Enter Mobile NUmber',
                        maxlength: 'Please Enter A Valid Number',
                        minlength: 'Please Enter A Valid Number',
                    },

                }
            });
        });
    </script>

    @endsection