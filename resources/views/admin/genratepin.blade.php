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

    <div class="container">

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





                            <form class="form-group pad-bg" method="post" action="{{ route('genratepin.data') }}"
                                id="genratePin">

                                @csrf
                                Select Price For Pin
                                <div class="form-group">
                                    <input id="pin_ammount" type="radio" name="pin_ammount" value="500" required
                                        autocomplete="name" autofocus> <span class="form-group">500</span>
                                    <input id="pin_ammount" type="radio" name="pin_ammount" value="1000" required
                                        autocomplete="name" autofocus> <span class="form-group">1000</span>
                                    <input id="pin_ammount" type="radio" name="pin_ammount" value="2000" required
                                        autocomplete="name" autofocus> <span class="form-group">2000</span>
                                </div>

                                <label>Enter Total Pin </label><br>

                                <input type="text" class="form-control" name="total_pin" placeholder="Enter The pin ">


                                <br>
                                <button type="submit">Submit</button>
                                <div class="col-sm-6">




                                </div>
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
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Genrate Date </th>
                                                    <th>Pin Detail </th>
                                                    <th>Pin Price </th>
                                                    <th>Sending Detail </th>
                                                    <th>Sold  </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if (isset($data) && !empty($data))
                                                    @foreach ($data as $list)
                                                        <tr>
                                                            <td>{{ $list->created_at }}</td>
                                                            <td>{{ $list->pin_number }}</td>
                                                            <td>{{ $list->pin_ammount }}</td>
                                                            <td>{{ $list->updated_at }}</td>
                                                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Sold</button></td>
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                      </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                      <form>
                                                                        <div class="form-group">
                                                                          <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                                          <input type="text" class="form-control" id="recipient-name">
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="message-text" class="col-form-label">Message:</label>
                                                                          <textarea class="form-control" id="message-text"></textarea>
                                                                        </div>
                                                                      </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                      <button type="button" class="btn btn-primary">Send message</button>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
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
    <!-- <script>
        $(document).ready(function() {
            $('#genratePin').validate({
                ignore: [],
                rules: {
                    total_pin: {
                        required: true,
                        maxlength: true,
                    },

                    messages: {
                        total_pin: {
                            required: 'Please Enter To Genrate Pin',
                            maxlength: 2,
                        },

                    }

                }

            });
        });
    </script> -->
@endsection
