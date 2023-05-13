@extends('layouts.master')
@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">FORGOT PASSWORD LIST</h6>
            </div>
    <!-- DataTales Example -->
   
        <div class="card-body">
            <div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Sr.no</th>
            <th>Mobile</th>
            <th>Message</th>
            <th>Reset Password</th>
           
        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach ( $user as $row)
            
        
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $row->mobile }}</td>
            <td>{{ $row->message }}</td>
            {{-- <td><a class="examps"> helo</a></td> --}}
            <td> <button type="button" class="btn btn-primary examps" data-toggle="modal" data-target="#exampleModal" data-id="{{ $row->id }}" data-mobile="{{ $row->mobile }} ">Reset Password</button></td>
          
            <div class="modal fade exampleModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('forgotpassword.passwordupdate') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                          <label for="mobile" class="col-form-label" >Mobile</label>
                          <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $row->mobile }}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">New Password</label>
                            <input type="text" class="form-control" name="password"  >
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Reset</button>
                          </div>
                      </form>
                    </div>
                   
                  </div>
                </div>
              </div>
                
        </tr>
        @php
        $i++;
    @endphp
      
        @endforeach
      
    </tbody>
    <tfoot>
        
    </tfoot>
</table>
            </div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
$(".examps").click(function(){
var mobile = $(this).data('mobile');
$("#mobile").val(mobile);


});
});
</script>
<script>
    $(document).ready(function () {
$('#example').DataTable();
});


$(document).on('click','.d',function(){
alert(123)

var id = $(this).data('id');
var name = $(this).data('name');


$('.id').val(id)
$('.name').val(name)


});
</script>

        </div>
    </div>
</div>

@endsection