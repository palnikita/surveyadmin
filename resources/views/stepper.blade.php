<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
      /* Add these CSS changes to your existing styles */
      body {
          font-family: 'Open Sans', sans-serif;
      }

      #signUpForm {
          background-color: #ffffff;
          margin: 40px auto;
          padding: 40px;
          box-shadow: 0px 6px 18px rgb(0 0 0 / 9%);
          border-radius: 12px;
      }

      #signUpForm .form-header {
          gap: 5px;
          text-align: center;
          font-size: .9em;
      }

      #signUpForm .form-header .stepIndicator {
          position: relative;
          flex: 1;
          padding-bottom: 30px;
      }

      #signUpForm .form-header .stepIndicator.active {
          font-weight: 600;
      }

      #signUpForm .form-header .stepIndicator.finish {
          font-weight: 600;
          color: #009688;
      }

      #signUpForm .form-header .stepIndicator::before {
          content: "";
          position: absolute;
          left: 50%;
          bottom: 0;
          transform: translateX(-50%);
          z-index: 9;
          width: 20px;
          height: 20px;
          background-color: #d5efed;
          border-radius: 50%;
          border: 3px solid #ecf5f4;
      }

      #signUpForm .form-header .stepIndicator.active::before {
          background-color: #a7ede8;
          border: 3px solid #d5f9f6;
      }

      #signUpForm .form-header .stepIndicator.finish::before {
          background-color: #009688;
          border: 3px solid #b7e1dd;
      }

      #signUpForm .form-header .stepIndicator::after {
          content: "";
          position: absolute;
          left: 50%;
          bottom: 8px;
          width: 100%;
          height: 3px;
          background-color: #f3f3f3;
      }

      #signUpForm .form-header .stepIndicator.active::after {
          background-color: #a7ede8;
      }

      #signUpForm .form-header .stepIndicator.finish::after {
          background-color: #009688;
      }

      #signUpForm .form-header .stepIndicator:last-child:after {
          display: none;
      }

      #signUpForm input {
          padding: 15px 20px;
          width: 100%;
          font-size: 1em;
          border: 1px solid #e3e3e3;
          border-radius: 5px;
      }

      #signUpForm input:focus {
          border: 1px solid #009688;
          outline: 0;
      }

      #signUpForm input.invalid {
          border: 1px solid #ffaba5;
      }

      .step-container {
          display: none;
      }

      #signUpForm .form-footer {
          overflow: auto;
          gap: 20px;
      }

      #signUpForm .form-footer button {
          background-color: #009688;
          border: 1px solid #009688 !important;
          color: #ffffff;
          border: none;
          padding: 13px 30px;
          font-size: 1em;
          cursor: pointer;
          border-radius: 5px;
          flex: 1;
          margin-top: 5px;
      }

      #signUpForm .form-footer button:hover {
          opacity: 0.8;
      }

      #signUpForm .form-footer #prevBtn {
          background-color: #fff;
          color: #009688;
      }
    </style>
</head>
<body>
<form id="signUpForm" action="#!"> <!-- start step indicators -->
        <div class="form-header d-flex mb-4"> <span class="stepIndicator">Account Setup</span> <span
                class="stepIndicator">Social Profiles</span> <span class="stepIndicator">Personal Details</span> </div>
        <!-- end step indicators --> <!-- step one -->
        <div class="step">
            <p class="text-center mb-4">Create your account</p>
            <div class="mb-3"> <input type="email" placeholder="Email Address" oninput="this.className = ''"
                    name="email">
            </div>
            <div class="mb-3"> <input type="password" placeholder="Password" oninput="this.className = ''"
                    name="password">
            </div>
            <div class="mb-3"> <input type="password" placeholder="Confirm Password" oninput="this.className = ''"
                    name="password"> </div>
        </div> <!-- step two -->
        <div class="step">
            <p class="text-center mb-4">Your presence on the social network</p>
            <div class="mb-3"> <input type="text" placeholder="Linked In" oninput="this.className = ''" name="linkedin">
            </div>
            <div class="mb-3"> <input type="text" placeholder="Twitter" oninput="this.className = ''" name="twitter">
            </div>
            <div class="mb-3"> <input type="text" placeholder="Facebook" oninput="this.className = ''" name="facebook">
            </div>
        </div> <!-- step three -->
        <div class="step">
            <p class="text-center mb-4">We will never sell it</p>
            <div class="mb-3"> <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname">
            </div>
            <div class="mb-3"> <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile">
            </div>
            <div class="mb-3"> <input type="text" placeholder="Address" oninput="this.className = ''" name="address">
            </div>
        </div> <!-- start previous / next buttons -->
        <div class="form-footer d-flex"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
        <!-- end previous / next buttons -->
    </form>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            var containers = document.getElementsByClassName("step-container");
            var x = document.getElementsByClassName("step-container")[n];
            for (var i = 0; i < containers.length; i++) {
                containers[i].style.display = "none";
            }
            x.style.display = "block";

            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }

            if (n == (containers.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }

            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n);
        }

        function nextPrev(n) {
            // This function will figure out which container to display
            var containers = document.getElementsByClassName("step-container");

            // Exit the function if any field in the current container is invalid:
            if (n == 1 && !validateForm()) return false;

            // Hide the current container:
            containers[currentTab].style.display = "none";

            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;

            // If you have reached the end of the form...
            if (currentTab >= containers.length) {
                // ... the form gets submitted:
                document.getElementById("signUpForm").submit();
                return false;
            }

            // Otherwise, display the correct container:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var containers = document.getElementsByClassName("step-container");
            var y = containers[currentTab].getElementsByTagName("input");
            var valid = true;

            // A loop that checks every input field in the current container:
            for (var i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // Add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // And set the current valid status to false
                    valid = false;
                }
            }

            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
            }

            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("stepIndicator");

            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }

            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }

        // Initially hide all containers except the first one
        var containers = document.getElementsByClassName("step-container");
        for (var i = 1; i < containers.length; i++) {
            containers[i].style.display = "none";
        }
    </script>

    <!-- Bootstrap JS (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+JYE5S7kVhzZLG2+Vj5wK5zW5tu68xjv8RVbG3T3tLzO6Rpr" crossorigin="anonymous"></script>
</body>
</html>
