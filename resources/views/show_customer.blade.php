@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            
               <!-- load bootstrap -->
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
           

                <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span> Speedy Fly!</h1>
        </div>    

        <!-- Table-to-load-the-data Part -->
            <table class="table table-striped">
                <thead>
                    <tr>
                       
                        <th>Customer Code</th>
                        <th>Customer Name</th>
                        <th>Customer Address</th>
                        <th>Customer Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $val)
                    <tr>

                        
                        <td>{{$val->customerCode}}</td>
                        <td>{{$val->customerName}}</td>
                        <td>{{$val->customerAddrss}}</td>
                        <td>{{$val->customeremail}}</td>
                        
                        <td>

                            <a href="{{ url('/edit-customer-data/').'/'.$val->id }}" button class="btn btn-success">Edit</a>  
                            <a href="{{ url('/delete-customer/').'/'.$val->id }}"    button class="btn btn-success">Delete</a>

                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

    </div>
</div>
  
    

@endsection