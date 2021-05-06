<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\income;

use Redirect;
use Session;
use File;
class incomesController extends Controller
{
    //this controller is for input income (add, all pages)
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = income::all();
        return view('all',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
          'name' => 'required|string|max:255',
          'date' => 'required|date',
          'quantity' => 'required|string',
          'unit' => 'required|string',
          'amount' => 'required|string',
          'image.*' => 'image|mimes:jpeg,png,jpg|max:2000',
          'report' => 'required|string',
          'deleted' => 'required',
        ]);
        //check if validation fails
        if($validator->fails())
        {
          return redirect('/add')->withErrors($validator)->withInput();
        }
        else {
          $name = $request->name;
          $date = $request->date;
          $quantity = $request->quantity;
          $unit = $request->unit;
          $amount = $request->amount;
          $image = $request->image;
          $report = $request->report;


          
          if($request->hasfile('image'))

         {

            foreach($request->file('image') as $image)

            {

                $name = time().'.'.$image->extension();

                $image->move(public_path().'/files/', $image);  
                $image = $image;

            }

         }



            //insert array

            $data_insert['name'] = $name;
            $data_insert['date'] = $date;
            $data_insert['quantity'] = $quantity;
            $data_insert['unit'] = $unit;
            $data_insert['amount'] = $amount;
            $data_insert['image'] = $image;
            $data_insert['report'] = $report;
            $data_insert['created_at'] = date('Y-m-d H:i:s');



            //insert into DB
            if(DB::table('incomes')->insert($data_insert))
            {
              Session::flash('success', 'Farm has been Record saved successfully');
              return Redirect::to('add');
            }
            else
            {
              Session::flash('error','OOoops Something went wrong please try again');
              return Redirect::to('/add');

            }
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
        if($id!=''){
            //$data_update = array('id'=>$id);
            $data = DB::table('incomes')->where(array('id'=>$id))->get();
            return view('show',['data'=>$data]);
          }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }
}
