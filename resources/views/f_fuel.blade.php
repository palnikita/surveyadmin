@extends('home.header')
<!DOCTYPE html>
<html>
<head>
    <title>Household Fuel Consumption Pattern</title>
    
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>/* Reset default margin and padding for all elements */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Style for the body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        /* Style for the container */
        .container {
            max-width: 600px;
            margin: 1rem;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Style for headings */
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        /* Style for form labels */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        /* Style for form inputs */
        input[type="text"],
        input[type="number"],
        input[type="checkbox"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        /* Style for radio buttons and checkboxes */
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }
        
        /* Style for submit button */
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        
        /* Additional styles can be added as needed */
        
        </style>
</head>
<body>



    
      <main id="main" class="main">
    
        <div class="pagetitle">
          <h1>Form Layouts</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active">Layouts</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->

    <div class="container" style="    width: 66%;
    margin: 1rem;">
    <h1 class="my-2 ">Household Fuel Consumption Pattern</h1>
    <form action="{{route('store4')}}" method="post">
        @csrf
        <!-- How far is the village from the nearest forest -->
        <label for="forestDistance">How far is the village from the nearest forest:</label>
        <input type="text" id="forestDistance" name="forestDistance" required><br><br>
        @error('respondentName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        <!-- How many times do you cook per day -->
        <label for="cookingFrequency">How many times do you cook per day:</label>
        <input type="number" id="cookingFrequency" name="cookingFrequency" required><br><br>
        @error('respondentName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        <!-- How many hours do you spend in cooking everyday -->
        <label for="cookingHours">How many hours do you spend in cooking everyday:</label>
        <input type="number" id="cookingHours" name="cookingHours" required><br><br>
        @error('respondentName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        <!-- Where do you cook -->
        <label>Where do you cook:</label><br>
        <input type="radio" id="separateKitchen" name="cookingLocation" value="Separate kitchen" required>
        <label for="separateKitchen">Separate kitchen</label><br>
        <input type="radio" id="courtyardOpenFire" name="cookingLocation" value="Courtyard open fire" required>
        <label for="courtyardOpenFire">Courtyard open fire</label><br>
        <input type="radio" id="corridor" name="cookingLocation" value="Corridor" required>
        <label for="corridor">Corridor</label><br>
        <input type="radio" id="insideBedroom" name="cookingLocation" value="Inside the bedroom" required>
        <label for="insideBedroom">Inside the bedroom</label><br><br>

        <!-- Type of cookstove used -->
        <label>Type of cookstove used:</label><br>
        <input type="radio" id="mudClaySinglePot" name="cookstoveType" value="Traditional mud clay single pot" required>
        <label for="mudClaySinglePot">Traditional mud clay single pot</label><br>
        <input type="radio" id="mudClayDoublePot" name="cookstoveType" value="Traditional mud clay double pot" required>
        <label for="mudClayDoublePot">Traditional mud clay double pot</label><br>
        <input type="radio" id="electricStove" name="cookstoveType" value="Electric stove" required>
        <label for="electricStove">Electric stove</label><br>
        <input type="radio" id="keroseneStove" name="cookstoveType" value="Kerosene stove" required>
        <label for="keroseneStove">Kerosene stove</label><br><br>

        <!-- Fuel used for cooking -->
        <label>Fuel used for cooking:</label><br>
        <input type="checkbox" id="firewood" name="fuelType[]" value="Firewood">
        <label for="firewood">Firewood</label><br>
        <input type="checkbox" id="charcoal" name="fuelType[]" value="Charcoal">
        <label for="charcoal">Charcoal</label><br>
        <input type="checkbox" id="electricity" name="fuelType[]" value="Electricity">
        <label for="electricity">Electricity</label><br>
        <input type="checkbox" id="gas" name="fuelType[]" value="Gas">
        <label for="gas">Gas</label><br>
        <input type="checkbox" id="agroResidue" name="fuelType[]" value="Agro-Residue">
        <label for="agroResidue">Agro-Residue</label><br>
        <input type="checkbox" id="sawdust" name="fuelType[]" value="Sawdust">
        <label for="sawdust">Sawdust</label><br>
        <input type="checkbox" id="otherFuel" name="fuelType[]" value="Other">
        <label for="otherFuel">Others (please specify)</label><br><br>

        <!-- If Firewood, What is source? -->
        <label for="firewoodSource">If Firewood, What is the source?</label>
        <input type="text" id="firewoodSource" name="firewoodSource"><br><br>
        @error('respondentName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        <!-- Problems using current cookstove -->
        <label>Problems using current cookstove:</label><br>
        <input type="text" id="problem1" name="problems[]" placeholder="Problem 1"><br>
        @error('respondentName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        <input type="text" id="problem2" name="problems[]" placeholder="Problem 2"><br>
        @error('respondentName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        <input type="text" id="problem3" name="problems[]" placeholder="Problem 3"><br><br>
        @error('respondentName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary" style="float: right; width: 9rem; font-size: 19px; margin: -29px 30px;">Next</button>
    </form>

    </div>
    @extends('home.footer')
</body>
</html>
