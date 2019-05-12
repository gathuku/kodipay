<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payment;
use Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$payment=Payment::where('user_id',auth()->user()->id);

        return Payment::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  \Log::info($request);
        $cretePayment=Payment::create([
          'user_id'=>$request->userId,
          'type'=>$request->type,
          'amount'=>$request->amount,
        ]);

         if($cretePayment){
           return [
             'status'=>'success',
             'message'=>'Payment Created',
           ];
         }else{
           return [
             'status'=>'error',
             'message'=>'Could not be created',
           ];
         }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $delete=Payment::where('id',$id)->delete();
      if($delete){
          return [
            'status'=>'success',
            'message'=>'Payment Deleted',
          ];
      }else{
        return [
          'status'=>'error',
          'message'=>'Could not delete',
          'id'=>$id,
        ];
      }

    }
  }
