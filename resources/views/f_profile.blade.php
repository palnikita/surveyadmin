@extends('home.header')
<!DOCTYPE html>
<html>
<head>
    <title>Household Profile Form</title>
   
    <!-- Template Main CSS File -->
    <link href="public/assets/css/style.css" rel="stylesheet">
  <style>
    /* Reset default margin and padding for all elements */
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
    margin:1rem;
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
input[type="tel"],
input[type="radio"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style for radio buttons and checkboxes */
input[type="radio"] {
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

    <div class="container" style="    width: 55%;
    margin-left: 1rem;">
            <h1>Household Profile</h1>
    <form action="{{route('store3')}}" method="post">
        @csrf
        
        <!-- Name of Respondent -->
        <label for="respondentName">Name of Respondent (Household representative):</label>
        <input type="text" id="respondentName" name="respondentName" required><br><br>
        @error('respondentName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Age -->
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        @error('age')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Sex -->
        <label>Sex:</label>
        <input type="radio" id="male" name="sex" value="M" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="sex" value="F" required>
        <label for="female">Female</label><br><br>

        <!-- Household Location (Latitude/Longitude) - Use Notecam Software -->
        <label for="location">Household Location (Lat/Long) - Use Notecam Software:</label>
        <input type="text" id="location" name="location" required><br><br>
        @error('location')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Phone Number -->
        <label for="phone">Phone number (if available):</label>
        <input type="tel" id="phone" name="phone"><br><br>
        @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Occupation -->
        <label for="occupation">Occupation:</label>
        <select id="occupation" name="occupation" required>
            <option value="Farmer">Farmer</option>
            <option value="Labour">Labour</option>
            <option value="Herding">Herding</option>
            <option value="Others">Others (please specify)</option>
        </select><br><br>

        <!-- Yearly Income (INR) -->
        <label for="income">Yearly income (INR):</label>
        <input type="number" id="income" name="income" required><br><br>
        @error('income')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Economic Class -->
        <label>Economic class:</label>
        <input type="radio" id="apl" name="economicClass" value="APL" required>
        <label for="apl">APL</label>
        <input type="radio" id="bpl" name="economicClass" value="BPL" required>
        <label for="bpl">BPL</label><br><br>

        <!-- Number of Adult Family Members -->
        <label for="adultMembers">Number of Adult family members in the household:</label>
        <input type="number" id="adultMembers" name="adultMembers" required><br><br>
        @error('adultMembers')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Number of Children (<6 years) -->
        <label for="children">Number of Children (<6 years) in household:</label>
        <input type="number" id="children" name="children" required><br><br>
        @error('children')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Government Documents -->
        <label>Government Documents:</label><br>
        <input type="checkbox" id="voterId" name="documents" value="Voter Id">
        <label for="voterId">Voter Id</label><br>
        <input type="checkbox" id="drivingLicense" name="documents" value="Driving License">
        <label for="drivingLicense">Driving License</label><br>
        <input type="checkbox" id="otherDocument" name="documents" value="Other">
        <label for="otherDocument">Other (please specify)</label><br><br>

        <!-- Document Number -->
        <label for="documentNumber">Document Number:</label>
        <input type="text" id="documentNumber" name="documentNumber"><br><br>
        @error('documentNumber')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary" style="float: right; width: 9rem; font-size: 19px; margin: -29px 30px;">Next</button>
    </form>
    </div>
    @extends('home.footer')
</body>
</html>
