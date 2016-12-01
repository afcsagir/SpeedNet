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
                       
                        <th>Package Code</th>
                        <th>Package Name</th>
                        <th>Package Description</th>
                        <th>Package Price</th>
                        <th>Package Volume</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $val)
                    <tr>

                        
                        <td>{{$val->pckg_code}}</td>
                        <td>{{$val->pckg_name}}</td>
                        <td>{{$val->pckg_description}}</td>
                        <td>{{$val->pckg_price}}</td>
                        <td>{{$val->pckg_volum}}</td>
                        <td> 
                                                  
                            <a href="{{ url('/edit-package-data/').'/'.$val->id }}" button class="btn btn-success">Edit</a>  
                            <a href="{{ url('/delete-package/').'/'.$val->id }}"    button class="btn btn-success">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
  
    

@endsection