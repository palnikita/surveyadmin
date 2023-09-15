@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View</title>

  <title>View</title>
</head>
<body>
   

<main id="main" class="main" style="background-color:aliceblue;">

   
  <div class="container "style="background-color:White;">
        <h1 style="text-align: center; "><b>All Information</b></h1>


        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="row">

                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date</label>
                                <p>{{ $formData1->date_event  }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add more table headers as needed for $formData1 -->

        <p>
        <h5><b> Profile Information</b></h5>
        </p>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name </label>
                                <p>{{$formData1->name }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email </label>
                                <p>{{ $formData1->email }}</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Address</label>
                                <p>{{ $formData1->address }}</p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>


        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                    <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">first name</label>
                                <p>{{ $formData2->firstName }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">middleName</label>
                                <p>{{ $formData2->middleName }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">lastName</label>
                                <p>{{ $formData2->lastName }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Village </label>
                                <p>{{ $formData2->village }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Taluka</label>
                                <p>{{$formData2->taluka }}</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> District</label>
                                <p> {{ $formData2->district }}</p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <p>
        <h5><b>Personal Information</b></h5>
        </p>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                    <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">respondent_name</label>
                                <p>{{$formData3->respondent_name }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age </label>
                                <p>{{$formData3->age }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sex</label>
                                <p>{{$formData3->sex }}</p>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Household Location</label>
                                <p>{{$formData3->location }}</p>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Phone No.</label>
                                <p>{{$formData3->phone }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Occupation </label>
                                <p>{{ $formData3->occupation }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Yearly Income</label>
                                <p>{{ $formData3->income }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Economic Class</label>
                                <p>{{ $formData3->economic_class }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. of Adult Family Members</label>
                                <p>{{$formData3->adult_members }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Number of Children (<6 years) </label>
                                        <p>{{ $formData3->children }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Government Documents</label>
                                <p>{{ $formData3->documents }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Document Number</label>
                                <p>{{$formData3->document_number }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>
        <h5><b>Fuel Consumption Information</b></h5>
        </p>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">How far is the village from the nearest forest </label>
                                <p>{{ $formData4->forestDistance }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">How many times do you cook per day</label>
                                <p>{{$formData4->cookingFrequency }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">How many hours do you spend in cooking everyday </label>
                                <p>{{$formData4->cookingHours }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Where do you cook</label>
                                <p>{{$formData4->cookingLocation }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Type of cookstove used</label>
                                <p>{{$formData4->cookstoveType }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fuel used for cooking</label>
                                <p>{{ implode(', ', json_decode($formData4->fuelType)) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">If Firewood, What is the source</label>
                                <p>{{ $formData4->firewoodSource }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Problems using current cookstove</label>
                                <p>{{ implode(', ', json_decode($formData4->problems)) }}</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <p>
        <h5><b>Fuel Use for Cooking Information</b></h5>
        </p>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Charcoal </label>
                                <p>{{ $formData5->charcoalUsage ? 'Yes' : 'No' }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity of usage</label>
                                <p>{{$formData5->charcoalQuantity }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Unit </label>
                                <p>{{$formData5->charcoalUnit }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Money per month (INR) </label>
                                <p>{{$formData5->charcoalMoney }}</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                    <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Firewood </label>
                                <p>{{$formData5->firewoodUsage ? 'Yes' : 'No' }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity of usage</label>
                                <p>{{ $formData5->firewoodQuantity }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Unit </label>
                                <p>{{$formData5->firewoodUnit }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Money per month (INR) </label>
                                <p>{{$formData5->firewoodMoney }}</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                    <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">LPG </label>
                                <p>{{ $formData5->lpgUsage ? 'Yes' : 'No' }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity of usage</label>
                                <p>{{$formData5->lpgQuantity }}</p>
                            </div>
                        </div>
                       
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Money per month (INR) </label>
                                <p>{{$formData5->lpgMoney }}</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                    <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kerosene </label>
                                <p>{{$formData5->keroseneUsage ? 'Yes' : 'No' }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity of usage</label>
                                <p>{{ $formData5->keroseneQuantity }}</p>
                            </div>
                        </div>
                     
                       
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Money per month (INR) </label>
                                <p>{{$formData5->keroseneMoney }}</p>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                    <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Coal </label>
                                <p>{{ $formData5->coalUsage ? 'Yes' : 'No' }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity of usage</label>
                                <p>{{ $formData5->coalQuantity }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Unit </label>
                                <p>{{$formData5->coalUnit }}</</p>
                            </div>
                        </div>
                       
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Money per month (INR) </label>
                                <p>{{$formData5->coalMoney }}</p>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                    <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Electricity </label>
                                <p>{{$formData5->electricityUsage ? 'Yes' : 'No' }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity of usage</label>
                                <p>{{ $formData5->electricityQuantity }}</p>
                            </div>
                        </div>
                       
                       
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Money per month (INR) </label>
                                <p>{{ $formData5->electricityMoney }}</p>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                    <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Other fuels (please specify) </label>
                                <p>{{ $formData5->otherFuelUsage }}</p>
                            </div>
                        </div>
                      

                    </div>
                </div>
            </div>
        </div>





        </div>
  
        <div class="container-flex m-0">
   @extends('home.footer')
   </div>




    
</main>
    
  