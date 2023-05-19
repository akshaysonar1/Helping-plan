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
                    <h6 class="m-0 font-weight-bold text-primary">payment Conformation</h6>
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


                                <label>Enter Total Pin </label><br>

                                <input type="text" class="form-control" name="total_pin" placeholder="Enter The pin ">


                                <br>
                                <button type="submit">Submit</button>
                                <div class="col-sm-6">




                                </div>
                        </div>

                        </form>

                        @foreach ($conform as $conf)
                            <div class="pay-card-1">
                                <div class=" d-flex justify-content-between">
                                    <div class="d-flex gap-3">
                                        <div class="">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="10" cy="10" r="10" fill="#7AE868" />
                                            </svg>
                                        </div>
                                        <div class="">
                                            <p class="id-text">{{ $conf->customer_id }}</p>
                                            <p class="date-text">{{ $conf->created_at->todatestring() }}</p>
                                        </div>
                                        <div class="">
                                            <p class="name-text mb-1"> Name : <span
                                                    class="name-para">{{ $conf->name }}</span></p>
                                            <p class="name-text mb-1"> Bank : <span
                                                    class="name-para">{{ $conf->bank_name }}</span></p>
                                            <p class="name-text mb-1"> Mo.No : <span
                                                    class="name-para">{{ $conf->mobile }}</span></p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="name-text mb-1">47:38:25</p>
                                        <p class="name-text mb-1">Rs. 1000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <form action="{{ route('user.conformetion', $conf->sender_id) }}" method="POST">
                                        @csrf
                                        @method('post')
                                        <div class="col-xl-12 d-flex justify-content-end gap-2">

                                            @if ($conf->tran_status == '1')
                                                <button type="button" class="btn btn-payment">Conformation Done</button>
                                            @else
                                                <button type="submit" class="btn btn-payment">confirm</button>
                                            @endif
                                    </form>
                                    <button type="button" class="btn btn-payment">Payment
                                        Image</button>
                                    <div class="details-tip">
                                        <button type="button" class="btn btn-payment details-show">Details</button>
                                        <div class="tooltip-content details-div">
                                            <p class="name-text mb-1"> Name : <span
                                                    class="name-para">{{ $conf->name }}</span>
                                            </p>
                                            <p class="name-text mb-1"> Mobile No. : <span
                                                    class="name-para">{{ $conf->mobile }}</span></p>
                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                    class="name-para">{{ $conf->ifsc_code }}</span></p>
                                            <p class="name-text mb-1"> Account No: <span
                                                    class="name-para">{{ $conf->account_no }}</span></p>
                                            <p class="name-text mb-1"> Upi Link: <span
                                                    class="name-para">{{ $conf->upi_link }}</span></p>
                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                    class="name-para">{{ $conf->phone_pay_no }}</span></p>
                                            <p class="name-text mb-1"> Google Pay No: <span
                                                    class="name-para">{{ $conf->google_pay_no }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
