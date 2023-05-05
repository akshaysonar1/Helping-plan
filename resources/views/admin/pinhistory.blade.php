@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">PIN HISTORY</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('pinhistory')}}" method="get">
                        <div class="form-group">
                            <input id="name" type="radio" name="currency" value="500" {{ request()->input('currency') == '500' ? 'checked' : '' }} autocomplete="name" autofocus> <span class="form-group">500</span>
                            <input id="name" type="radio" name="currency" value="1000" {{ request()->input('currency') == '1000' ? 'checked' : '' }} autocomplete="name" autofocus> <span class="form-group">1000</span>
                            <input id="name" type="radio" name="currency" value="2000" {{ request()->input('currency') == '2000' ? 'checked' : '' }} autocomplete="name" autofocus> <span class="form-group">2000</span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Total</label>
                            <input id="total" type="text" name="total" value="" autocomplete="name" autofocus> <span class="form-group"></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">From</label>
                            <input id="start_date" type="date" name="start_date" value="" autocomplete="name" autofocus> <span class="form-group"></span>

                            <label for="exampleInputPassword1">To</label>
                            <input id="end_date" type="date" name="end_date" value="" autocomplete="name" autofocus> <span class="form-group"></span>


                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pin</label>
                            <input id="pin" type="text" name="pin" value="" autocomplete="name" autofocus> <span class="form-group"></span>
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
                                            @if(isset($data) && !empty($data) )
                                            @foreach($data as $list)
                                            <tr>
                                                <td>{{$list->created_at}}</td>
                                                <td>{{$list->pin_number}}</td>
                                                <td>{{$list->pin_ammount}}</td>
                                                <td></td>
                                            </tr>
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