@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            @if (Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
            <div class="card-body p-0">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">CONTACT US LIST</h6>
                </div>
                <!-- DataTales Example -->

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr.no</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                     

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($contact as $row)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $row->user_name }}</td>
                                        <td>{{ $row->subject }}</td>
                                        <td>{{ $row->user_message }}</td>
                                        {{-- <td><a class="examps"> helo</a></td> --}}
                                       

                                     

                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach

                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $(".examps").click(function() {
                            var mobile = $(this).data('mobile');
                            $("#mobile").val(mobile);


                        });
                    });
                </script>
                {{-- <script>
                    $(document).ready(function() {
                        $('#example').DataTable();
                    });


                    $(document).on('click', '.d', function() {
                        alert(123)

                        var id = $(this).data('id');
                        var name = $(this).data('name');


                        $('.id').val(id)
                        $('.name').val(name)


                    });
                </script> --}}

            </div>
        </div>
    </div>
@endsection
