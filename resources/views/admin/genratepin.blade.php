@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Genrate Pin </h1>
                        </div>
                        <form class="form-group" method="post" action="{{route('genratepin.data')}}" id="genratePin">
                            @csrf
                            Select Price For Pin
                            <div class="form-group">
                                <input id="pin_ammount" type="radio" name="pin_ammount" value="500" required autocomplete="name" autofocus> <span class="form-group">500</span>
                                <input id="pin_ammount" type="radio" name="pin_ammount" value="1000" required autocomplete="name" autofocus> <span class="form-group">1000</span>
                                <input id="pin_ammount" type="radio" name="pin_ammount" value="2000" required autocomplete="name" autofocus> <span class="form-group">2000</span>
                            </div>

                            <label>Enter The Pin </label>
                            <div class="col-sm-6">
                                <input type="text" name="total_pin" id="total_pin" maxlength="2" required autocomplete="new-total_pin" placeholder="Enter The pin" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="">
                                <!-- <label id="total_pin-error" class="error" for="total_pin"> -->
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
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
                                            <th>Genrate Date </th>
                                            <th>Pin Detail </th>
                                            <th>Pin Price </th>
                                            <th>Sending Detail </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if(isset($data) && !empty($data) )
                                        @foreach($data as $list)
                                        <tr>
                                            <td>{{$list->created_at}}</td>
                                            <td>{{$list->pin_number}}</td>
                                            <td>{{$list->pin_ammount}}</td>
                                            <td>{{$list->updated_at}}</td>
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