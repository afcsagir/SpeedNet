
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
        <form method="POST" action="{{url('/package-post')}}" name=""  novalidate>
                  {{ csrf_field() }}


            <div class="form-group">
                <label for="name">Package Code</label>
                <input type="text" id="packgCode" class="form-control" name="packgCode" placeholder="Code Is Important" value="{{ (isset($getPakData->pckg_code)) ? $getPakData->pckg_code : '' }}" >
                <input type="hidden" name="hiddenId" id="hiddenId" value="{{ (isset($getPakData->id)) ? 1 : 2}}">
            </div>            

            <div class="form-group">
                <label for="name">Package Name</label>
                <input type="text" id="packageName" class="form-control" name="packageName" placeholder="ID is Important" value="{{ (isset($getPakData->pckg_name)) ? $getPakData->pckg_name : '' }}">
            </div>
            <div class="form-group">
                <label for="name">Package Description</label>
                <input type="text" id="packgDescrp" class="form-control" name="packgDescrp" placeholder="Description Is Important" value="{{ (isset($getPakData->pckg_description)) ? $getPakData->pckg_description : '' }}">
            </div>
            <div class="form-group">
                <label for="packagePrice">Package Price</label>
                <select class="form-control" id="packPrice"  name="packPrice">
                        <option value="">Select</option>
                        <option value="500" {{ (isset($getPakData->pckg_price) && $getPakData->pckg_price == 500) ? 'selected' : ''  }} >500  TK</option>
                        <option value="1000" {{ (isset($getPakData->pckg_price) && $getPakData->pckg_price == 1000) ? 'selected' : ''  }}>1000 TK</option>
                        <option value="1500" {{ (isset($getPakData->pckg_price) && $getPakData->pckg_price == 1500) ? 'selected' : ''  }} >1500 TK</option>
                        <option value="2000" {{ (isset($getPakData->pckg_price) && $getPakData->pckg_price == 2000) ? 'selected' : ''  }}>2000 TK</option>
                </select>
            </div>
            <div class="form-group">
                <label for="packageVolume">Package Volume</label>
                <select class="form-control" id="packVol"  name="packVol" >
                        <option value="">Select</option>
                        <option value="1">1 mbps</option>
                        <option value="1.5">1.5 mbps</option>
                        <option value="2">2 mbps</option>
                        <option value="3">3 mbps</option>
                </select>
            </div>

            

            <button type="submit" class="btn btn-success">Go Package Go!</button>

        </form>

    </div>
</div>
  
    

@endsection