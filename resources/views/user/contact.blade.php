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
               <div class="col-lg-12 ">
               
              
                <div class="row">
                <div class="col-lg-12">
                    @if (Session::has('message'))
                        <p class="alert alert-info session-error">{{ Session::get('message') }}</p>
                    @endif
                    <form action="{{ route('user.contactus') }}" method="POST" class="php-email-form" id="ContactForm">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="user_name" class="form-control"  
                                    placeholder="Enter Name" required oninput="validateInput(this)" maxlength="15">
                            </div>
                            <div class="col form-group">
                                <input type="number" class="form-control" name="mobile"  
                                    placeholder="Enter Mobile Number" oninput="validateInput(this)" required maxlength="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" oninput="validateInput(this)" maxlength="150" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="user_message" oninput="validateInput(this)" maxlength="200" rows="5" placeholder="Message" required></textarea>
                        </div>
                        {{-- <div class="my-3">
                            <div class="loading">Loading</div>
                             
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}
                        
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                    </div>
                </div>
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
                    mobile: {
                        required: true,
                        
                    },
                    subject: {
                        required: true,
                    },
                    user_message: {
                        required: true,
                        maxlength: 200,
                    },
                    
                },
                messages: {
                    user_name: {
                        required: 'Enter Name',
                    },
                    mobile: {
                        required: 'Enter Mobile Number',
                        
                    },
                    subject: {
                        required: 'Enter Subject',
                    },
                    user_message: {
                        required: 'Enter The Message',
                        maxlength:'Allow Only 200 Words',
                    },
                }
            });
        });
    </script>
    <script>
    $("document").ready(function() {
        setTimeout(function() {
            $(".session-error").remove();
        }, 5000); // 5 secs
    });
</script>

@endsection
