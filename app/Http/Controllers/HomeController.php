<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function laravelForm(Request $request)
    {
        # code...
        return view('laravel_example_form');
    
    }
     public function userPackage()
    {
        return view('package_form');
       
    }
    public function getPackageData(Request $request)
    {
        # code...
        //dd($request);



       // step1 value in 
        $packgCode =$request->packgCode;
        $packageName = $request->packageName;
        $packgDescrp = $request->packgDescrp;
        $packPrice = $request->packPrice;
        $packVol = $request->packVol;
        $hiddenId  = $request->hiddenId;


     

        $insert_package = array(
            'pckg_code' => $packgCode,
            'pckg_name' => $packageName,
            'pckg_description' => $packgDescrp,
            'pckg_price' => $packPrice,
            'pckg_volum' => $packVol,



        );
         if ($hiddenId ==1) {
              DB::table('package')->update($insert_package);
            } 
          else{
                DB::table('package')->insert($insert_package);
            }

   

  

      return redirect('/showPackage');

    }
    


    
      public function showPackage()
    {

        $packages = DB::table('package')->get();
        //return view('tags',compact('tags'));
        return view('show_package')->with('packages', $packages);
        //exit("i amin package_form");
    } 
     public function customerForm()
    {
        return view('customer_form');
       // exit("i amin Customer-Monthly");
    } 
    public function getCustomerData(Request $request)
     {
         # code...
        $customerCode =$request->customerCode;
        $customerName =$request->customerName;
        $customerAddrss = $request->customerAddrss;
        $customeremail  = $request->customeremail;
      

        //dd( $request->hiddenId);
        //$packgCode      = $request->packgCode;

         $insert_customer = array(
            'customerCode' => $customerCode,
            'customerName' => $customerName,
            'customerAddrss' => $customerAddrss,
            'customeremail' => $customeremail,
            //'pckg_volum' => $packVol,
            );
          
         
                DB::table('customer')->insert($insert_customer);
            
      return redirect('/Show-Customer');


     } 
     public function showCustomer()
    {


        $customers = DB::table('customer')->get();
        //return view('tags',compact('tags'));
        //return view('show_package')->with('packages', $packages);
       // return view('home');
       // exit("i amin Customer-Yearly");
        return view ('show_customer')->with('customers', $customers);;
    }

    public function editPackageData($packageId)
    {
        # code...
            //d($packageId);

            $getPakData = DB::table('package')->where('id', $packageId)->first();

            //dd($getPakData->pckg_code);

            return view('package_form')->with('getPakData', $getPakData);
    }



    /* @For post Data Receiving method is Request $request,
        For get  Data sending method is just varriable name $var

        */
     public function deletePackage($packageId)
    {        
        $getPackList = DB::table('package')->where('id',$packageId)->first();        

        DB::table('package')->where('id',$packageId)->delete();
        
        return redirect('/showPackage');
    }

    public function editCustomerData($customerId)
    {
        # code...
            //d($packageId);

            $getCusData = DB::table('customer')->where('id', $customerId)->first();

            //dd($getPakData->pckg_code);

            return view('customer_form')->with('getCusData', $getCusData);
    }

     public function deleteCustomer($customerId)
    {        
        $getCusList = DB::table('customer')->where('id',$customerId)->first();        

        DB::table('customer')->where('id',$customerId)->delete();
        
        return redirect('/Show-Customer');
    }


   public function bill()
   {
       # code...
    return ("U r in bill");
   }


   public function searchBillByCustomer()
   {
       # code...
    return ("U r in bill by Customer");
   }

   public function SearchByMonth()
   {
       # code...
      return ("U r in SearchByMonth");
   }
}
