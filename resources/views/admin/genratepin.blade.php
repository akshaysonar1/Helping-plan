@extends('layouts.master')
@section('content')
<head>
    <style>
         
        body, h1, h3, input { 
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 16px;
        color: #666;
        }
        
       
        form {
        width: 86%; 
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px; 
        border: solid 1px #ccc;
        box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
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
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-7">
                    <div class="p-5">
                       
                        <h1 class="h3 mb-2 text-gray-800">Genrated Pin</h1>
                 
                        <form class="form-group" method="post" action="{{route('genratepin.data')}}">
                            @csrf
                            Select Price For Pin
                            <div class="form-group">
                                <input id="name" type="radio" name="pin_ammount" value="500" required autocomplete="name" autofocus> <span class="form-group">500</span>
                                <input id="name" type="radio" name="pin_ammount" value="1000" required autocomplete="name" autofocus> <span class="form-group">1000</span>
                                <input id="name" type="radio" name="pin_ammount" value="2000" required autocomplete="name" autofocus> <span class="form-group">2000</span>
                            </div>

                            <label>Enter Total Pin </label><br>
                            
                                <input type="text" class="form-control"  name="total_pin" placeholder="Enter The pin ">
                             
                            
                            <br>
                            <button type="submit" >Submit</button>
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
</div>

@endsection