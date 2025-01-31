<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}
  
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/min.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('assets/jquery/min.css')}}" rel="stylesheet"> --}}
    

    <style>

        body {
            font-family: "Roboto", serif;
        }
     .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            border-bottom: 3px solid #007bff;
            flex-wrap: wrap;
        }

        /* Left Section (Logo & Form Label) */
        .header-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .logo {
            max-width: 100px;
            height: auto;
            margin-bottom: 10px;
        }

        .form-label {
            border: 1px solid #ccc;
            padding: 5px 10px;
            font-size: 14px;
            background-color: #f8f8f8;
            font-weight: bold;
            border-radius: 5px;
            color: #333;
            text-transform: uppercase;
        }

        /* Center Section (Title & Description) */
        .header-title {
            text-align: center;
            flex: 1;
        }

        .header-title h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .header-title span {
            font-size: 16px;
            color: #555;
        }

        .header-title h2 {
            font-size: 18px;
            font-weight: bold;
            color: #444;
            margin-top: 5px;
        }

        /* Upload Box Styling */
        .upload-box {
            width: 120px;
            height: 120px;
            border: 2px dashed #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            font-size: 14px;
            color: #888;
            background-color: #f8f8f8;
            transition: 0.3s;
            border-radius: 5px;
            overflow: hidden;
            flex-direction: column;
            font-weight: bold;
            text-transform: uppercase;
        }

        .upload-box:hover {
            background-color: #eee;
        }

        .upload-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }

            .upload-box {
                margin-top: 10px;
            }
        }
        .info-container {
            max-width: 800px;
            margin: 40px auto;
            text-align: center;
        }

        .info-container h4 {
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .info-box {
            background: #f8f9fa;
            border-left: 5px solid #007bff;
            padding: 20px;
            border-radius: 8px;
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            text-align: justify;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .info-box strong {
            color: #dc3545;
            font-weight: bold;
        }
        .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        border-color: #007bff;
    }

    .form-outline {
        margin-bottom: 1.5rem;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    /* Add subtle shadow to input fields */
    .form-control.shadow-sm {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    /* Style the checkbox */
    .form-check-label {
        font-size: 0.95rem;
        color: #495057;
    }

    .form-label{
        font-size: 11px;
    }

    .form-check-input {
        width: 1.3em;
        height: 1.3em;
    }

        @media (max-width: 768px) {
            .info-box {
                font-size: 14px;
                padding: 15px;
            }
        }
    </style>


</head>
<body>

    <div class="container">
        <div class="header-container">
            <!-- Left Section: Logo & Form Label -->
            <div class="header-left">
                <img src="{{ asset('assets/img/gallery/asclogo.png') }}" alt="ASC Logo" class="img-fluid logo">
                <div class="form-label">Guidance Form 1</div>
            </div>

            <!-- Center Section: Title & Description -->
            <div class="header-title">
                <h1>Andres Soriano Colleges</h1>
                <span>Mangagoy, Bislig City</span>
                <h2>Guidance Testing Center</h2>
                <h2>Personal Data Sheet</h2>
            </div>

            <!-- Right Section: Upload Box -->
            <div class="upload-box" id="uploadBox">
                2x2 ID Picture
                <input type="file" id="imageInput" accept="image/*" style="display: none;">
                <img id="imagePreview" src="" alt="Image Preview">
            </div>
        </div>

        <h4>Dear Students:</h4>
        <div class="info-box">
            <p>
                The purpose of this form is to gather important information that will be of great help to all of us in the 
                <strong>Guidance and Counseling</strong> process. The success that you may expect in counseling will depend on your 
                honest and accurate responses. You don’t have to worry; <strong>ALL TRANSACTIONS WILL BE KEPT CONFIDENTIAL.</strong>
            </p>
        </div>




        <div class="mt-5">
            <form id="studentForm">
                <!-- PERSONAL BACKGROUND SECTION -->
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <h2 class="card-title mb-0">PERSONAL BACKGROUND</h2>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <!-- First Name -->
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label" for="firstName">First Name</label>
                                            <input type="text" id="firstName" class="form-control shadow-sm rounded" required />
                                        </div>
                                        <!-- Last Name -->
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label" for="lastName">Last Name</label>
                                            <input type="text" id="lastName" class="form-control shadow-sm rounded" required />
                                        </div>
                                        <!-- Middle Name -->
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label" for="middleName">Middle Name</label>
                                            <input type="text" id="middleName" class="form-control shadow-sm rounded" required />
                                        </div>
                                        <!-- Date -->
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label" for="studentDate">Date</label>
                                            <input type="date" id="studentDate" class="form-control shadow-sm rounded" required />
                                        </div>
                                    </div>
                        
                                    <!-- Address Section -->
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="address">Address</label>
                                                <input type="text" id="address" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="placeOfBirth">Place of Birth</label>
                                                <input type="text" id="placeOfBirth" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="Studentreligion">Religion</label>
                                                <input type="text" id="Studentreligion" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="studentEmail">Email Address</label>
                                                <input type="email" id="studentEmail" class="form-control shadow-sm rounded" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Sex Section -->
                                            <div class="mb-3">
                                                <label class="form-label">Sex</label>
                                                <div class="d-flex">
                                                    <div class="form-check me-3">
                                                        <input class="form-check-input" type="radio" name="sex" id="male" value="male" required />
                                                        <label class="form-check-label" for="male">Male</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sex" id="female" value="female" required />
                                                        <label class="form-check-label" for="female">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="civilStatus">Civil Status</label>
                                                <input type="text" id="civilStatus" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="dateOfBirth">Date of Birth</label>
                                                <input type="date" id="dateOfBirth" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="citizenship">Citizenship</label>
                                                <input type="text" id="citizenship" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="studentmobileNumber">Mobile Number</label>
                                                <input type="tel" id="studentmobileNumber" class="form-control shadow-sm rounded" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required />
                                            </div>
                                        </div>
                                    </div>
                        
                                    <!-- Working Student, Scholar, Single Parent Section -->
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Are you a working student?</label>
                                                <div class="d-flex">
                                                    <div class="form-check me-3">
                                                        <input class="form-check-input" type="radio" name="workingStudent" id="workingStudentYes" value="yes" required />
                                                        <label class="form-check-label" for="workingStudentYes">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="workingStudent" id="workingStudentNo" value="no" required />
                                                        <label class="form-check-label" for="workingStudentNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Are you a Scholar?</label>
                                                <div class="d-flex">
                                                    <div class="form-check me-3">
                                                        <input class="form-check-input" type="radio" name="scholar" id="scholarYes" value="yes" required />
                                                        <label class="form-check-label" for="scholarYes">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="scholar" id="scholarNo" value="no" required />
                                                        <label class="form-check-label" for="scholarNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Are you a single parent?</label>
                                                <div class="d-flex">
                                                    <div class="form-check me-3">
                                                        <input class="form-check-input" type="radio" name="singleParent" id="singleParentYes" value="yes" required />
                                                        <label class="form-check-label" for="singleParentYes">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="singleParent" id="singleParentNo" value="no" required />
                                                        <label class="form-check-label" for="singleParentNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="studentGuardian">If Yes, Who is your guardian?</label>
                                                <input type="text" id="studentGuardian" class="form-control shadow-sm rounded" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="studentSponsor">If Yes, Who is your sponsor?</label>
                                                <input type="text" id="studentSponsor" class="form-control shadow-sm rounded" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="studentChildren">If Yes, how many children do you have?</label>
                                                <input type="number" id="studentChildren" class="form-control shadow-sm rounded" />
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <label class="form-label" for="studentChildren">If married,name  of husband/wife</label>
                                                <input type="text" id="studentChildren" class="form-control shadow-sm rounded" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- FAMILY BACKGROUND SECTION -->
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <h2 class="card-title mb-0">FAMILY BACKGROUND</h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Father's Information -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="studentBrothers">No. of Brothers</label>
                                                <input type="text" id="studentBrothers" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="fatherName">Father's Name</label>
                                                <input type="text" id="fatherName" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="fatherAge">Age</label>
                                                <input type="text" id="fatherAge" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="fatherAddress">Home Address</label>
                                                <input type="text" id="fatherAddress" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="fatherEducation">Educational Attainment</label>
                                                <input type="text" id="fatherEducation" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="fatherOccupation">Occupation</label>
                                                <input type="text" id="fatherOccupation" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="fatherMobile">Mobile Number</label>
                                                <input type="text" id="fatherMobile" class="form-control shadow-sm rounded" required />
                                            </div>
                                        </div>
                                        <!-- Mother's Information -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="studentSister">No. of Sisters</label>
                                                <input type="text" id="studentSister" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="motherName">Mother's Name</label>
                                                <input type="text" id="motherName" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="motherAge">Age</label>
                                                <input type="text" id="motherAge" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="motherAddress">Home Address</label>
                                                <input type="text" id="motherAddress" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="motherEducation">Educational Attainment</label>
                                                <input type="text" id="motherEducation" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="motherOccupation">Occupation</label>
                                                <input type="text" id="motherOccupation" class="form-control shadow-sm rounded" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="motherMobile">Mobile Number</label>
                                                <input type="text" id="motherMobile" class="form-control shadow-sm rounded" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- EDUCATIONAL BACKGROUND SECTION -->
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <h2 class="card-title mb-0">EDUCATIONAL BACKGROUND</h2>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Education</th>
                                                <th>Name of School</th>
                                                <th>Subject You Like Best</th>
                                                <th>Subject You Don't Like</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Elementary</td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="School Name" id="elementaryName"></td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="Subject You Like" id="elementarySubject"></td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="Subject You Don't Like" id="elementarySubject"></td>
                                            </tr>
                                            <tr>
                                                <td>Junior High</td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="School Name" id="juniorHighName"></td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="Subject You Like" id="juniorHighSubject"></td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="Subject You Don't Like" id="juniorHighSubject"></td>
                                            </tr>
                                            <tr>
                                                <td>Grade 11</td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="School Name" id="grade11Name"></td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="Subject You Like" id="grade11Subject"></td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="Subject You Don't Like" id="grade11Subject"></td>
                                            </tr>
                                            <tr>
                                                <td>Grade 12</td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="School Name" id="grade12Name"></td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="Subject You Like" id="grade12Subject"></td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="Subject You Don't Like" id="grade12Subject"></td>
                                            </tr>
                                            <tr>
                                                <td>College</td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="School Name" id="collegeName"></td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="Subject You Like" id="collegeSubject"></td>
                                                <td><input type="text" class="form-control shadow-sm rounded" placeholder="Subject You Don't Like" id="collegeSubject"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td id="easiestSubjects">
                                                    <input type="text" class="form-control shadow-sm rounded" placeholder="Enter easiest subjects">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td id="mostDifficultSubjects">
                                                    <input type="text" class="form-control shadow-sm rounded" placeholder="Enter most difficult subjects">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td itemid="lowestGrades">
                                                    <input type="text" class="form-control shadow-sm rounded" placeholder="Enter subjects with lowest grade">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td id="planAfterHighSchool">
                                                    <input type="text" class="form-control shadow-sm rounded" placeholder="Enter plan after high school">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td id="highestGrades">
                                                    <input type="text" class="form-control shadow-sm rounded" placeholder="Enter subjects with highest grade">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td id="awards">
                                                    <input type="text" class="form-control shadow-sm rounded" placeholder="Enter awards & honors">
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td id="emergencyContact">
                                                    <input type="text" class="form-control shadow-sm rounded" placeholder="Enter emergency contact">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
   
                        <!-- SUBMIT BUTTON -->
                        <div class="text-right mb-4 container" >
                            <button type="submit" class="btn btn-primary  shadow-sm" id="submitButton">Submit</button>
                        </div>
            </form>
        </div>
  </form>
             
    </div>


    <script src={{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('assets/vendor/php-email-form/validate.js')}}></script>
    <script src={{asset('assets/vendor/aos/aos.js')}}></script>
    <script src={{asset('assets/vendor/glightbox/js/glightbox.min.js')}}></script>
    <script src={{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}></script>
    <script src={{asset('assets/vendor/jquery/min.js')}}></script>
    <script src={{asset('assets/vendor/swiper/swiper-bundle.min.js')}}></script>
    <script src={{asset('assets/js/min.js')}}></script>
    

    <script>
        
        $(document).ready(function () {
            // Click event to trigger file input
        

            setTimeout(() => {
                
            }, 2000);


            // pass the data 

            // Handle form submission
            $('#submitButton').on('click', function (e) {
                e.preventDefault(); // Prevent default form submission
// alert("asdsadasd")
                // Collect form data
                const formData = {
                    firstName: $('#firstName').val(),
                    lastName: $('#lastName').val(),
                    middleName: $('#middleName').val(),
                    studentDate: $('#studentDate').val(),
                    address: $('#address').val(),
                    placeOfBirth: $('#placeOfBirth').val(),
                    Studentreligion: $('#Studentreligion').val(),
                    studentEmail: $('#studentEmail').val(),
                    sex: $('input[name="sex"]:checked').val(),
                    civilStatus: $('#civilStatus').val(),
                    dateOfBirth: $('#dateOfBirth').val(),
                    citizenship: $('#citizenship').val(),
                    studentmobileNumber: $('#studentmobileNumber').val(),
                    workingStudent: $('input[name="workingStudent"]:checked').val(),
                    scholar: $('input[name="scholar"]:checked').val(),
                    singleParent: $('input[name="singleParent"]:checked').val(),
                    studentGuardian: $('#studentGuardian').val(),
                    studentSponsor: $('#studentSponsor').val(),
                    studentChildren: $('#studentChildren').val(),
                    studentBrothers: $('#studentBrothers').val(),
                    fatherName: $('#fatherName').val(),
                    fatherAge: $('#fatherAge').val(),
                    fatherAddress: $('#fatherAddress').val(),
                    fatherEducation: $('#fatherEducation').val(),
                    fatherOccupation: $('#fatherOccupation').val(),
                    fatherMobile: $('#fatherMobile').val(),
                    studentSister: $('#studentSister').val(),
                    motherName: $('#motherName').val(),
                    motherAge: $('#motherAge').val(),
                    motherAddress: $('#motherAddress').val(),
                    motherEducation: $('#motherEducation').val(),
                    motherOccupation: $('#motherOccupation').val(),
                    motherMobile: $('#motherMobile').val(),
                    elementaryName: $('#elementaryName').val(),
                    elementarySubject: $('#elementarySubject').val(),
                    juniorHighName: $('#juniorHighName').val(),
                    juniorHighSubject: $('#juniorHighSubject').val(),
                    grade11Name: $('#grade11Name').val(),
                    grade11Subject: $('#grade11Subject').val(),
                    grade12Name: $('#grade12Name').val(),
                    grade12Subject: $('#grade12Subject').val(),
                    collegeName: $('#collegeName').val(),
                    collegeSubject: $('#collegeSubject').val(),
                    easiestSubjects: $('#easiestSubjects input').val(),
                    mostDifficultSubjects: $('#mostDifficultSubjects input').val(),
                    lowestGrades: $('#lowestGrades input').val(),
                    planAfterHighSchool: $('#planAfterHighSchool input').val(),
                    highestGrades: $('#highestGrades input').val(),
                    awards: $('#awards input').val(),
                    emergencyContact: $('#emergencyContact input').val(),
                };


                console.log(formData);
                
                // Send data via AJAX
                $.ajax({
                    url: "{{ url('student/studentFormSave') }}",
                    method: 'POST',
                    data: JSON.stringify(formData),
                    contentType: 'application/json',
                    success: function (response) {
                        alert('Form submitted successfully!');
                        console.log(response); // Handle success response
                    },
                    error: function (xhr, status, error) {
                        alert('An error occurred while submitting the form.');
                        console.error(error); // Handle error
                    }
                });
            });
        });





    </script>
</body>
</html>