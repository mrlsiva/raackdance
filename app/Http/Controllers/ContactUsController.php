<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUS;

use Illuminate\Support\Facades\Auth; 
use Validator;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Config;
use DB;
use Illuminate\Support\Facades\File;
use Session;
use URL;
use Mail;
use App\Mail\ContactMail;

class ContactUsController extends Controller
{
    public $successStatus = 200;

    public function intSendMail($input)
    { 
        //Save Data
        ContactUS::create($input);         
    
        $mailData = $input;
        $email_to = config('mail.from.address');         

        $result = Mail::to( $email_to )->send(new ContactMail($mailData));
        if($result){
            return true;
        } else {
            return false;
        }
    }

    public function contactusMail(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [ 
                'form_id' => 'required',
                'fname' => 'required',
                'email' => 'required|email',
                'phone' => 'required|digits:10|numeric',
                //'course' => 'required',
                //'location' => 'required'           
            ]);
            if ($validator->fails()) { 
                return response()->json([
                    'success' => false,
                    'error' => $validator->errors()->all()
                ]);
            }
            $input = $request->all();  
            $input['server_details'] = json_encode(request()->server());
           
            if( $this->intSendMail($input) ){
                 return response()->json(['success' => true, 'message' =>'Thank you for contact us. we will contact you shortly.']);
            } 
            return response()->json(['success' => false, 'message' =>'Something went wrong. Please try again.']);
        }
        catch (\Throwable $exception) {
            return redirect()->back()->withErrors( json_encode($exception->getMessage(), true) )->withInput($request->input());
        } catch (\Illuminate\Database\QueryException $exception) {
            return redirect()->back()->withErrors( json_encode($exception->getMessage(), true) )->withInput($request->input());
        } catch (\PDOException $exception) {
            return redirect()->back()->withErrors( json_encode($exception->getMessage(), true) )->withInput($request->input());
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors( json_encode($exception->getMessage(), true) )->withInput($request->input());
        }  
    }

    public function RegisterStudentMail(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [ 
                'form_id' => 'required',
                'fname' => 'required',
                'phone' => 'required|digits:10|numeric',
                'dob' => 'required',
                'location' => 'required'           
            ]);
            if ($validator->fails()) { 
                return response()->json([
                    'success' => false,
                    'error' => $validator->errors()->all()
                ]);
            }
            $input = $request->all();  
            $input['server_details'] = json_encode(request()->server());
           
            if( $this->intSendMail($input) ){
                 return response()->json(['success' => true, 'message' =>'Thank you for contact us. we will contact you shortly.']);
            } 
            return response()->json(['success' => false, 'message' =>'Something went wrong. Please try again.']);
        }
        catch (\Throwable $exception) {
            return redirect()->back()->withErrors( json_encode($exception->getMessage(), true) )->withInput($request->input());
        } catch (\Illuminate\Database\QueryException $exception) {
            return redirect()->back()->withErrors( json_encode($exception->getMessage(), true) )->withInput($request->input());
        } catch (\PDOException $exception) {
            return redirect()->back()->withErrors( json_encode($exception->getMessage(), true) )->withInput($request->input());
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors( json_encode($exception->getMessage(), true) )->withInput($request->input());
        }  
    }

       
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
