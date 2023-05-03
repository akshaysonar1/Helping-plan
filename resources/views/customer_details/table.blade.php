<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 
</head>
<body>
    <div class="container">

        <div class="card o-hidden border-2 shadow-lg my-5" >
            <div class="card-body p-6">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Sr.no</th>
                <th>Date</th>
                <th>ID No</th>
                <th>Name</th>
                <th>Mobile No.</th>
                <th>Provide Help</th>
                <th>Get Help</th>
                <th>Remark</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ( $users as $row)
                
            
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $row->created_at->todatestring() }}</td>
                <td>{{ $row->customer_id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->mobile }}</td>
                <td>{{ $row->provide_help_ammount}}</td>
                <td>{{ $row->get_help_ammount}}</td>
                <td>
                    @if(empty($row->provide_help_ammount))

                        <button type="button" class="btn btn-danger" style="width:90px">empty</button></td>
                     @else
                        @if($row->ammount_pendding==0)
                            <button type="button" class="btn btn-success" style="width:90px ">Done</button></td>
                        @else
                            <button type="button" class="btn btn-warning"style="width:90px">Pending</button></td>
                                        
                   @endif
                   @endif
            </tr>
            @php
            $i++;
        @endphp
          
            @endforeach
          
        </tbody>
        <tfoot>
            <tr>
                <th>Sr.no</th>
                <th>Date</th>
                <th>ID No</th>
                <th>Name</th>
                <th>Mobile No.</th>
                <th>Provide Help</th>
                <th>Get Help</th>
                <th>Remark</th>
            </tr>
        </tfoot>
    </table>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>

            </div>
        </div>
    </div>
</body>
</html>
