@extends('layouts.master')
@section('content')
    <div class="container">
        <input type="hidden" id="csrf-token" value="{{ csrf_token() }}">
        <div class="card o-hidden border-0 shadow-lg my-5">
            @if (Session::has('message'))
            <p class="alert alert-info session-error">{{ Session::get('message') }}</p>
        @endif
            <div class="card-body p-0">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Users Details LIST</h6>
                </div>
                <!-- DataTales Example -->

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr.no</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($details as $row)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->mobile }}</td>
                                        <td>  {{-- <td><a class="examps"> helo</a></td> --}}
                                        
                                        <a href="" style="text-decoration: none"> <button
                                            class="btn btn-danger show_confirm" data-id="{{$row['users_id']}}"
                                            data-status="0">Delete</button></a>
                                            
                                            {{-- <button type="button" class="btn btn-success examps"></button> --}}
                                       
                                    </td>
                                        

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
            

            </div>
        </div>
    </div>
@endsection
@section('custom-js')
<script>
    $("document").ready(function() {
        setTimeout(function() {
            $(".session-error").remove();
        }, 5000); // 5 secs
    });
</script>

<script>
$(document).ready(function() {
            $('#dataTable').DataTable({
                // "aaSorting": [
                //     [4, "asc"]
                // ]
            });
        });
        </script>

{{-- delete button script --}}

<script type="text/javascript">
    $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var id = $(this).data('id'); 
           
           
          
            event.preventDefault();
            swal({
                
                title: `Are you sure you want to change Status of this record?`,
                // text: "If you change status this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "{{ route('userDelete') }}",
                        type: "POST",
                        data: {
                            id: id,
                            "_token": $("#csrf-token").val(),
                        },
                        success: function (response) {
                            console.log(response.message);
                            swal({
                                text: response.message,
                                icon: "success",
                                button: "Ok",
                            }).then(function() {
                                location.reload();
                            });
                        }
                    });
                }
            }); 
        });
</script>
@endsection
