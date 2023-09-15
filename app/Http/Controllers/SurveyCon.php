<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Surmodel;
use App\Models\profile;
use App\Models\fuel;
use App\Models\Cook;
use Illuminate\Validation\Rule;

use Illuminate\Database\QueryException;






class SurveyCon extends Controller
{
    public function home(){
     return view('index');
    }

    public function login(){
        return view('pages_login');
       }

       public function forms(){
        return view('forms_layouts');
       }

       public function form1(){
        $data = Survey::get()->last();
        // dd($data);
        return view('f_survey')->with('data', $data);
       }

       public function form2(){
        return view('f_profile');
       }
       public function form3(){
        return view('f_fuel');
       }
       public function form4(){
        return view('f_cook');
       }
       public function stepper(){
        return view('stepper');
       }
       public function show(){
        $formData2 = Surmodel::all();
        $formData3 = profile::all();
       $formData4 = fuel::all();
        $formData5 = cook::all();
        return view('show', compact( 'formData2',  'formData3','formData4',  'formData5'));

       }
   
       public function store(Request $request){


        $validator = Validator::make($request->all(),[
            'date_event'=>'required',
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'address'=>'required',
              ]);
         if ($validator->fails()) {
             
             return redirect()->back()->withErrors($validator)->withInput();
         }
    //    //  dd($validator);
     
        

        $surveymodel = new Survey();
        $surveymodel->date_event = $request->input('date_event');
        $surveymodel->name = $request->input('name');
        $surveymodel->email = $request->input('email');
        $surveymodel->password = $request->input('password');
        $surveymodel->address = $request->input('address');


       // dd($surveymodel);

        $surveymodel->save();
       // dd($surveymodel);

           
       // return redirect()->back()->withSuccess('IT WORKS!');
        return redirect()->route('form1')->with('success', 'successfully added!');

    }



    public function storetwo(Request $request){
        // $validator = Validator::make($request->all(), [
        //     'firstName' => 'required',
        //     'middleName' => 'required',
        //     'lastName' => 'required',
        //     'village' => 'required',
        //     'taluka' => 'required',
        //     'district' => 'required',
        // ]);
    
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $rs=Survey::all()->max('id');
        //dd($rs);
    
        $surveyy = new Surmodel();
        $surveyy->firstName = $request->input('firstName');
        $surveyy->middleName = $request->input('middleName');
        $surveyy->lastName = $request->input('lastName');
        $surveyy->village = $request->input('village');
        $surveyy->taluka = $request->input('taluka');
        $surveyy->district = $request->input('district');
        $surveyy->survey_id= $rs;
    
        $surveyy->save();
    
        return redirect()->route('form2')->with('success', 'successfully added!');
    }



    public function store3(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'respondentName' => 'required|string|max:255',
            'age' => 'required|integer',
            'sex' => 'required|in:M,F',
            'location' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'occupation' => 'required|string|max:255',
            'income' => 'required|numeric|min:0',
            'economicClass' => 'required|in:APL,BPL',
            'adultMembers' => 'required|integer|min:0',
            'children' => 'required|integer|min:0',
            'documents' => 'nullable|string|max:255',
            'documentNumber' => 'nullable|string|max:255',
        ]);

        // Create a new HouseholdProfile instance and fill it with validated data
        $rs=Survey::all()->max('id');

        $profile = new Profile();
        $profile->respondent_name = $validatedData['respondentName'];
        $profile->age = $validatedData['age'];
        $profile->sex = $validatedData['sex'];
        $profile->location = $validatedData['location'];
        $profile->phone = $validatedData['phone'];
        $profile->occupation = $validatedData['occupation'];
        $profile->income = $validatedData['income'];
        $profile->economic_class = $validatedData['economicClass'];
        $profile->adult_members = $validatedData['adultMembers'];
        $profile->children = $validatedData['children'];
        $profile->documents = $validatedData['documents'];
        $profile->document_number = $validatedData['documentNumber'];
        $profile->survey_id= $rs;


        // Save the profile to the database
        $profile->save();

        // Redirect back to the form with a success message
        return redirect()->route('form3')->with('success', 'successfully added!');

       
    }





    public function store4(Request $request)
    {
        try {
            // Validate the form data
            $validatedData = $request->validate([
                'forestDistance' => 'required|string',
                'cookingFrequency' => 'required|integer',
                'cookingHours' => 'required|integer',
                'cookingLocation' => 'required|string',
                'cookstoveType' => 'required|string',
                'fuelType' => 'required|array',
                'fuelType.*' => 'string', // Validate each element in the 'fuelType' array as a string
                'firewoodSource' => 'nullable|string',
                'problems' => 'nullable|array',
                'problems.*' => 'string', // Validate each element in the 'problems' array as a string
            ]);
            $rs=Survey::all()->max('id');

            // Create a new instance of the model
            $householdFuelConsumption = new fuel;
    
            // Assign individual attributes
            $householdFuelConsumption->forestDistance = $validatedData['forestDistance'];
            $householdFuelConsumption->cookingFrequency = $validatedData['cookingFrequency'];
            $householdFuelConsumption->cookingHours = $validatedData['cookingHours'];
            $householdFuelConsumption->cookingLocation = $validatedData['cookingLocation'];
            $householdFuelConsumption->cookstoveType = $validatedData['cookstoveType'];
            $householdFuelConsumption->fuelType = json_encode($validatedData['fuelType']);
            $householdFuelConsumption->firewoodSource = $validatedData['firewoodSource'];
            $householdFuelConsumption->problems = json_encode($validatedData['problems']);
            $householdFuelConsumption->survey_id= $rs;

            // Save the model to the database
            $householdFuelConsumption->save();
    
            // Redirect back to the form with a success message or do any other action you need
            return redirect()->route('form4')->with('success', 'Form submitted successfully');
        } catch (\Exception $e) {
            // Handle the error, log it, or return an error response
            dd($e->getMessage()); // Debugging: Output the exception message
            return redirect()->route('home')->with('error', 'An error occurred while saving the data.');
        }
    }
    




    public function store5(Request $request)

    {

        $validatedData = $request->validate([
            'charcoalUsage' => ['required', Rule::in(['0', '1'])],
            'charcoalQuantity' => 'nullable|numeric',
            'charcoalUnit' => 'nullable|string',
            'charcoalMoney' => 'nullable|numeric',
            'firewoodUsage' => ['required', Rule::in(['0', '1'])],
            'firewoodQuantity' => 'nullable|numeric',
            'firewoodUnit' => 'nullable|string',
            'firewoodMoney' => 'nullable|numeric',
            'lpgUsage' => ['required', Rule::in(['0', '1'])],
            'lpgQuantity' => 'nullable|numeric',
            'lpgMoney' => 'nullable|numeric',
            'keroseneUsage' => ['required', Rule::in(['0', '1'])],
            'keroseneQuantity' => 'nullable|numeric',
            'keroseneMoney' => 'nullable|numeric',
            'coalUsage' => ['required', Rule::in(['0', '1'])],
            'coalQuantity' => 'nullable|numeric',
            'coalUnit' => 'nullable|string',
            'coalMoney' => 'nullable|numeric',
            'electricityUsage' => ['required', Rule::in(['0', '1'])],
            'electricityQuantity' => 'nullable|numeric',
            'electricityMoney' => 'nullable|numeric',
            'otherFuelUsage' => 'nullable|string',
        ]);
        $rs=Survey::all()->max('id');

        
        $fuelUsage = new Cook();

        // Fill the model with data from the request
        $fuelUsage->charcoalUsage = $request->input('charcoalUsage');
        $fuelUsage->charcoalQuantity = $request->input('charcoalQuantity');
        $fuelUsage->charcoalUnit = $request->input('charcoalUnit');
        $fuelUsage->charcoalMoney = $request->input('charcoalMoney');
        $fuelUsage->firewoodUsage = $request->input('firewoodUsage');
        $fuelUsage->firewoodQuantity = $request->input('firewoodQuantity');
        $fuelUsage->firewoodUnit = $request->input('firewoodUnit');
        $fuelUsage->firewoodMoney = $request->input('firewoodMoney');
        $fuelUsage->lpgUsage = $request->input('lpgUsage');
        $fuelUsage->lpgQuantity = $request->input('lpgQuantity');
        $fuelUsage->lpgMoney = $request->input('lpgMoney');
        $fuelUsage->keroseneUsage = $request->input('keroseneUsage');
        $fuelUsage->keroseneQuantity = $request->input('keroseneQuantity');
        $fuelUsage->keroseneMoney = $request->input('keroseneMoney');
        $fuelUsage->coalUsage = $request->input('coalUsage');
        $fuelUsage->coalQuantity = $request->input('coalQuantity');
        $fuelUsage->coalUnit = $request->input('coalUnit');
        $fuelUsage->coalMoney = $request->input('coalMoney');
        $fuelUsage->electricityUsage = $request->input('electricityUsage');
        $fuelUsage->electricityQuantity = $request->input('electricityQuantity');
        $fuelUsage->electricityMoney = $request->input('electricityMoney');
        $fuelUsage->otherFuelUsage = $request->input('otherFuelUsage');
        $fuelUsage->survey_id= $rs;

        // Save the data to the database
        $fuelUsage->save();

        // Redirect back to the form with a success message
        return redirect()->route('home')->with('success', 'Form data submitted successfully.');
    }






    public function show1($id){
       
        $formData1 = Survey::where('id', $id)->first();
        $formData2 = Surmodel::where('survey_id', $id)->first();

        $formData3 = Profile::where('survey_id', $id)->first();

        $formData4 = Fuel::where('survey_id', $id)->first();

        $formData5 = Cook::where('survey_id', $id)->first();
        return view('show', compact('formData1' ,'formData2' , 'formData3' , 'formData4' , 'formData5'));
       }





    public function display(Request $request){

        $search = $request->input('search', '');
    
        if ($search !== "") {

            $formData1 = Survey::where('id', $search)->get();
            // $formData2 = Survey::where('survey_id', $search)->get();

            // $formData3 = Profile::where('survey_id', $search)->get();


            // $formData4 = Fuelmod::where('survey_id', $search)->get();
            // $formData5 = Sale::where('survey_id', $search)->get();


        }

            else{
           $formData1 = Survey::all();
           
   
            }
           return view('display', compact('formData1'  ,'search'));
       }
    

      
    // public function joinTables()
    // {
    //     $result = Survey::select('surveys.*')
    //         ->join('surveytwos', 'surveys.id', '=', 'surveytwos.id')
    //         ->join('profiles', 'surveys.id', '=', 'profiles.id')
    //         ->join('fuels', 'surveys.id', '=', 'fuels.id')
    //         ->join('cooks', 'surveys.id', '=', 'cooks.id')
    //         ->get();

    //     return view('display', compact('result'));
    // }
    

    }