@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
               <!-- load bootstrap -->
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
           

                <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span> Speedy Fly!</h1>
        </div>    

                
        
            

        <!-- FORM STARTS HERE -->
        <form method="POST" action="{{url('/customer-post')}}" name=""  novalidate>
                  {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Customer Code</label>
                <input type="text" id="customerCode" class="form-control" name="customerCode" placeholder="Code Is Important" value="{{ (isset($getCusData->customerCode)) ? $getCusData->customerCode : '' }}" >
            </div>
            
            <div class="form-group">
                <label for="name">Customer Name</label>
                <input type="text" id="customerName" class="form-control" name="customerName" placeholder="ID is Important" value="{{ (isset($getCusData->customerName)) ? $getCusData->customerName : '' }}">
            </div>
            <div class="form-group">
                <label for="name">Customer Picture</label>
                <input type="file" id="fileToUpload" class="form-control" name="fileToUpload" >
            </div>
            <div class="form-group">
                <label for="name">Customer Address</label>
                <input type="text" id="customerAddrss" class="form-control" name="customerAddrss" placeholder="Address Is Important" value="{{ (isset($getCusData->customerAddrss)) ? $getCusData->customerAddrss : '' }}">
            </div>
            <div class="form-group">
                <label for="name">Customer Email</label>
                <input type="text" id="customeremail" class="form-control" name="customeremail"  placeholder="Address Is Important" value="{{ (isset($getCusData->customeremail)) ? $getCusData->customeremail : '' }}">
            </div>
            <div class="form-group">
                <label for="name">Package Code</label>
                <input type="text" id="packgCode" class="form-control" name="packgCode" placeholder="Code Is Important" value="{{ (isset($getCusData->packgCode)) ? $getCusData->packgCode : '' }}">
            </div>            
            <button type="submit" class="btn btn-success">Go Customer Go!</button>

        </form>

    </div>
</div>
  
    

@endsection