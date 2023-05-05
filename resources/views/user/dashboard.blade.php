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
                        <button type="button" class="btn btn-logout w-100">Logout</button>
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
                        <div class="row mb-5">
                            <div class="">
                                <div class="col-xl-12">
                                    <h4 class="profile-tag">Personal Detail</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 form-adjust">
                                    <label>Name</label>
                                    <input type="text" placeholder="Name by Bank name" class="form-control">
                                </div>
                                <div class="col-xl-6 mb-3 form-adjust">
                                    <label>Mobile No.</label>
                                    <input type="text" placeholder="10 digit mobile no." class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 mb-3 form-class form-adjust">
                                    <label>State</label>
                                    <input class="form-control" placeholder="Punjab"></input>
                                </div>
                                <div class="col-xl-4 mb-3 form-class form-adjust">
                                    <label>City</label>
                                    <input class="form-control" placeholder="Ludhiana"></input>
                                </div>
                                <div class="col-xl-4 mb-3 form-class form-adjust">
                                    <label>Pin Code</label>
                                    <input class="form-control" placeholder="853698"></input>
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
                                    <input type="text" placeholder="Name by bank name" class="form-control">
                                </div>
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>A/C No.</label>
                                    <input type="text" placeholder="xxxxxxxxxxxxxxxx" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>IFSC CODE</label>
                                    <input type="text" placeholder="SBIN001992" class="form-control">
                                </div>
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>Phone pay No.</label>
                                    <input type="text" placeholder="99854854589" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>Google pay No.</label>
                                    <input type="text" placeholder="99854854589" class="form-control">
                                </div>
                                <div class="col-xl-6 mb-3 form-class form-adjust">
                                    <label>Upi Link</label>
                                    <input type="text" placeholder="99854854589@yb" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <button type="button" class="btn btn-form">Edit</button>
                                    <button type="button" class="btn btn-form-1">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
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

@endsection