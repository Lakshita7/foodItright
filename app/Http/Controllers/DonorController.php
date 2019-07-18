<?php
use App\Donor;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    //
    public function index()
    {
        return view('donor.index');
    }

    public function donate()
    {
        return view('donate');
    }

    public function store()
    {
       
   
         $donor = new  \App\Donor;
         $donor->first_name = request('Fname');
         $donor->last_name = request('Lname');
         $donor->emailId = request('email');
         $donor->mobNo = request('Donorumber');
         $donor->type = request('option1');
         $donor->date = request('EventDate');
         $donor->time = request('PickupTime');
         $donor->address = request('DonorAddress');
         $donor->city = request('DonorCity');
         $donor->amount = request('FoodAmount');
         
         $donor->save();
        

       return request()->all(); 
       return redirect('/donor');


    }


}

