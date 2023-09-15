<!-- @extends('home.header') -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>baseline Survey form</title>
  <style>
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
    max-width: 500px;
    width: 20%;
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
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
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
</style>
  <title>Document</title>
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
           <div class="container" style="    width: 55%; margin: 1rem">

      
    <h1>General Information</h1>
    <form action="{{route('form1')}}" method="post">
      @csrf
        <!-- Date of Survey -->
        <label for="date">Date of Survey:</label>
        <input type="date" id="date" name="date" placeholder="DD/MM/YYYY" required><br><br>
        @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Surveyor Name -->
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required value={{$data->name}} ><br><br>
        @error('firstName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <label for="middleName">Middle Name:</label>
        <input type="text" id="middleName" name="middleName"><br><br>
        @error('middleName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required><br><br>
        @error('lastName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <h1>Location Information</h1>

        <!-- Village -->
        <label for="village">Village:</label>
        <input type="text" id="village" name="village" required><br><br>
        @error('village')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Taluka -->
        <label for="taluka">Taluka:</label>
        <input type="text" id="taluka" name="taluka" required><br><br>
        @error('taluka')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- District -->
        <label for="district">District:</label>
        <input type="text" id="district" name="district" required><br><br>
        @error('district')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary" style="float: right; width: 9rem; font-size: 19px; margin: -29px 30px;">Next</button>
    </form>
  
    </div>
   <div class="container-flex m-0">
</div>
</main>
   @extends('home.footer')
  
   
