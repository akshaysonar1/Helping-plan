@extends('user.layouts.master')
@section('master')
<style>
    #text {
        text-decoration: none;
    }

    label.error {
        color: red !important;
    }

    h6 {
        color: red;
        text-align: center;
    }
</style>

<!-- <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Dashboard</h2>
            <h3>Welcome <span>{{ Auth::user()->name }}</span></h3>
        </div>
    </div>
</section>
<marquee>
    @if(!empty($noteData))
    <h6>Notice :- <span>{{$noteData->note}}</span></h6>
    @else
    <h6>Notice <span></span></h6>
    @endif
    @if(empty(Auth::user()->bank_name) && empty(Auth::user()->account_no) && empty(Auth::user()->ifsc_code))
    <h6>warning:- <span>Please Fill bank Details</span></h6>
    @else

    @endif
</marquee> -->
<section class="adjust-margin section-color">
    <div class="container">
        <div class="row">
            <marquee class="mt-5">
                @if(!empty($noteData))
                <h6>Note:- <span>{{$noteData->note}}</span></h6>
                @endif
                @if(empty(Auth::user()->bank_name) && empty(Auth::user()->account_no) && empty(Auth::user()->ifsc_code))
                <h6>warning:- <span>Please Fill bank Details</span></h6>
                @else

                @endif
            </marquee>
            <div class="col-xl-3 col-lg-3 ">
                <div class="tab-background">

                    {{-- table info --}}
                    <div class="button-flex mb-3">
                        <p class="mb-0 profile-name"> Name : {{ ucwords(Auth::user()->name) }}</p>

                        <div class="icon-tab">
                            <i class="fal fa-bars" style="color: #4260cb;" data-bs-toggle="collapse"
                                href="#table-information"></i>
                        </div>
                        {{-- <button type="button" class="btn btn-primary btn-collapse" data-bs-toggle="collapse"
                            href="#table-information">Know More</button> --}}


                    </div>

                    <div class="profile-table collapse" id="table-information">
                        <table class="table">
                            @if(!empty($pindeatils))
                            <tbody style="color: #4260cb">
                                <tr>
                                    <th scope="row">Current Pin:</th>
                                    <td>{{ $pindeatils->unique_pin }}</td>

                                </tr>
                                <tr>
                                    <th scope="row">Provide Help Amount</th>
                                    <td>{{ $pindeatils->provide_help_ammount
                                        }}</td>

                                </tr>
                                <tr>
                                    <th scope="row">Get Help Amount:</th>
                                    <td colspan="2">{{ $pindeatils->get_help_ammount }}</td>

                                </tr>
                                <tr>
                                    <th scope="row">Amount Recieved:</th>
                                    <td colspan="2">{{ $pindeatils->ammount_Received }}</td>

                                </tr>
                                <tr>
                                    <th scope="row">Amount Pending:</th>
                                    <td colspan="2">{{ $pindeatils->ammount_pendding }}</td>

                                </tr>
                            </tbody>
                            @else

                            @endif
                        </table>
                    </div>

                    <div class="tab-menu">

                        <ul class="nav nav-pills tab-list" id="myTab" role="tablist">
                            <li class="nav-item typo-tab" role="presentation">
                                <button class="nav-link tab-text active tab-padding w-100 text-left" id="Dashboard"
                                    data-bs-toggle="tab" data-bs-target="#Dashboard-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">Dashboard</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link tab-text tab-padding w-100" id="profile-tab"
                                    data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">Profile</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link tab-text tab-padding w-100" id="provide-tab"
                                    data-bs-toggle="tab" data-bs-target="#provide-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">Provide
                                    Help</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link tab-text tab-padding w-100" id="get-tab" data-bs-toggle="tab"
                                    data-bs-target="#get-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">Get
                                    Help</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link tab-text tab-padding w-100" id="history-tab"
                                    data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">History</button>
                            </li>
                        </ul>
                    </div>
                    <div class="Log-out-btn">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-logout w-100">Logout</button>
                        </form>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 ">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Dashboard-tab-pane" role="tabpanel"
                        aria-labelledby="Dashboard" tabindex="0">
                        <div class="">
                            <div class="">
                                <div class="row">
                                    @if (Session::has('message'))
                                    <div class="modal fade pop-modal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static"
                                      data-bs-keyboard="false" id="dataModel">
                                    
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content ">
                                                <div class="modal-header header-modify header-position">
                                                    <div class="cross-btn"></div>
                                                </div>
                                                <div class="modal-header header-modify">
                                                    
                                                    <p class="text-center modal-head mb-0" style="margin-left: 14px"> {{ Session::get('message') }}</p>
                                                    
                                                
                                                </div>
                                                <div class="modal-body">
                                                    <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal"
                                                    aria-label="Close" id="closeBtn">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <p class="alert alert-info session-error">{{ Session::get('message') }}</p> --}}
                                    @endif

                                    <div class="col-xl-6">
                                        @if(isset($users) && count($users) > 0 && Auth::user()->status==1)
                                        @foreach ($users as $user)
                                        @if($user->tran_status != '2')
                                        <div class="pay-card responsive-card">
                                            <div class=" d-flex justify-content-between">
                                                <div class="flex-amount">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#FF3D3D" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">
                                                            {{ $user->receiverUser ? $user->receiverUser->customer_id :
                                                            '' }}
                                                        </p>
                                                        {{-- {{ dd($user->receiverUser) }} --}}
                                                        {{-- <p class="date-text">{{ $user->receiverUser ?
                                                            $user->receiverUser->created_at : ""->todatestring()}}</p>
                                                        --}}
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span class="name-para">{{
                                                                $user->receiverUser ? $user->receiverUser->name : ''
                                                                }}</span>
                                                        </p>
                                                        <p class="name-text mb-1"> Bank : <span class="name-para">{{
                                                                $user->receiverUser ? $user->receiverUser->bank_name :
                                                                '' }}</span>
                                                        </p>
                                                        <p class="name-text mb-1"> Mobile Number : <span
                                                                class="name-para">{{
                                                                $user->receiverUser ? $user->receiverUser->mobile : ''
                                                                }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <input type="hidden" id="start_date_timer_{{$user->id}}"
                                                        class="start_date_timer" data-id="{{$user->id}}"
                                                        value="{{ isset($currentDate) && !empty($currentDate) ? $currentDate : date("
                                                        Y-m-d h:i:s") }}">
                                                    <input type="hidden" id="end_date_timer_{{$user->id}}"
                                                        class="end_date_timer" value="{{ $user->end_date }}">
                                                    <input type="hidden" id="payment_success_date_{{$user->id}}"
                                                        class="payment_success_date"
                                                        value="{{ $user->payment_success_date }}">
                                                    <input type="hidden" id="payment_status_{{$user->id}}"
                                                        class="payment_status" value="{{ $user->tran_status }}">
                                                    <p class="name-text mb-1" id="user_timer_{{$user->id}}"
                                                        class="user_timer__{{$user->id}}"></p>

                                                    <p class="name-text mb-1">
                                                        Rs.{{ $user->get_ammount }} </p>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    {{-- <button type="button" onclick="importData()"
                                                        class="btn btn-payment">Payment
                                                        Image</button> --}}
                                                    @if(!empty($user->image))
                                                    {{-- image model --}}

                                                    <button type="button" class="btn btn-payment" data-toggle="modal"
                                                        data-target=".{{ $user->id }}-modal19-lg"
                                                        data-id="{{ $user->show }}" data-image="{{ $user->image }}">View
                                                        Image</button>


                                                    <!-- Large modal -->


                                                    <div class="modal fade bd-example-modal19-lg {{ $user->id }}-modal19-lg"
                                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                        aria-hidden="true">
                                                        
                                                        <div class="modal-dialog modal19-lg">
                                                            <div class="modal-content image-modal" style=" ">
                                                                <div class="image-position">
                                                                    <img id="image"
                                                                        src="{{ asset('user/assets/img/payment/'.$user->image) }}" style=" " />
                                                                    <div class="cancel-button">
                                                                        {{-- <i class="fad fa-window-close" style="--fa-primary-color: #e01b24; --fa-secondary-color: #e01b24; --fa-secondary-opacity: 0.7;" data-dismiss="modal" ></i> --}}
                                                                        <button type="button" class="btn-close button-close" data-dismiss="modal" aria-label="Close"></button>
                                                                    
                                                                    
                                                                    </div>    
                                                        
                                                                </div>    
                                                             </div>
                                                        </div>
                                                    </div>
                                                    {{-- Image model End --}}
                                                    @else
                                                    <button type="button" class="btn btn-payment" data-toggle="modal"
                                                        data-target="#exampleModal{{$user->id}}"
                                                        data-whatever="@mdo">Payment Image</button>
                                                    @endif
                                                    <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <form id="imageform" action="{{ route('user.payment') }}" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('post')

                                                                <!-- payment image modal -->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-center modal-head mb-0"
                                                                            id="exampleModalLabel">
                                                                            Upload
                                                                            Payment Image</h5>
                                                                        <!-- <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button> -->
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="formFileMultiple"
                                                                                class="form-label">Payment Image</label>
                                                                            <input class="form-control" type="file"
                                                                                name="image"  id="picture" required>
                                                                                <p id="error1" style="display:none; color:#FF0000;">
                                                                                    Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                                                                                    </p>
                                                                                    <p id="error2" style="display:none; color:#FF0000;">
                                                                                    Maximum File Size Limit is 2MB.
                                                                                    </p>
                                                                                    <p>
                                                                            <input type="hidden" name="receiver_id"
                                                                                value="{{ $user->receiverUser ? $user->receiverUser->id : '' }}">
                                                                            <input type="hidden" name="transaction_id"
                                                                                value="{{ $user->id }}">
                                                                            <input type="hidden" name="get_amount"
                                                                                value="{{ $user->get_ammount }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button name="submit" type="submit" value="Submit" id="submit" 
                                                                            class="btn btn-primary">Upload</button>
                                                                    </div>
                                                                </div>

                                                                <!-- new modal -->





                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown ">
                                                        <div class="details-tip">
                                                            <button type="button"
                                                                class="btn btn-payment details-show dropdown-toggle"
                                                                type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">Details</button>

                                                            <div class="demo">
                                                                <div class="tooltip-content dropdown-menu details-div">
                                                                    <p class="name-text mb-1"> Name : <span
                                                                            class="name-para">{{
                                                                            $user->receiverUser ?
                                                                            $user->receiverUser->name : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Mobile No. : <span
                                                                            class="name-para">{{ $user->receiverUser ?
                                                                            $user->receiverUser->mobile : '' }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Ifsc Code : <span
                                                                            class="name-para">{{ $user->receiverUser ?
                                                                            $user->receiverUser->ifsc_code : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Account No: <span
                                                                            class="name-para">{{ $user->receiverUser ?
                                                                            $user->receiverUser->account_no : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Upi Link: <span
                                                                            class="name-para">{{ $user->receiverUser ?
                                                                            $user->receiverUser->upi_link : '' }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Phone Pay No: <span
                                                                            class="name-para">{{ $user->receiverUser ?
                                                                            $user->receiverUser->phone_pay_no : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Google Pay No: <span
                                                                            class="name-para">{{ $user->receiverUser ?
                                                                            $user->receiverUser->google_pay_no : ''
                                                                            }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>
                                        @else
                                        @endif
                                        @endforeach
                                        @endif

                                        <!-- && Auth::user()->unique_pin != $congoPopUp->unique_id -->

                                        @if(!empty($congoPopUp))
                                        @if($congoPopUp->ammount_pendding != 0 && $congoPopUp->pay_status != 1)


                                        @if(isset($showusers) && count($showusers) > 0 )
                                        {{-- mycode payment done after show this code --}}

                                        @foreach ($showusers as $show)
                                        @if(Auth::user()->unique_pin == $show->pin_number)

                                        <div class="pay-card responsive-card">
                                            <div class=" d-flex justify-content-between">
                                                <div class="flex-amount">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#008000" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">
                                                            {{ $show->receiverUser ? $show->receiverUser->customer_id :
                                                            '' }}
                                                        </p>
                                                        {{-- {{ dd($user->receiverUser) }} --}}
                                                        {{-- <p class="date-text">{{ $user->receiverUser ?
                                                            $user->receiverUser->created_at : ""->todatestring()}}</p>
                                                        --}}
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span class="name-para">{{
                                                                $show->receiverUser ? $show->receiverUser->name : ''
                                                                }}</span>
                                                        </p>

                                                        <p class="name-text mb-1"> Bank : <span class="name-para">{{
                                                                $show->receiverUser ? $show->receiverUser->bank_name :
                                                                '' }}</span>
                                                        </p>
                                                        <p class="name-text mb-1"> Mobile Number : <span
                                                                class="name-para">{{
                                                                $show->receiverUser ? $show->receiverUser->mobile : ''
                                                                }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <input type="hidden" id="start_date_timer"
                                                        value="{{ isset($currentDate) && !empty($currentDate) ? $currentDate : date("
                                                        Y-m-d h:i:s") }}">
                                                    <input type="hidden" id="end_date_timer"
                                                        value="{{ $show->end_date }}">
                                                    <input type="hidden" id="payment_success_date"
                                                        value="{{ $show->payment_success_date }}">
                                                    <input type="hidden" id="payment_status" class="payment_status"
                                                        value="{{ $show->tran_status }}">
                                                    <p class="name-text mb-1" id="user_timer"></p>

                                                    <p class="name-text mb-1">
                                                        Rs.{{ $show->get_ammount }} </p>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">

                                                    {{-- image model --}}

                                                    <button type="button" class="btn btn-payment" data-toggle="modal"
                                                        data-target=".{{ $show->id }}-modal10-lg"
                                                        data-id="{{ $show->show }}" data-image="{{ $show->image }}">View
                                                        Image</button>


                                                    <!-- Large modal -->


                                                    <div class="modal fade bd-example-modal10-lg {{ $show->id }}-modal10-lg"
                                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                        aria-hidden="true">
                                                        
                                                        <div class="modal-dialog modal10-lg">
                                                            <div class="modal-content image-modal" style=" ">
                                                                <div class="image-position">
                                                                    <img id="image"
                                                                        src="{{ asset('user/assets/img/payment/'.$show->image) }}" style=" " />
                                                                    <div class="cancel-button">
                                                                        {{-- <i class="fad fa-window-close" style="--fa-primary-color: #e01b24; --fa-secondary-color: #e01b24; --fa-secondary-opacity: 0.7;" data-dismiss="modal" ></i> --}}
                                                                        <button type="button" class="btn-close button-close" data-dismiss="modal" aria-label="Close"></button>
                                                                    
                                                                    
                                                                    </div>    
                                                        
                                                                </div>    
                                                             </div>
                                                        </div>
                                                    </div>
                                                    {{-- Image model End --}}
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <form action="{{ route('user.payment') }}" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('post')
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Upload
                                                                            Payment Image</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="formFileMultiple"
                                                                                class="form-label">Payment
                                                                                Image</label>
                                                                            <input class="form-control" type="file"
                                                                                name="image" id="formFileMultiple"
                                                                                required>
                                                                            <input type="hidden" name="receiver_id"
                                                                                value="{{ $show->receiverUser ? $show->receiverUser->id : '' }}">
                                                                            <input type="hidden" name="transaction_id"
                                                                                value="{{ $show->id }}">
                                                                            <input type="hidden" name="get_amount"
                                                                                value="{{ $show->get_ammount }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Upload</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                    <div class="dropdown ">
                                                        <div class="details-tip">
                                                            <button type="button"
                                                                class="btn btn-payment details-show dropdown-toggle"
                                                                type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">Details</button>

                                                            <div class="demo">
                                                                <div class="tooltip-content dropdown-menu details-div">
                                                                    <p class="name-text mb-1"> Name : <span
                                                                            class="name-para">{{
                                                                            $show->receiverUser ?
                                                                            $show->receiverUser->name : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Mobile No. : <span
                                                                            class="name-para">{{ $show->receiverUser ?
                                                                            $show->receiverUser->mobile : '' }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Ifsc Code : <span
                                                                            class="name-para">{{ $show->receiverUser ?
                                                                            $show->receiverUser->ifsc_code : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Account No: <span
                                                                            class="name-para">{{ $show->receiverUser ?
                                                                            $show->receiverUser->account_no : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Upi Link: <span
                                                                            class="name-para">{{ $show->receiverUser ?
                                                                            $show->receiverUser->upi_link : '' }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Phone Pay No: <span
                                                                            class="name-para">{{ $show->receiverUser ?
                                                                            $show->receiverUser->phone_pay_no : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Google Pay No: <span
                                                                            class="name-para">{{ $show->receiverUser ?
                                                                            $show->receiverUser->google_pay_no : ''
                                                                            }}</span>
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>
                                        @endif
                                        @endforeach
                                        @endif
                                        @endif
                                        @else
                                        {{-- else condition --}}

                                        @endif



                                    </div>

                                    {{-- my code Finish --}}
                                    {{-- {{ dd($congoPopUp); }}
                                    @if(!empty($congoPopUp))
                                    @if($congoPopUp->ammount_pendding != 0 && $congoPopUp->pay_status != 1)
                                    @if(isset($showusers) && count($showusers) > 0 ) --}}
                                    <div class="col-xl-6">
                                        @foreach ($conform as $coform)
                                        {{-- {{ dd(Auth::user()->unique_pin,$coform->pin_number )}}
                                        {{ dd($conform) }} --}}
                                        {{-- @if(Auth::user()->unique_pin == $coform->pin_number) --}}


                                        <div class="pay-card-1">

                                            <div class=" d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <div class="">
                                                        @if ($coform->tran_status == '0')
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="10" cy="10" r="10" fill="#FF3D3D" />
                                                    </svg>  
                                                    @else

                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#008000" />
                                                        </svg>
                                                        @endif
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">{{ $coform->customer_id }}</p>
                                                        <p class="date-text">
                                                            {{ $coform->created_at->todatestring() }}
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span class="name-para">{{
                                                                $coform->name }}</span></p>
                                                        <p class="name-text mb-1"> Bank : <span class="name-para">{{
                                                                $coform->bank_name }}</span>
                                                        </p>
                                                        <p class="name-text mb-1"> Mobile Number : <span
                                                                class="name-para">{{
                                                                $coform->mobile }}</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    @if ($coform->tran_status == '1')

                                                    @else
                                                    {{-- <p class="name-text mb-1">47:38:25</p> --}}
                                                    @endif
                                                    <p class="name-text mb-1">Rs.{{ $coform->get_ammount }}</p>
                                                </div>
                                            </div>




                                            <div class="row">


                                                <form action="{{ route('user.conformetion', $coform->sender_id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('post')
                                                    <div class="col-xl-12 d-flex justify-content-end gap-2">


                                                        @if ($coform->tran_status == '1')
                                                        <button type="button" class="btn btn-payment">Conformation
                                                            Done</button>
                                                        @else

                                                        <input type="hidden" name="id" value="{{  $coform->id }}">
                                                        <input type="hidden" name="provide_help_id"
                                                            value="{{  $coform->provide_help_id  }}">
                                                        <input type="hidden" name="get_ammount"
                                                            value="{{  $coform->get_ammount  }}">
                                                        <input type="hidden" name="receiver_id"
                                                            value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="unique_pin"
                                                            value="{{ $coform->unique_pin }}">
                                                            @if(!empty($coform->image))
                                                        <button type="submit" class="btn btn-payment">confirm</button>
                                                            @else

                                                            @endif
                                                        @endif

                                                        {{-- image model --}}
                                                        @if(!empty($coform->image))
                                                        <button type="button" class="btn btn-payment"
                                                            data-toggle="modal"
                                                            data-target=".{{ $coform->id }}-modal1-lg"
                                                            data-id="{{ $coform->user_id }}"
                                                            data-image="{{ $coform->image }}">View
                                                            Image</button>
                                                            @else

                                                            @endif

                                                        <!-- Large modal -->


                                                        <div class="modal fade bd-example-modal1-lg {{ $coform->id }}-modal1-lg"
                                                            tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                            aria-hidden="true">
                                                            
                                                            <div class="modal-dialog modal1-lg">
                                                                <div class="modal-content image-modal" style=" ">
                                                                    <div class="image-position">
                                                                        <img id="image"
                                                                            src="{{ asset('user/assets/img/payment/'.$coform->image) }}" style=" " />
                                                                        <div class="cancel-button">
                                                                            {{-- <i class="fad fa-window-close" style="--fa-primary-color: #e01b24; --fa-secondary-color: #e01b24; --fa-secondary-opacity: 0.7;" data-dismiss="modal" ></i> --}}
                                                                            <button type="button" class="btn-close button-close" data-dismiss="modal" aria-label="Close"></button>
                                                                        
                                                                        
                                                                        </div>    
                                                            
                                                                    </div>    
                                                                 </div>
                                                            </div>
                                                        </div>
                                                        {{-- image model end --}}



                                                        @if ($coform->tran_status == '1')

                                                        @else

                                                        <div class="dropdown ">
                                                            <div class="details-tip">
                                                                <button type="button"
                                                                    class="btn btn-payment details-show dropdown-toggle"
                                                                    type="button" id="dropdownMenuButton"
                                                                    data-bs-toggle="dropdown"
                                                                    aria-expanded="false">Details</button>

                                                                <div class="demo">
                                                                    <div
                                                                  
                                                                        class="tooltip-content dropdown-menu details-div">
                                                                        <p class="name-text mb-1"> Name : <span
                                                                                class="name-para">{{
                                                                                $coform->name;
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Mobile No. : <span
                                                                                class="name-para">{{
                                                                                $coform->mobile
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Ifsc Code : <span
                                                                                class="name-para">{{
                                                                                $coform->ifsc_code
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Account No: <span
                                                                                class="name-para">{{
                                                                                $coform->account_no
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Upi Link: <span
                                                                                class="name-para">{{
                                                                                $coform->upi_link
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Phone Pay No: <span
                                                                                class="name-para">{{
                                                                                $coform->upi_link
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Google Pay No: <span
                                                                                class="name-para">{{
                                                                                $coform->google_pay_no
                                                                                }}</span>
                                                                        </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                    </div>

                                                </form>
                                            </div>

                                        </div><br>
                                        {{-- @endif --}}
                                        @endforeach
                                    </div>
                                    {{-- @endif
                                    @endif
                                    @else

                                    @endif --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- profile-tab-content -->
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <form action="{{ route('user.profileupdate', Auth::user()->id) }}" method="POST"
                            id="ProfileForm">
                            @csrf
                            @method('post')
                            <div class="row mb-5">
                                <div class="">
                                    <div class="col-xl-12">
                                        <h4 class="profile-tag">Personal Detail</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 form-adjust">
                                        <label>Name</label>
                                        <input type="text" placeholder="Enter Your Name" class="form-control"
                                            name="name" value="{{ Auth::user()->name }}" id="name"
                                            oninput="validateInput(this)" maxlength="40">
                                    </div>
                                    <div class="col-xl-6 mb-3 form-adjust">
                                        <label>Mobile Number</label>
                                        <input type="text" placeholder="10 digit mobile no." class="form-control"
                                            value="{{ Auth::user()->mobile }}" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 mb-3 form-class form-adjust">
                                        <label>State</label>
                                        <input class="form-control" name="state" value="{{ Auth::user()->state }}"
                                            oninput="validateInput(this)" id="state" maxlength="20"></input>
                                    </div>
                                    <div class="col-xl-4 mb-3 form-class form-adjust">
                                        <label>City</label>
                                        <input class="form-control" name="city" value="{{ Auth::user()->city }}"
                                            oninput="validateInput(this)" id="city" maxlength="20"></input>
                                    </div>
                                    <div class="col-xl-4 mb-3 form-class form-adjust">
                                        <label>Pin Code</label>
                                        <input class="form-control" name="pin_code" value="{{ Auth::user()->pin_code }}"
                                            id="pin_code" oninput="process(this)" maxlength="10"></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 mb-3">
                                        <h4 class="profile-tag">Bank Detail</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 mb-3 form-class form-adjust">
                                            <label>Bank Name</label>
                                            <input type="text" placeholder="Enter Your Bank Name" class="form-control"
                                                name="bank_name" value="{{ Auth::user()->bank_name }}" maxlength="30">
                                        </div>
                                        <div class="col-xl-6 mb-3 form-class form-adjust">
                                            <label>Bank Account Number</label>
                                            <input type="text" placeholder="xxxxxxxxxxxxxxxx" class="form-control"
                                                name="account_no" value="{{ Auth::user()->account_no }}"
                                                oninput="process(this)" maxlength="20">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 mb-3 form-class form-adjust">
                                            <label>IFSC Code</label>
                                            <input type="text" placeholder="Enter Your IFSC Code" class="form-control"
                                                name="ifsc_code" value="{{ Auth::user()->ifsc_code }}" onkeyup="
                                        var start = this.selectionStart;
                                        var end = this.selectionEnd;
                                        this.value = this.value.toUpperCase();
                                        this.setSelectionRange(start, end);
                                      " maxlength="20">
                                        </div>
                                        <div class="col-xl-6 mb-3 form-class form-adjust">
                                            <label>Phone Pay Number</label>
                                            <input type="text" placeholder="Enter PhonePe Number" class="form-control"
                                                name="phone_pay_no" value="{{ Auth::user()->phone_pay_no }}"
                                                oninput="process(this)" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 mb-3 form-class form-adjust">
                                            <label>Google Pay Number</label>
                                            <input type="text" placeholder="Enter Google Pay Number"
                                                class="form-control" name="google_pay_no"
                                                value="{{ Auth::user()->google_pay_no }}" oninput="process(this)"
                                                maxlength="10">
                                        </div>
                                        <div class="col-xl-6 mb-3 form-class form-adjust">
                                            <label>UPI Link</label>
                                            <input type="text" placeholder="Enter Your UPI Link" class="form-control"
                                                name="upi_link" value="{{ Auth::user()->upi_link }}" maxlength="20">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            {{-- <button type="button" class="btn btn-form">Edit</button> --}}
                                            <button type="submit" class="btn btn-form-1">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="provide-tab-pane" role="tabpanel" aria-labelledby="provide-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-xl-6">
                                {{-- @if(isset($users) && count($users) > 0 && Auth::user()->status==1)
                                --}}
                                @foreach ($users as $user)
                                @if($user->tran_status!=2)
                                <div class="pay-card responsive-card">
                                    <div class=" d-flex justify-content-between">
                                        <div class="flex-amount">
                                            <div class="">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="10" cy="10" r="10" fill="#FF3D3D" />
                                                </svg>
                                            </div>
                                            <div class="">
                                                <p class="id-text">
                                                    {{ $user->receiverUser ?
                                                    $user->receiverUser->customer_id :'' }}
                                                </p>
                                                {{-- <p class="date-text">{{ $user->receiverUser ?
                                                    $user->receiverUser->created_at :
                                                    ""->todatestring()}}</p>--}}
                                            </div>
                                            <div class="">
                                                <p class="name-text mb-1"> Name : <span
                                                        class="name-para">{{$user->receiverUser ?
                                                        $user->receiverUser->name : ''}}</span></p>
                                                <p class="name-text mb-1"> Bank : <span
                                                        class="name-para">{{$user->receiverUser ?
                                                        $user->receiverUser->bank_name :'' }}</span></p>
                                                <p class="name-text mb-1"> Mobile Number : <span
                                                        class="name-para">{{$user->receiverUser ?
                                                        $user->receiverUser->mobile : ''}}</span></p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <input type="hidden" id="start_date_timer"
                                                value="{{ isset($currentDate) && !empty($currentDate) ? $currentDate : date("
                                                Y-m-d h:i:s") }}">
                                            <input type="hidden" id="end_date_timer" value="{{ $user->end_date }}">
                                            <input type="hidden" id="payment_success_date"
                                                value="{{ $user->payment_success_date }}">
                                            <input type="hidden" id="payment_status" class="payment_status"
                                                value="{{ $user->tran_status }}">
                                            <p class="name-text mb-1" id="user1_timer"></p>
                                            <p class="name-text mb-1">Rs.{{ $user->get_ammount }} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 d-flex justify-content-end gap-2">
                                            {{-- <button type="button" onclick="importData()"
                                                class="btn btn-payment">Payment Image</button> --}}
                                            @if(!empty($user->image))
                                            {{-- image model --}}

                                            <button type="button" class="btn btn-payment" data-toggle="modal"
                                                data-target=".{{ $user->id }}-modal20-lg" data-id="{{ $user->show }}"
                                                data-image="{{ $user->image }}">View
                                                Image</button>


                                            <!-- Large modal -->


                                            <div class="modal fade bd-example-modal20-lg {{ $user->id }}-modal20-lg"
                                                tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                aria-hidden="true">
                                                
                                                <div class="modal-dialog modal20-lg">
                                                    <div class="modal-content image-modal" style=" ">
                                                        <div class="image-position">
                                                            <img id="image"
                                                                src="{{ asset('user/assets/img/payment/'.$user->image) }}" style=" " />
                                                            <div class="cancel-button">
                                                                {{-- <i class="fad fa-window-close" style="--fa-primary-color: #e01b24; --fa-secondary-color: #e01b24; --fa-secondary-opacity: 0.7;" data-dismiss="modal" ></i> --}}
                                                                <button type="button" class="btn-close button-close" data-dismiss="modal" aria-label="Close"></button>
                                                            
                                                            
                                                            </div>    
                                                
                                                        </div>    
                                                     </div>
                                                </div>
                                            </div>
                                            {{-- Image model End --}}
                                            @else
                                            <button type="button" class="btn btn-payment" data-toggle="modal"
                                                data-target="#exampleModal1" data-whatever="@mdo">Payment Image</button>
                                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                   <form id="imageform1" action="{{ route('user.payment') }}" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('post')

                                                                <!-- payment image modal -->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-center modal-head mb-0"
                                                                            id="exampleModalLabel">
                                                                            Upload
                                                                            Payment Image</h5>
                                                                        <!-- <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button> -->
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="formFileMultiple"
                                                                                class="form-label">Payment Image</label>
                                                                            <input class="form-control" type="file"
                                                                                name="image"  id="picture1" required>
                                                                                <p id="error3" style="display:none; color:#FF0000;">
                                                                                    Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                                                                                    </p>
                                                                                    <p id="error4" style="display:none; color:#FF0000;">
                                                                                    Maximum File Size Limit is 2MB.
                                                                                    </p>
                                                                                    <p>
                                                                            <input type="hidden" name="receiver_id"
                                                                                value="{{ $user->receiverUser ? $user->receiverUser->id : '' }}">
                                                                            <input type="hidden" name="transaction_id"
                                                                                value="{{ $user->id }}">
                                                                            <input type="hidden" name="get_amount"
                                                                                value="{{ $user->get_ammount }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button name="submit" type="submit" value="Submit" id="submit1" 
                                                                            class="btn btn-primary">Upload</button>
                                                                    </div>
                                                                </div>

                                                                <!-- new modal -->





                                                            </form>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="dropdown">
                                                <div class="details-tip">
                                                    <button type="button"
                                                        class="btn btn-payment details-show dropdown-toggle"
                                                        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">Details</button>

                                                    <div class="demo">
                                                        <div class="tooltip-content dropdown-menu details-div">
                                                            <p class="name-text mb-1"> Name : <span class="name-para">{{
                                                                    $user->receiverUser ?
                                                                    $user->receiverUser->name : ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. :
                                                                <span class="name-para">{{
                                                                    $user->receiverUser ?
                                                                    $user->receiverUser->mobile : ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">{{
                                                                    $user->receiverUser ?
                                                                    $user->receiverUser->ifsc_code : ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">{{
                                                                    $user->receiverUser ?
                                                                    $user->receiverUser->account_no : ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">{{
                                                                    $user->receiverUser ?
                                                                    $user->receiverUser->upi_link : ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Phone Pay No:
                                                                <span class="name-para">{{
                                                                    $user->receiverUser ?
                                                                    $user->receiverUser->phone_pay_no :
                                                                    ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Google Pay No:
                                                                <span class="name-para">{{
                                                                    $user->receiverUser ?
                                                                    $user->receiverUser->google_pay_no :
                                                                    ''
                                                                    }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                @else
                                @endif
                                @endforeach

                                {{-- mycode payment done after show this code --}}
                                @foreach ($showusers as $show)
                                <div class="pay-card responsive-card">
                                    <div class=" d-flex justify-content-between">
                                        <div class="flex-amount">
                                            <div class="">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="10" cy="10" r="10" fill="#008000" />
                                                </svg>
                                            </div>
                                            <div class="">
                                                <p class="id-text">
                                                    {{ $show->receiverUser ?
                                                    $show->receiverUser->customer_id :
                                                    '' }}
                                                </p>
                                                {{-- {{ dd($user->receiverUser) }} --}}
                                                {{-- <p class="date-text">{{ $user->receiverUser ?
                                                    $user->receiverUser->created_at :
                                                    ""->todatestring()}}</p>
                                                --}}
                                            </div>
                                            <div class="">
                                                <p class="name-text mb-1"> Name : <span class="name-para">{{
                                                        $show->receiverUser ? $show->receiverUser->name
                                                        : ''
                                                        }}</span>
                                                </p>

                                                <p class="name-text mb-1"> Bank : <span class="name-para">{{
                                                        $show->receiverUser ?
                                                        $show->receiverUser->bank_name :
                                                        '' }}</span>
                                                </p>
                                                <p class="name-text mb-1"> Mobile Number : <span class="name-para">{{
                                                        $show->receiverUser ?
                                                        $show->receiverUser->mobile : ''
                                                        }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="">
                                            {{-- <p class="name-text mb-1">47:38:25</p> --}}
                                            <input type="hidden" id="start_date_timer"
                                                value="{{ isset($currentDate) && !empty($currentDate) ? $currentDate : date("
                                                Y-m-d h:i:s") }}">
                                            <input type="hidden" id="end_date_timer" value="{{ $show->end_date }}">
                                            <input type="hidden" id="payment_success_date"
                                                value="{{ $show->payment_success_date }}">
                                            <input type="hidden" id="payment_status" class="payment_status"
                                                value="{{ $show->tran_status }}">
                                            <p class="name-text mb-1" id="user1_timer"></p>

                                            <p class="name-text mb-1">
                                                Rs.{{ $show->get_ammount }} </p>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 d-flex justify-content-end gap-2">
                                            {{-- <button type="button" onclick="importData()"
                                                class="btn btn-payment">Payment
                                                Image</button> --}}

                                            {{-- Image Model Start --}}

                                            <button type="button" class="btn btn-payment examps" data-toggle="modal"
                                                data-target=".{{ $show->id }}-modal2-lg" data-id="{{ $show->user_id }}"
                                                data-image="{{ $show->image }}">View
                                                Image</button>


                                            <!-- Large modal -->


                                            <div class="modal fade bd-example-modal2-lg {{ $show->id }}-modal2-lg"
                                                tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                aria-hidden="true">
                                                
                                                <div class="modal-dialog modal2-lg">
                                                    <div class="modal-content image-modal" style=" ">
                                                        <div class="image-position">
                                                            <img id="image"
                                                                src="{{ asset('user/assets/img/payment/'.$show->image) }}" style=" " />
                                                            <div class="cancel-button">
                                                                {{-- <i class="fad fa-window-close" style="--fa-primary-color: #e01b24; --fa-secondary-color: #e01b24; --fa-secondary-opacity: 0.7;" data-dismiss="modal" ></i> --}}
                                                                <button type="button" class="btn-close button-close" data-dismiss="modal" aria-label="Close"></button>
                                                            
                                                            
                                                            </div>    
                                                
                                                        </div>    
                                                     </div>
                                                </div>
                                            </div>
                                            
                                            {{-- Image model End --}}

                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{ route('user.payment') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('post')
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    Upload
                                                                    Payment Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="formFileMultiple"
                                                                        class="form-label">Payment
                                                                        Image</label>
                                                                    <input class="form-control" type="file" name="image"
                                                                        id="formFileMultiple" required>
                                                                    <input type="hidden" name="receiver_id"
                                                                        value="{{ $show->receiverUser ? $show->receiverUser->id : '' }}">
                                                                    <input type="hidden" name="transaction_id"
                                                                        value="{{ $show->id }}">
                                                                    <input type="hidden" name="get_amount"
                                                                        value="{{ $show->get_ammount }}">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Upload</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                            <div class="dropdown ">
                                                <div class="details-tip">
                                                    <button type="button"
                                                        class="btn btn-payment details-show dropdown-toggle"
                                                        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">Details</button>

                                                    <div class="demo">
                                                        <div class="tooltip-content dropdown-menu details-div">
                                                            <p class="name-text mb-1"> Name : <span class="name-para">{{
                                                                    $show->receiverUser ?
                                                                    $show->receiverUser->name : ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. :
                                                                <span class="name-para">{{
                                                                    $show->receiverUser ?
                                                                    $show->receiverUser->mobile : ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">{{
                                                                    $show->receiverUser ?
                                                                    $show->receiverUser->ifsc_code : ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">{{
                                                                    $show->receiverUser ?
                                                                    $show->receiverUser->account_no : ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">{{
                                                                    $show->receiverUser ?
                                                                    $show->receiverUser->upi_link : ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Phone Pay No:
                                                                <span class="name-para">{{
                                                                    $show->receiverUser ?
                                                                    $show->receiverUser->phone_pay_no :
                                                                    ''
                                                                    }}</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Google Pay No:
                                                                <span class="name-para">{{
                                                                    $show->receiverUser ?
                                                                    $show->receiverUser->google_pay_no :
                                                                    ''
                                                                    }}</span>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                            tabindex="0">...</div>
                    </div>
                    <div class="tab-pane fade" id="get-tab-pane" role="tabpanel" aria-labelledby="get-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xl-6">
                                @if(count($conform)>0)
                                @foreach ($conform as $coform)
                                <div class="pay-card-1">

                                    <div class=" d-flex justify-content-between">
                                        <div class="flex-amount">
                                            <div class="">
                                                @if ($coform->tran_status == '0')
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="10" cy="10" r="10" fill="#FF3D3D" />
                                                    </svg>  
                                                    @else
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="10" cy="10" r="10" fill="#008000" />
                                                </svg>
                                                @endif
                                            </div>
                                            <div class="">
                                                <p class="id-text">{{ $coform->customer_id }}</p>
                                                <p class="date-text">
                                                    {{ $coform->created_at->todatestring() }}
                                                </p>
                                            </div>
                                            <div class="">
                                                <p class="name-text mb-1"> Name : <span class="name-para">{{
                                                        $coform->name }}</span></p>
                                                <p class="name-text mb-1"> Bank : <span class="name-para">{{
                                                        $coform->bank_name }}</span>
                                                </p>
                                                <p class="name-text mb-1"> Mobile Number : <span class="name-para">{{
                                                        $coform->mobile }}</span></p>
                                            </div>
                                        </div>
                                        <div class="">
                                            @if ($coform->tran_status == '1')

                                            @else
                                            {{-- <p class="name-text mb-1">47:38:25</p> --}}
                                            @endif
                                            <p class="name-text mb-1">Rs.{{ $coform->get_ammount }}</p>
                                        </div>
                                    </div>




                                    <div class="row">


                                        <form action="{{ route('user.conformetion', $coform->sender_id) }}"
                                            method="POST">
                                            @csrf
                                            @method('post')
                                            <div class="col-xl-12 d-flex justify-content-end gap-2">


                                                @if ($coform->tran_status == '1')
                                                <button type="button" class="btn btn-payment">Conformation
                                                    Done</button>
                                                @else

                                                <input type="hidden" name="id" value="{{  $coform->id }}">
                                                <input type="hidden" name="provide_help_id"
                                                    value="{{  $coform->provide_help_id  }}">
                                                <input type="hidden" name="get_ammount"
                                                    value="{{  $coform->get_ammount  }}">
                                                <input type="hidden" name="receiver_id" value="{{ Auth::user()->id }}">
                                                <input type="hidden" name="unique_pin"
                                                    value="{{ $coform->unique_pin }}">
                                                    @if(!empty($coform->image))
                                                <button type="submit" class="btn btn-payment">confirm</button>
                                                @else
                                                @endif
                                                @endif

                                                {{-- image model --}}
                                                @if(!empty($coform->image))
                                                <button type="button" class="btn btn-payment" data-toggle="modal"
                                                    data-target=".{{ $coform->id }}-modal3-lg"
                                                    data-id="{{ $coform->user_id }}"
                                                    data-image="{{ $coform->image }}">View
                                                    Image</button>
                                                    @else
                                                    @endif

                                                <!-- Large modal -->


                                               
                                            <div class="modal fade bd-example-modal3-lg {{ $coform->id }}-modal3-lg"
                                                tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                aria-hidden="true">
                                                
                                                <div class="modal-dialog modal3-lg">
                                                    <div class="modal-content image-modal" style=" ">
                                                        <div class="image-position">
                                                            <img id="image"
                                                                src="{{ asset('user/assets/img/payment/'.$coform->image) }}" style=" " />
                                                            <div class="cancel-button">
                                                                {{-- <i class="fad fa-window-close" style="--fa-primary-color: #e01b24; --fa-secondary-color: #e01b24; --fa-secondary-opacity: 0.7;" data-dismiss="modal" ></i> --}}
                                                                <button type="button" class="btn-close button-close" data-dismiss="modal" aria-label="Close"></button>
                                                            
                                                            
                                                            </div>    
                                                
                                                        </div>    
                                                     </div>
                                                </div>
                                            </div>
                                            
                                                {{-- image model end --}}



                                                @if ($coform->tran_status == '1')

                                                @else

                                                <div class="dropdown ">
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show dropdown-toggle"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown"
                                                            aria-expanded="false">Details</button>

                                                        <div class="demo">
                                                            <div
                                                                  
                                                                        class="tooltip-content dropdown-menu details-div">
                                                                        <p class="name-text mb-1"> Name : <span
                                                                                class="name-para">{{
                                                                                $coform->name;
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Mobile No. : <span
                                                                                class="name-para">{{
                                                                                $coform->mobile
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Ifsc Code : <span
                                                                                class="name-para">{{
                                                                                $coform->ifsc_code
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Account No: <span
                                                                                class="name-para">{{
                                                                                $coform->account_no
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Upi Link: <span
                                                                                class="name-para">{{
                                                                                $coform->upi_link
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Phone Pay No: <span
                                                                                class="name-para">{{
                                                                                $coform->upi_link
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Google Pay No: <span
                                                                                class="name-para">{{
                                                                                $coform->google_pay_no
                                                                                }}</span>
                                                                        </p>
                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endif

                                            </div>

                                        </form>
                                    </div>

                                </div><br>
                                
                                @endforeach
                                @else
                                        <h3> Get help Data Not Found</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">...</div>
                    <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab"
                        tabindex="0">
                        <div class="">
                            <div class="">
                                <div class="row">
                                  @if(count($showusers)>0)
                                   
                                    <div class="col-xl-6">
                                        @foreach ($showusers as $show)
                                        {{-- mycode payment done after show this code --}}

                                        <div class="pay-card responsive-card">
                                            <div class=" d-flex justify-content-between">
                                                <div class="flex-amount">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#008000" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">
                                                            {{ $show->receiverUser ?
                                                            $show->receiverUser->customer_id :
                                                            '' }}
                                                        </p>
                                                        {{-- {{ dd($user->receiverUser) }} --}}
                                                        {{-- <p class="date-text">{{ $user->receiverUser ?
                                                            $user->receiverUser->created_at :
                                                            ""->todatestring()}}</p>
                                                        --}}
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span class="name-para">{{
                                                                $show->receiverUser ?
                                                                $show->receiverUser->name : ''
                                                                }}</span>
                                                        </p>

                                                        <p class="name-text mb-1"> Bank : <span class="name-para">{{
                                                                $show->receiverUser ?
                                                                $show->receiverUser->bank_name :
                                                                '' }}</span>
                                                        </p>
                                                        <p class="name-text mb-1"> Mobile Number : <span
                                                                class="name-para">{{
                                                                $show->receiverUser ?
                                                                $show->receiverUser->mobile : ''
                                                                }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    {{-- <p class="name-text mb-1">47:38:25</p> --}}
                                                    <input type="hidden" id="start_date_timer"
                                                        value="{{ isset($currentDate) && !empty($currentDate) ? $currentDate : date("
                                                        Y-m-d h:i:s") }}">
                                                    <input type="hidden" id="end_date_timer"
                                                        value="{{ $show->end_date }}">
                                                    <input type="hidden" id="payment_success_date"
                                                        value="{{ $show->payment_success_date }}">
                                                    <input type="hidden" id="payment_status" class="payment_status"
                                                        value="{{ $show->tran_status }}">
                                                    <p class="name-text mb-1" id="user2_timer"></p>

                                                    <p class="name-text mb-1">
                                                        Rs.{{ $show->get_ammount }} </p>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    {{-- <button type="button" onclick="importData()"
                                                        class="btn btn-payment">Payment
                                                        Image</button> --}}
                                                    {{-- image model --}}

                                                    <button type="button" class="btn btn-payment" data-toggle="modal"
                                                        data-target=".{{ $show->id }}-modal4-lg"
                                                        data-id="{{ $show->show }}" data-image="{{ $show->image }}">View
                                                        Image</button>


                                                    <!-- Large modal -->


                                                    <div class="modal fade bd-example-modal4-lg {{ $show->id }}-modal4-lg"
                                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                        aria-hidden="true">
                                                        
                                                        <div class="modal-dialog modal4-lg">
                                                            <div class="modal-content image-modal" style=" ">
                                                                <div class="image-position">
                                                                    <img id="image"
                                                                        src="{{ asset('user/assets/img/payment/'.$show->image) }}" style=" " />
                                                                    <div class="cancel-button">
                                                                        {{-- <i class="fad fa-window-close" style="--fa-primary-color: #e01b24; --fa-secondary-color: #e01b24; --fa-secondary-opacity: 0.7;" data-dismiss="modal" ></i> --}}
                                                                        <button type="button" class="btn-close button-close" data-dismiss="modal" aria-label="Close"></button>
                                                                    
                                                                    
                                                                    </div>    
                                                        
                                                                </div>    
                                                             </div>
                                                        </div>
                                                    </div>
                                                    {{-- Image model End --}}
                                                    <div class="dropdown ">
                                                        <div class="details-tip">
                                                            <button type="button"
                                                                class="btn btn-payment details-show dropdown-toggle"
                                                                type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">Details</button>

                                                            <div class="demo">
                                                                <div class="tooltip-content dropdown-menu details-div">
                                                                    <p class="name-text mb-1"> Name : <span
                                                                            class="name-para">{{
                                                                            $show->receiverUser ?
                                                                            $show->receiverUser->name : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Mobile No. :
                                                                        <span class="name-para">{{
                                                                            $show->receiverUser ?
                                                                            $show->receiverUser->mobile : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Ifsc Code :
                                                                        <span class="name-para">{{
                                                                            $show->receiverUser ?
                                                                            $show->receiverUser->ifsc_code :
                                                                            ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Account No:
                                                                        <span class="name-para">{{
                                                                            $show->receiverUser ?
                                                                            $show->receiverUser->account_no
                                                                            : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Upi Link:
                                                                        <span class="name-para">{{
                                                                            $show->receiverUser ?
                                                                            $show->receiverUser->upi_link :
                                                                            '' }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Phone Pay No:
                                                                        <span class="name-para">{{
                                                                            $show->receiverUser ?
                                                                            $show->receiverUser->phone_pay_no
                                                                            : ''
                                                                            }}</span>
                                                                    </p>
                                                                    <p class="name-text mb-1"> Google Pay
                                                                        No: <span class="name-para">{{
                                                                            $show->receiverUser ?
                                                                            $show->receiverUser->google_pay_no
                                                                            : ''
                                                                            }}</span>
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>

                                        @endforeach  </div><br>
                                   
                                @else

                                        <h3>History Data Not Found</h3>
                                @endif
                                    {{-- my code Finish --}}
                                  
                                    <div class="col-xl-6">
                                        @foreach ($conform as $coform)
                                        @if ($coform->tran_status == '1')
                                        <div class="pay-card-1">

                                            <div class=" d-flex justify-content-between">
                                                <div class="flex-amount">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#008000" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">{{ $coform->customer_id }}</p>
                                                        <p class="date-text">
                                                            {{ $coform->created_at->todatestring() }}
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span class="name-para">{{
                                                                $coform->name }}</span></p>
                                                        <p class="name-text mb-1"> Bank : <span class="name-para">{{
                                                                $coform->bank_name }}</span>
                                                        </p>
                                                        <p class="name-text mb-1"> Mobile Number : <span
                                                                class="name-para">{{
                                                                $coform->mobile }}</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    @if ($coform->tran_status == '1')

                                                    @else

                                                    @endif
                                                    <p class="name-text mb-1">Rs. {{ $coform->get_ammount }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <form action="{{ route('user.conformetion', $coform->sender_id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('post')
                                                    <div class="col-xl-12 d-flex justify-content-end gap-2">



                                                        <button type="button" class="btn btn-payment">Conformation
                                                            Done</button>


                                                        {{-- image model --}}

                                                        <button type="button" class="btn btn-payment"
                                                            data-toggle="modal"
                                                            data-target=".{{ $coform->id }}-modal5-lg"
                                                            data-id="{{ $coform->user_id }}"
                                                            data-image="{{ $coform->image }}">View
                                                            Image</button>


                                                        <!-- Large modal -->


                                                        <div class="modal fade bd-example-modal5-lg {{ $coform->id }}-modal5-lg"
                                                            tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                            aria-hidden="true">
                                                            
                                                            <div class="modal-dialog modal5-lg">
                                                                <div class="modal-content image-modal" style=" ">
                                                                    <div class="image-position">
                                                                        <img id="image"
                                                                            src="{{ asset('user/assets/img/payment/'.$coform->image) }}" style=" " />
                                                                        <div class="cancel-button">
                                                                            {{-- <i class="fad fa-window-close" style="--fa-primary-color: #e01b24; --fa-secondary-color: #e01b24; --fa-secondary-opacity: 0.7;" data-dismiss="modal" ></i> --}}
                                                                            <button type="button" class="btn-close button-close" data-dismiss="modal" aria-label="Close"></button>
                                                                        
                                                                        
                                                                        </div>    
                                                            
                                                                    </div>    
                                                                 </div>
                                                            </div>
                                                        </div>
                                                        {{-- image model end --}}



                                                        @if ($coform->tran_status == '1')


                                                        @else

                                                        <div class="details-tip">
                                                            <button type="button"
                                                                class="btn btn-payment details-show">Details</button>
                                                     

                                                                <div
                                                                  
                                                                        class="tooltip-content dropdown-menu details-div">
                                                                        <p class="name-text mb-1"> Name : <span
                                                                                class="name-para">{{
                                                                                $coform->name;
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Mobile No. : <span
                                                                                class="name-para">{{
                                                                                $coform->mobile
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Ifsc Code : <span
                                                                                class="name-para">{{
                                                                                $coform->ifsc_code
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Account No: <span
                                                                                class="name-para">{{
                                                                                $coform->account_no
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Upi Link: <span
                                                                                class="name-para">{{
                                                                                $coform->upi_link
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Phone Pay No: <span
                                                                                class="name-para">{{
                                                                                $coform->upi_link
                                                                                }}</span>
                                                                        </p>
                                                                        <p class="name-text mb-1"> Google Pay No: <span
                                                                                class="name-para">{{
                                                                                $coform->google_pay_no
                                                                                }}</span>
                                                                        </p>
                                                                    
                                                            </div>
                                                     
                                                        @endif

                                                    </div>

                                                </form>
                                            </div>
                                            
                                        </div><br>
                                        @else

                                        @endif
                                   @endforeach  </div><br>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div id="preloader"></div> --}}
{{-- @if(Auth::user()->status==1)
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a> --}}
<!-- Modal-1 -->
{{-- <div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header header-modify">
                <h3 class="modal-head text-center mb-0">Welcome!</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-auto">
                        <div class="">
                            <h4 class="name-text-1">Pin:</h4>
                        </div>
                        <h4 class="name-text-1">Provide Help:</h4>
                        <h4 class="name-text-1">Get Help:</h4>
                    </div>
                    <div class="col-auto">
                        <div>
                            <h4 class="name-para-1">Rs.500</h4>
                        </div>
                        <h4 class="name-para-1">Rs.1000</h4>
                        <h4 class="name-para-1">Rs.2000</h4>
                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="button" class="btn btn-form-1 w-100" data-bs-dismiss="modal"
                            aria-label="Close">Start</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @else
@endif --}}


@if ($data->ammount_Received == 'null' || $data->get_help_ammount == $data->ammount_Received ||
Auth::user()->status = Null )
<div class="modal fade pop-modal dataModel" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static"
    data-bs-keyboard="false">


    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header header-modify">
                <p class="text-center modal-head mb-0">Enter Pin</p>
                {{-- <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <p><button type="submit" class="btn">Logout</button></p>
                </form> --}}
                <form action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            </div>
            <div class="modal-body">
                @if (Session::has('error'))
                <p class="alert session-error {{ Session::get('alert-class', 'alert-info')}}" style="color: red">
                    {{ Session::get('error') }}
                </p>
                @endif
                <form action="{{ route('user.pinactive', Auth::user()->id) }}" id="pinpop" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-xl-12 mb-3 form-class form-adjust">
                            <input class="form-control" placeholder="Please Enter a Pin" name="pin_number"></input>
                            <input type='hidden' id='hasta' value='<?php echo date(' Y-m-d'); ?>' name="date">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-form mt-3 w-100" >Activate</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- @endif --}}
@endif

<!-- popup re-enter pin model -->
@if(!empty(Auth::user()->unique_pin) && !empty($congoPopUp->unique_id) )
@if(Auth::user()->unique_pin != $congoPopUp->unique_id)
<div class="modal fade pop-modal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static"
    data-bs-keyboard="false" id="dataModel">
    @if (Session::has('error'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}" style="color: red">
        {{ Session::get('error') }}
    </p>
    @endif
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header header-modify">
                <p class="text-center modal-head mb-0">Enter Pin</p>
                {{-- <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('post')
                    <p><button type="submit" class="btn">Logout</button></p>
                </form> --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.pinactive', Auth::user()->id) }}" method="post" id="pinpop">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-xl-12 mb-3 form-class form-adjust">
                            <input class="form-control" placeholder="Please Enter a Pin" name="pin_number">
                            <input type='hidden' id='hasta' value='<?php echo date(' Y-m-d'); ?>' name="date">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-form mt-3 w-100" >Activate</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
@endif
<!-- popup rnter pin model -->

<!-- congratulation popup start  -->

@if($data->status !=null && $data->get_help_ammount == $data->get_help_ammount && $data->ammount_pendding == 0)


<div class="modal fade pop-modal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static"
    data-bs-keyboard="false">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header header-modify header-position">
                <div class="cross-btn"><button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close" id="closeBtn"></button></div>
            </div>
            <div>
                @if(isset($data->ammount_Received) && !empty($data->ammount_Received ))
                <p class="text-center modal-head mb-0" style="font-size: 20px;
        font-weight: 700;">Congratulation You Have Completed !!!<br>You got {{$data->ammount_Received}} by providing
                    help of {{$data->provide_help_ammount}} </p>
                @endif
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <img style="vertical-align: middle;
                height: 150px" src="{{asset('user/assets/img/congratulations-congrats.gif')}}">
                </div>
            </div>
        </div>

    </div>
</div>

{{-- @endif --}}
@endif
<!-- congratulation popup end  -->

</div>

{{-- pop up start --}}
{{-- pop up end--}}

@endsection

@section('custom_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<!-- start hide data after completion -->
<script>
    $("document").ready(function() {
        $('#closeBtn').on('click', function() {
            $('#dataModel').modal('show');
       
        });
      
    });
</script>
<!-- end hide data after completion -->

<script>
    var startdate = $('.start_date_timer');
    $.each(startdate, function(key, val) {
        var id = $(val).data('id');
        var startdate = $(val).val();
        var payment_success_date = $('#payment_success_date_' + id).val();
        var enddate = $('#end_date_timer_' + id).val();
        var paymentstatus = $('.payment_status_' + id).val();
        var user_Id = $('.userId').val();
        var diffTimer = moment(enddate).diff(startdate);
        var duration = moment.duration(diffTimer, 'milliseconds');
        // console.log(duration);
        var interval = 1000;
        if (paymentstatus != 1) {
            setInterval(function() {
                // console.log(diffTimer);
                var diffHours = moment(enddate).diff(startdate, 'hours');
                if (diffTimer > 0) {
                    duration = moment.duration(duration - interval, 'milliseconds');
                    $('#user_timer_' + id).text(diffHours + ":" + moment(duration.minutes(), 'mm').format("mm") + ":" + moment(duration.seconds(), 'ss').format("ss"));
                    $('#user1_timer_' + id).text(diffHours + ":" + moment(duration.minutes(), 'mm').format("mm") + ":" + moment(duration.seconds(), 'ss').format("ss"));
                } else {
                    $('#user_timer_' + id).text("00:00:00");
                }
            }, interval);
        } else {
            var payment_success_date = $('#payment_success_date_' + id).val();
            console.log(payment_success_date);
            var enddate = $('#end_date_timer_' + id).val();
            var paymentstatus = $('#payment_status_' + id).val();
            var diffTimer = moment(enddate).diff(payment_success_date);
            var duration = moment.duration(diffTimer, 'milliseconds');
            var diffHours = moment(enddate).diff(payment_success_date, 'hours');
            if (diffTimer > 0) {
                duration = moment.duration(duration - interval, 'milliseconds');
                $('#user_timer_' + id).text(diffHours + ":" + moment(duration.minutes(), 'mm').format("mm") + ":" + moment(duration.seconds(), 'ss').format("ss"));
                $('#user1_timer_' + id).text(diffHours + ":" + moment(duration.minutes(), 'mm').format("mm") + ":" + moment(duration.seconds(), 'ss').format("ss"));
                $('#user2_timer_' + id).text(diffHours + ":" + moment(duration.minutes(), 'mm').format("mm") + ":" + moment(duration.seconds(), 'ss').format("ss"));
            } else {
                $('#user_timer_' + id).text("00:00:00");
                $('#user1_timer_' + id).text("00:00:00");
                $('#user2_timer_' + id).text("00:00:00");
            }

            var userId = $('.userId').val();
            var status = '0';
            var url = "{{ url('user/deactive/') }}";

            var actionUrl = "{{ url('user/deactive/') }}" + '/' + "{{ $userId }}";
            $.ajax({
                type: 'GET',
                url: actionUrl,
                data: {
                    status: status,
                },
                success: function(data) {
                    $('#result').html(data.msg);
                }
            });
        }
    });
</script>

<script>
    function process(input) {
        let value = input.value;
        let numbers = value.replace(/[^0-9]/g, "");
        input.value = numbers;
    }

    function validateInput(input) {
        // input.value = input.value.replace(/[^a-zA-Z]/g,'');
        input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
    }
</script>


<script>
    $("document").ready(function() {
        setTimeout(function() {
            $(".session-error").remove();
        }, 5000); // 5 secs
    });
</script>

<script>
    $(document).ready(function() {
        $("#pinpop").validate({
            errorClass: "error fail-alert",
            validClass: "valid success-alert",
            rules: {
                pin_number: {
                    required: true,
                },
                

            },
            messages: {
                pin_number: {
                    required: 'Please Enter Pin',
                },
                
            }
        });
    });
</script>

<script>
$('input[type="submit"]').prop("disabled", true);
var a=0;
//binds to onchange event of your input field
$('#picture').bind('change', function() {
if ($('input:submit').attr('disabled',false)){
	$('input:submit').attr('disabled',true);
	}
var ext = $('#picture').val().split('.').pop().toLowerCase();
if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
	$('#error1').slideDown("slow");
	$('#error2').slideUp("slow");
   
	a=0;
	}else{
            var picsize = (this.files[0].size);
            if (picsize > 5000000){
            $('#error2').slideDown("slow");
            a=0;
            }else{
            a=1;
            $('#error2').slideUp("slow");
            }
            $('#error1').slideUp("slow");
       
	
}     if (a==0){
    
      $('#submit').attr('disabled',true);
      }
});
</script>
<script>
    $(document).ready(function() {
        $("#ProfileForm").validate({
            errorClass: "error fail-alert",
            validClass: "valid success-alert",
            rules: {
                name: {
                    required: true,
                },
                state: {
                    required: true,
                },
                city: {
                    required: true,
                },
                pin_code: {
                    required: true,
                },
                bank_name: {
                    required: true,
                },
                account_no: {
                    required: true,
                },
                ifsc_code: {
                    required: true,
                },

            },
            messages: {
                name: {
                    required: 'Please Enter Name',
                },
                state: {
                    required: 'Please Enter The State',
                },
                city: {
                    required: 'Please Enter The City',
                },
                pin_code: {
                    required: 'Please Enter The Pin Code',
                },
                bank_name: {
                    required: 'Please Enter The Bank Name',
                },
                account_no: {
                    required: 'Please Enter The Account Number',
                },
                ifsc_code: {
                    required: 'Please Enter The IFSC Code',
                },

            }
        });
    });
</script>


<script>
    $('input[type="submit"]').prop("disabled", true);
    var a=0;
    //binds to onchange event of your input field
    $('#picture1').bind('change', function() {
    if ($('input:submit').attr('disabled',false)){
        $('input:submit').attr('disabled',true);
        }
    var ext = $('#picture1').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
        $('#error3').slideDown("slow");
        $('#error4').slideUp("slow");
       
        a=0;
        }else{
                var picsize = (this.files[0].size);
                if (picsize > 5000000){
                $('#error4').slideDown("slow");
                a=0;
                }else{
                a=1;
                $('#error4').slideUp("slow");
                }
                $('#error3').slideUp("slow");
           
        
    }     if (a==0){
        
          $('#submit1').attr('disabled',true);
          }
    });
    </script>
    
@endsection