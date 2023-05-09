@extends('user.layouts.master')

@section('master')
<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Dashboard</h2>
            <h3>Find Out More <span>Dashboard</span></h3>
        </div> 
    </div>
</section>
<section class="adjust-margin">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 ">
                <div class="tab-background">
                    <!-- <div class="sidebar-flex"> -->
                    <div class="profile-img">
                        <img src="assets/img/testimonials-bg.jpg">
                    </div>
                    <div class="tab-menu">
                        <ul class="nav nav-pills tab-list" id="myTab" role="tablist">
                            <li class="nav-item typo-tab" role="presentation">
                                <button class="nav-link tab-text active tab-padding w-100 text-left" id="Dashboard"
                                    data-bs-toggle="tab" data-bs-target="#Dashboard-tab-pane" type="button"
                                    role="tab" aria-controls="home-tab-pane" aria-selected="true">Dashboard</button>
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
                                <button class="nav-link tab-text tab-padding w-100" id="get-tab"
                                    data-bs-toggle="tab" data-bs-target="#get-tab-pane" type="button" role="tab"
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
                                    <div class="col-xl-6">
                                        <div class="pay-card responsive-card">
                                            <div class=" d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#FF3D3D" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">ID U17000</p>
                                                        <p class="date-text">28-12-2023</p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span></p>
                                                        <p class="name-text mb-1"> Bank : <span
                                                                class="name-para">Axis Bank</span></p>
                                                        <p class="name-text mb-1"> Mo.No : <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1">47:38:25</p>
                                                    <p class="name-text mb-1">Rs. 1000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    <button type="button" onclick="importData()" class="btn btn-payment">Payment
                                                        Image</button>
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show">Details</button>
                                                        <div class="tooltip-content details-div">
                                                            <p class="name-text mb-1"> Name : <span
                                                                    class="name-para">Ajay rajkishor mahto</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. : <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">SBIN0001093</span></p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">20015370793</span></p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">9773856598@yb</span></p>
                                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Google Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
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
                                                        <p class="id-text">ID U17000</p>
                                                        <p class="date-text">28-12-2023</p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span></p>
                                                        <p class="name-text mb-1"> Bank : <span
                                                                class="name-para">Axis Bank</span></p>
                                                        <p class="name-text mb-1"> Mo.No : <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1">47:38:25</p>
                                                    <p class="name-text mb-1">Rs. 1000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    <button type="button" class="btn btn-payment">confirm</button>
                                                    <button type="button" class="btn btn-payment">Payment
                                                        Image</button>
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show">Details</button>
                                                        <div class="tooltip-content details-div">
                                                            <p class="name-text mb-1"> Name : <span
                                                                    class="name-para">Ajay rajkishor mahto</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. : <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">SBIN0001093</span></p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">20015370793</span></p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">9773856598@yb</span></p>
                                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Google Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pay-card-1 mt-2">
                                            <div class=" d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#7AE868" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">ID U17000</p>
                                                        <p class="date-text">28-12-2023</p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span></p>
                                                        <p class="name-text mb-1"> Bank : <span
                                                                class="name-para">Axis Bank</span></p>
                                                        <p class="name-text mb-1"> Mo.No : <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1">47:38:25</p>
                                                    <p class="name-text mb-1">Rs. 1000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    <button type="button" class="btn btn-payment">confirm</button>
                                                    <button type="button" class="btn btn-payment">Payment
                                                        Image</button>
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show">Details</button>
                                                        <div class="tooltip-content details-div">
                                                            <p class="name-text mb-1"> Name : <span
                                                                    class="name-para">Ajay rajkishor mahto</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. : <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">SBIN0001093</span></p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">20015370793</span></p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">9773856598@yb</span></p>
                                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Google Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- profile-tab-content -->
                   
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <form action="{{ route('user.profileupdate',Auth::user()->id) }}" method="POST">
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
                                    <input type="text" placeholder="Name by Bank name" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="col-xl-6 mb-3 form-adjust">
                                    <label>Mobile No.</label>
                                    <input type="text" placeholder="10 digit mobile no." class="form-control" value="{{ Auth::user()->mobile }}" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 mb-3 form-class form-adjust">
                                    <label>State</label>
                                    <input class="form-control" placeholder="Punjab" name="state" value="{{ Auth::user()->state }}"></input>
                                </div>
                                <div class="col-xl-4 mb-3 form-class form-adjust">
                                    <label>City</label>
                                    <input class="form-control" placeholder="Ludhiana" name="city" value="{{ Auth::user()->city }}"></input>
                                </div>
                                <div class="col-xl-4 mb-3 form-class form-adjust">
                                    <label>Pin Code</label>
                                    <input class="form-control" placeholder="853698" name="pin_code"value="{{ Auth::user()->pin_code }}"></input>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mb-3">
                                <h4 class="profile-tag">Bank Detail</h4>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>Bank Name</label>
                                    <input type="text" placeholder="Name by bank name" class="form-control" name="bank_name" value="{{ Auth::user()->bank_name}}">
                                </div>
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>A/C No.</label>
                                    <input type="text" placeholder="xxxxxxxxxxxxxxxx" class="form-control" name="account_no" value="{{ Auth::user()->account_no}}" oninput="process(this)" maxlength="20">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>IFSC CODE</label>
                                    <input type="text" placeholder="SBIN001992" class="form-control" name="ifsc_code" value="{{ Auth::user()->ifsc_code}}" onkeyup="
                                    var start = this.selectionStart;
                                    var end = this.selectionEnd;
                                    this.value = this.value.toUpperCase();
                                    this.setSelectionRange(start, end);
                                  ">
                                </div>
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>Phone pay No.</label>
                                    <input type="text" placeholder="99854854589" class="form-control" name="phone_pay_no" value="{{ Auth::user()->phone_pay_no}}" oninput="process(this)" maxlength="10">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>Google pay No.</label>
                                    <input type="text" placeholder="99854854589" class="form-control" name="google_pay_no" value="{{ Auth::user()->google_pay_no}}" oninput="process(this)" maxlength="10">
                                </div>
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>Upi Link</label>
                                    <input type="text" placeholder="99854854589@yb" class="form-control" name="upi_link" value="{{ Auth::user()->upi_link}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    {{-- <button type="button" class="btn btn-form">Edit</button> --}}
                                    <button type="submit" class="btn btn-form-1">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>   </div>
               
                    <div class="tab-pane fade" id="provide-tab-pane" role="tabpanel" aria-labelledby="provide-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="">
                                    <div class="pay-card responsive-card">
                                        <div class=" d-flex justify-content-between">
                                            <div class="d-flex gap-3">
                                                <div class="">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="10" cy="10" r="10" fill="#FF3D3D" />
                                                    </svg>
                                                </div>
                                                <div class="">
                                                    <p class="id-text">ID U17000</p>
                                                    <p class="date-text">28-12-2023</p>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1"> Name : <span class="name-para">Ajay
                                                            rajkishor mahto</span></p>
                                                    <p class="name-text mb-1"> Bank : <span class="name-para">Axis
                                                            Bank</span></p>
                                                    <p class="name-text mb-1"> Mo.No : <span
                                                            class="name-para">9773856598</span></p>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="name-text mb-1">47:38:25</p>
                                                <p class="name-text mb-1">Rs. 1000</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                <button type="button" class="btn btn-payment">Payment
                                                    Image</button>
                                                <div class="details-tip">
                                                    <button type="button"
                                                        class="btn btn-payment details-show">Details</button>
                                                    <div class="tooltip-content details-div">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span>
                                                        </p>
                                                        <p class="name-text mb-1"> Mobile No. : <span
                                                                class="name-para">9773856598</span></p>
                                                        <p class="name-text mb-1"> Ifsc Code : <span
                                                                class="name-para">SBIN0001093</span></p>
                                                        <p class="name-text mb-1"> Account No: <span
                                                                class="name-para">20015370793</span></p>
                                                        <p class="name-text mb-1"> Upi Link: <span
                                                                class="name-para">9773856598@yb</span></p>
                                                        <p class="name-text mb-1"> Phone Pay No: <span
                                                                class="name-para">9773856598</span></p>
                                                        <p class="name-text mb-1"> Google Pay No: <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel"
                            aria-labelledby="disabled-tab" tabindex="0">...</div>
                    </div>
                    <div class="tab-pane fade" id="get-tab-pane" role="tabpanel" aria-labelledby="get-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="">
                                </div>
                                <div class="pay-card-1 responsive-card">
                                    <div class=" d-flex justify-content-between">
                                        <div class="d-flex gap-3">
                                            <div class="">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="10" cy="10" r="10" fill="#7AE868" />
                                                </svg>
                                            </div>
                                            <div class="">
                                                <p class="id-text">ID U17000</p>
                                                <p class="date-text">28-12-2023</p>
                                            </div>
                                            <div class="">
                                                <p class="name-text mb-1"> Name : <span class="name-para">Ajay
                                                        rajkishor mahto</span></p>
                                                <p class="name-text mb-1"> Bank : <span class="name-para">Axis
                                                        Bank</span></p>
                                                <p class="name-text mb-1"> Mo.No : <span
                                                        class="name-para">9773856598</span></p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <p class="name-text mb-1">47:38:25</p>
                                            <p class="name-text mb-1">Rs. 1000</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 d-flex justify-content-end gap-2">
                                            <button type="button" class="btn btn-payment">confirm</button>
                                            <button type="button" class="btn btn-payment">Payment
                                                Image</button>
                                            <div class="details-tip">
                                                <button type="button"
                                                    class="btn btn-payment details-show">Details</button>
                                                <div class="tooltip-content details-div">
                                                    <p class="name-text mb-1"> Name : <span class="name-para">Ajay
                                                            rajkishor mahto</span>
                                                    </p>
                                                    <p class="name-text mb-1"> Mobile No. : <span
                                                            class="name-para">9773856598</span></p>
                                                    <p class="name-text mb-1"> Ifsc Code : <span
                                                            class="name-para">SBIN0001093</span></p>
                                                    <p class="name-text mb-1"> Account No: <span
                                                            class="name-para">20015370793</span></p>
                                                    <p class="name-text mb-1"> Upi Link: <span
                                                            class="name-para">9773856598@yb</span></p>
                                                    <p class="name-text mb-1"> Phone Pay No: <span
                                                            class="name-para">9773856598</span></p>
                                                    <p class="name-text mb-1"> Google Pay No: <span
                                                            class="name-para">9773856598</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                            aria-labelledby="profile-tab" tabindex="0">...</div>
                    </div>
                    <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab"
                        tabindex="0">
                        <div class="">
                            <div class="">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="pay-card responsive-card">
                                            <div class=" d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#FF3D3D" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">ID U17000</p>
                                                        <p class="date-text">28-12-2023</p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span></p>
                                                        <p class="name-text mb-1"> Bank : <span
                                                                class="name-para">Axis Bank</span></p>
                                                        <p class="name-text mb-1"> Mo.No : <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1">47:38:25</p>
                                                    <p class="name-text mb-1">Rs. 1000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    <button type="button" class="btn btn-payment">Payment
                                                        Image</button>
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show">Details</button>
                                                        <div class="tooltip-content details-div">
                                                            <p class="name-text mb-1"> Name : <span
                                                                    class="name-para">Ajay rajkishor mahto</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. : <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">SBIN0001093</span></p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">20015370793</span></p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">9773856598@yb</span></p>
                                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Google Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
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
                                                        <p class="id-text">ID U17000</p>
                                                        <p class="date-text">28-12-2023</p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span></p>
                                                        <p class="name-text mb-1"> Bank : <span
                                                                class="name-para">Axis Bank</span></p>
                                                        <p class="name-text mb-1"> Mo.No : <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1">47:38:25</p>
                                                    <p class="name-text mb-1">Rs. 1000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    <button type="button" class="btn btn-payment">confirm</button>
                                                    <button type="button" class="btn btn-payment">Payment
                                                        Image</button>
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show">Details</button>
                                                        <div class="tooltip-content details-div">
                                                            <p class="name-text mb-1"> Name : <span
                                                                    class="name-para">Ajay rajkishor mahto</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. : <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">SBIN0001093</span></p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">20015370793</span></p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">9773856598@yb</span></p>
                                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Google Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pay-card-1 mt-2">
                                            <div class=" d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#7AE868" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">ID U17000</p>
                                                        <p class="date-text">28-12-2023</p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span></p>
                                                        <p class="name-text mb-1"> Bank : <span
                                                                class="name-para">Axis Bank</span></p>
                                                        <p class="name-text mb-1"> Mo.No : <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1">47:38:25</p>
                                                    <p class="name-text mb-1">Rs. 1000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    <button type="button" class="btn btn-payment">confirm</button>
                                                    <button type="button" class="btn btn-payment">Payment
                                                        Image</button>
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show">Details</button>
                                                        <div class="tooltip-content details-div">
                                                            <p class="name-text mb-1"> Name : <span
                                                                    class="name-para">Ajay rajkishor mahto</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. : <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">SBIN0001093</span></p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">20015370793</span></p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">9773856598@yb</span></p>
                                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Google Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pay-card-1 mt-2">
                                            <div class=" d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#7AE868" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">ID U17000</p>
                                                        <p class="date-text">28-12-2023</p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span></p>
                                                        <p class="name-text mb-1"> Bank : <span
                                                                class="name-para">Axis Bank</span></p>
                                                        <p class="name-text mb-1"> Mo.No : <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1">47:38:25</p>
                                                    <p class="name-text mb-1">Rs. 1000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    <button type="button" class="btn btn-payment">confirm</button>
                                                    <button type="button" class="btn btn-payment">Payment
                                                        Image</button>
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show">Details</button>
                                                        <div class="tooltip-content details-div">
                                                            <p class="name-text mb-1"> Name : <span
                                                                    class="name-para">Ajay rajkishor mahto</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. : <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">SBIN0001093</span></p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">20015370793</span></p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">9773856598@yb</span></p>
                                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Google Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pay-card-1 mt-2">
                                            <div class=" d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#7AE868" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">ID U17000</p>
                                                        <p class="date-text">28-12-2023</p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span></p>
                                                        <p class="name-text mb-1"> Bank : <span
                                                                class="name-para">Axis Bank</span></p>
                                                        <p class="name-text mb-1"> Mo.No : <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1">47:38:25</p>
                                                    <p class="name-text mb-1">Rs. 1000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    <button type="button" class="btn btn-payment">confirm</button>
                                                    <button type="button" class="btn btn-payment">Payment
                                                        Image</button>
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show">Details</button>
                                                        <div class="tooltip-content details-div">
                                                            <p class="name-text mb-1"> Name : <span
                                                                    class="name-para">Ajay rajkishor mahto</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. : <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">SBIN0001093</span></p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">20015370793</span></p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">9773856598@yb</span></p>
                                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Google Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pay-card-1 mt-2">
                                            <div class=" d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#7AE868" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">ID U17000</p>
                                                        <p class="date-text">28-12-2023</p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span></p>
                                                        <p class="name-text mb-1"> Bank : <span
                                                                class="name-para">Axis Bank</span></p>
                                                        <p class="name-text mb-1"> Mo.No : <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1">47:38:25</p>
                                                    <p class="name-text mb-1">Rs. 1000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    <button type="button" class="btn btn-payment">confirm</button>
                                                    <button type="button" class="btn btn-payment">Payment
                                                        Image</button>
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show">Details</button>
                                                        <div class="tooltip-content details-div">
                                                            <p class="name-text mb-1"> Name : <span
                                                                    class="name-para">Ajay rajkishor mahto</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. : <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">SBIN0001093</span></p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">20015370793</span></p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">9773856598@yb</span></p>
                                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Google Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pay-card-1 mt-2">
                                            <div class=" d-flex justify-content-between">
                                                <div class="d-flex gap-3">
                                                    <div class="">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#7AE868" />
                                                        </svg>
                                                    </div>
                                                    <div class="">
                                                        <p class="id-text">ID U17000</p>
                                                        <p class="date-text">28-12-2023</p>
                                                    </div>
                                                    <div class="">
                                                        <p class="name-text mb-1"> Name : <span
                                                                class="name-para">Ajay rajkishor mahto</span></p>
                                                        <p class="name-text mb-1"> Bank : <span
                                                                class="name-para">Axis Bank</span></p>
                                                        <p class="name-text mb-1"> Mo.No : <span
                                                                class="name-para">9773856598</span></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="name-text mb-1">47:38:25</p>
                                                    <p class="name-text mb-1">Rs. 1000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 d-flex justify-content-end gap-2">
                                                    <button type="button" class="btn btn-payment">confirm</button>
                                                    <button type="button" class="btn btn-payment">Payment
                                                        Image</button>
                                                    <div class="details-tip">
                                                        <button type="button"
                                                            class="btn btn-payment details-show">Details</button>
                                                        <div class="tooltip-content details-div">
                                                            <p class="name-text mb-1"> Name : <span
                                                                    class="name-para">Ajay rajkishor mahto</span>
                                                            </p>
                                                            <p class="name-text mb-1"> Mobile No. : <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Ifsc Code : <span
                                                                    class="name-para">SBIN0001093</span></p>
                                                            <p class="name-text mb-1"> Account No: <span
                                                                    class="name-para">20015370793</span></p>
                                                            <p class="name-text mb-1"> Upi Link: <span
                                                                    class="name-para">9773856598@yb</span></p>
                                                            <p class="name-text mb-1"> Phone Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                            <p class="name-text mb-1"> Google Pay No: <span
                                                                    class="name-para">9773856598</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>
<!-- Modal-1 -->
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2Label" aria-hidden="true">
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
</div>
<!-- Modal-2 -->
 @if(!empty(Auth::user()->unique_pin))

@else

 
<div class="modal fade pop-modal" tabindex="-1" role="dialog" aria-hidden="true">
    @if(Session::has('error'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}" style="color: red">{{ Session::get('error') }}
    
</p>
@endif
    <form action="{{ route('user.pinactive',Auth::user()->id) }}" method="post">
        @csrf
        @method('POST')
<div class="modal-dialog modal-dialog-centered" role="document">
    
    <div class="modal-content">
        <div class="modal-header header-modify">
           
            <p class="text-center modal-head mb-0">Enter Pin</p>
          
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xl-12 mb-3 form-class form-adjust">
                    <input class="form-control" placeholder="Please Enter a Pin" name="pin_number"></input>
                    <input type='hidden' id='hasta' value='<?php echo date('Y-m-d');?>' name="date">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-form mt-3 w-100" data-bs-dismiss="modal"
                            aria-label="Close" data-bs-toggle="modal" data-bs-target="#modal-2">Activate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</form>
</div>
 
 
@endif
@endsection

<script>        
    function process(input){
   let value = input.value;
   let numbers = value.replace(/[^0-9]/g, "");
   input.value = numbers;

   
 }
 </script>
 