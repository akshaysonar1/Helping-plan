@extends('user.layouts.master')

@section('master')
<style>
        label.error {
            color: red !important;
        }
    </style>
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact Us</h2>
                <h3>Find Out More <span>Get in Touch</span></h3>
            </div>
        </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>contact@example.com</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <form action="{{ route('user.contactus') }}" method="POST" class="php-email-form" id="ContactForm">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="user_name" class="form-control"  
                                    placeholder="Your Name" required oninput="validateInput(this)">
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="user_email"  
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="user_message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        {{-- <div class="my-3">
                            <div class="loading">Loading</div>
                             
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}
                        @if (Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
@endsection
@section('custom_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>
    function process(input) {
        let value = input.value;
        let numbers = value.replace(/[^0-9]/g, "");
        input.value = numbers;
    }
    function validateInput(input) {
        // input.value = input.value.replace(/[^a-zA-Z]/g,'');
            
    }
</script>
    <script>
        $(document).ready(function() {
            $("#ContactForm").validate({
                errorClass: "error fail-alert",
                validClass: "valid success-alert",
                rules: {
                    user_name: {
                        required: true,
                    },
                    user_email: {
                        required: true,
                        regex: /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/,
                    },
                    subject: {
                        required: true,
                    },
                    user_message: {
                        required: true,
                        maxlength: 100,
                    },
                    
                },
                messages: {
                    user_name: {
                        required: 'Please Enter Name',
                    },
                    user_email: {
                        required: 'Please Enter The Email',
                        regex:'Please Enter The Valid E-Mail',
                    },
                    subject: {
                        required: 'Please Enter The Subjct',
                    },
                    user_message: {
                        required: 'Please Enter The Message',
                        maxlength:'Allow Only 200 Words',
                    },
                }
            });
        });
    </script>

@endsection
