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
                        <form class="form-group" method="post" action="{{route('genratepin.data')}}">
                            @csrf
                            Select Price For Pin
                            <div class="form-group">
                                <input id="name" type="radio" name="pin_ammount" value="500" required autocomplete="name" autofocus> <span class="form-group">500</span>
                                <input id="name" type="radio" name="pin_ammount" value="1000" required autocomplete="name" autofocus> <span class="form-group">1000</span>
                                <input id="name" type="radio" name="pin_ammount" value="2000" required autocomplete="name" autofocus> <span class="form-group">2000</span>
                            </div>

                            <label>Enter The Pin </label>
                            <div class="col-sm-6">
                                <input type="text" name="total_pin" required autocomplete="new-password" placeholder="Enter The pin ">
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