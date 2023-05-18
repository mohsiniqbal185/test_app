<!doctype html>
<html lang="en">

<head>
	<?php
$this->load->helper('url');?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CGPA PREDICTOR</title>

</head>
<!-- style="background-color: #f5e1e1;" -->
<body >
    <div class="alert alert-success alert-dismissible fade show text-center mb-0 mt-0" style="font-size:30px ;" role="alert" ,>
        <strong>Welcome to CGPA Report Generator!</strong>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:60px;font-size:large;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CGPA Report Generator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="#">Home</a>
                    </li>
                    

                </ul>

            </div>
        </div>
    </nav>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro');
        *{
            font-family: 'Kdam Thmor Pro', sans-serif;
        }
        body{
            background-image: url("../images/background.jpg");
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background: rgb(206, 203, 203);
            text-align: center;
            font-size: large;
            border: 2px solid black;
            padding: .5em;
        }

        .container2 {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            padding-top: 20px;
            color: rgb(204, 74, 74);
           
        }

        .footer {
            width: 100%;
            margin: 0;
            background: #050505;
            padding: 0%;
            text-align: center;
            font-size: large;
            font-style: italic;
            align-self: flex-end;
        }

        .button {
            text-align: center;
            color: rgb(196, 154, 154);
            align-self: start;
            background: #b1aaa7;
            width: auto;
            padding-top: 10px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 10px;
            margin-bottom: 20px;
            border-radius: 12px;
        }

        div.input-group{
            padding: 0;
            margin-inline: 1rem;
        }

        div.input-group:hover{
            box-shadow: 2px 2px 2px 2px gray;
        }

        button:hover{
            opacity: 0.85;
        }
    </style>

    <div class="pricing-header p-2 pb-md-4 mx-auto text-center text-danger border-2 fw-bold">
        <h4 class="display-4 fw-bold">CGPA</h4>
        <p class="fs-5 text-muted ">Cumulative Grade Point Average (CGPA) is an assessment tool used to evaluate your
            academic performance.</p>
    </div>
        <p class="fs-5 fw-bold " style="width:100%;">Note: Enter grades in all the fields!</p>
    </div>
    <div class="container rounded-pill w-50">
        <input class="form-check-input" style="margin-left:2rem; margin-right: 1rem;" type="radio" name="aorb" onClick="hideBC()">First year 
        <input class="form-check-input" style="margin-left:2rem; margin-right: 1rem;" type="radio" name="aorb" onClick="hideAC()">First two years 
        <input class="form-check-input" style="margin-left:2rem; margin-right: 1rem;" type="radio" name="aorb" onClick="hideAB()">First three years
    </div>
    <div class="d-flex p-3 justify-content-center">
        <form action="<?php echo base_url('/printreport');?> " method="post" id="A" >
            <div>
                <h2 style="text-align: center;">First year courses</h2>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ph-121">PH-121</label>
                    <select class="form-select text-center" name='ph-121' id="ph-121"  required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>


                    </select>
                </div>

                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="hs-101">HS-101</label>
                    <select class="form-select text-center" name='hs-101' id="hs-101" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cy-105">CY-105</label>
                    <select class="form-select text-center" name="cy-105" id="cy-105" required >
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-107">CS-107</label>
                    <select class="form-select text-center" name="cs-107" id="cs-107" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="mt-111">MT-111</label>
                    <select class="form-select text-center" name="mt-111" id="mt-111"required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-105">CS-105</label>
                    <select class="form-select text-center" name="cs-105" id="cs-105" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-106">CS-106</label>
                    <select class="form-select text-center" name="cs-106" id="cs-106" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="el-102">EL-102</label>
                    <select class="form-select text-center" name="el-102" id="el-102" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ee-119">EE-119</label>
                    <select class="form-select text-center" name="ee-119" id="ee-119" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="me-107">ME-107</label>
                    <select class="form-select text-center" name="me-107" id="me-107" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="hs-105/12">HS-105/12</label>
                    <select class="form-select text-center" name="hs-105/12" id="hs-105/12" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
            </div>
            <div class="row">
                <div style="text-align:center;">
                    <button class="button" style="color: #000; font-weight: bold; font-size: large; margin-right: 5rem;"> Generate Report</button>
                    <button class="button" formaction = '<?php echo base_url('/downloadcontroller')?>' style="color: #000; font-weight: bold; font-size: large; margin-right: 15rem;"> Download Report</button>

                </div>
            </div>
        </form>
    </div>
    <script language="Javascript">
        function hideAC() {

            document.getElementById("A").style.display = "none";
            document.getElementById("C").style.display = "none";
            document.getElementById("B").style.display = "block";

        }
        function hideAB() {

            document.getElementById("A").style.display = "none";
            document.getElementById("B").style.display = "none";
            document.getElementById("C").style.display = "block";

        }

        function hideBC() {
            document.getElementById("B").style.display = "none";
            document.getElementById("C").style.display = "none";
            document.getElementById("A").style.display = "block";

        }
    </script>
    <div class="d-flex p-2 justify-content-center">
        <form action="<?php echo base_url('/printreport')?>" method="post" id="B" style="display: none;">
            <div>
                <h2 style="text-align: center;">First year courses</h2>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ph-121">PH-121</label>
                    <select class="form-select text-center" name="ph-121" id="ph-121" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>

                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="hs-101">HS-101</label>
                    <select class="form-select text-center" name="hs-101" id="hs-101" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cy-105">CY-105</label>
                    <select class="form-select text-center" name="cy-105" id="cy-105" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-107">CS-107</label>
                    <select class="form-select text-center" name="cs-107" id="cs-107" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
            </div>

            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="mt-111">MT-111</label>
                    <select class="form-select text-center" name="mt-111" id="mt-111" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-105">CS-105</label>
                    <select class="form-select text-center" name="cs-105" id="cs-105" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>


                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-106">CS-106</label>
                    <select class="form-select text-center" name="cs-106" id="cs-106" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="el-102">EL-102</label>
                    <select class="form-select text-center" name="el-102" id="el-102" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
            </div>

            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ee-119">EE-119</label>
                    <select class="form-select text-center" name="ee-119" id="ee-119" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>

                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="me-107">ME-107</label>
                    <select class="form-select text-center" name="me-107" id="me-107" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="hs-105/12">HS-105/12</label>
                    <select class="form-select text-center" name="hs-105/12" id="hs-105/12" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
            </div>
            <p class="text-center">_____________________________________</p>
            <div>
                <h2 style="text-align: center;">Second year courses</h2>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-215">CS-215</label>
                    <select class="form-select text-center" name="cs-215" id="cs-215" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="mt-222">MT-222</label>
                    <select class="form-select text-center" name="mt-222" id="mt-222" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ee-222">EE-222</label>
                    <select class="form-select text-center" name="ee-222" id="ee-222" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="mt-224">MT-224</label>
                    <select class="form-select text-center" name="mt-224" id="mt-224" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-210">CS-210</label>
                    <select class="form-select text-center" name="cs-210" id="cs-210" required>
                        <option selected>Choose...</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-211">CS-211</label>
                    <select class="form-select text-center" name="cs-211" id="cs-211" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-203">CS-203</label>
                    <select class="form-select text-center" name="cs-203" id="cs-203" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-214">CS-214</label>
                    <select class="form-select text-center" name="cs-214" id="cs-214" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ee-217">EE-217</label>
                    <select class="form-select text-center" name="ee-217" id="ee-217" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-212">CS-212</label>
                    <select class="form-select text-center" name="cs-212" id="cs-212" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="hs-205/20">HS-205/20</label>
                    <select class="form-select text-center" name="hs-205/20" id="hs-205/20" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
            </div>
            <div style="text-align:center;">
                <button class="button" style="color: #000; font-weight: bold; font-size: large; margin-right: 5rem;"> Generate Report</button>
                <button class="button" formaction = '<?php echo base_url('/downloadcontroller')?>'style="color: #000; font-weight: bold; font-size: large; margin-right: 15rem;"> Download Report</button>
            </div>
    </div>
    </form>
    </div>
    <div class="d-flex justify-content-center">
        <form action='<?php echo base_url('/printreport');?> ' method="post" id="C" style="display: none;">
            <div>
                <h2 style="text-align: center;">First year courses</h2>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ph-121">PH-121</label>
                    <select class="form-select text-center" name="ph-121" id="ph-121" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>

                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="hs-101">HS-101</label>
                    <select class="form-select text-center" name="hs-101" id="hs-101" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cy-105">CY-105</label>
                    <select class="form-select text-center" name="cy-105" id="cy-105" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-107">CS-107</label>
                    <select class="form-select text-center" name="cs-107" id="cs-107" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
                
            </div>

            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="mt-111">MT-111</label>
                    <select class="form-select text-center" name="mt-111" id="mt-111" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-105">CS-105</label>
                    <select class="form-select text-center" name="cs-105" id="cs-105" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>


                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-106">CS-106</label>
                    <select class="form-select text-center" name="cs-106" id="cs-106" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="el-102">EL-102</label>
                    <select class="form-select text-center" name="el-102" id="el-102" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
            </div>

            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ee-119">EE-119</label>
                    <select class="form-select text-center" name="ee-119" id="ee-119" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>

                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="me-107">ME-107</label>
                    <select class="form-select text-center" name="me-107" id="me-107" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="hs-105/12">HS-105/12</label>
                    <select class="form-select text-center" name="hs-105/12" id="hs-105/12" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
            </div>
            <p class="text-center">_____________________________________</p>
            <div>
                <h2 style="text-align: center;">Second year courses</h2>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-215">CS-215</label>
                    <select class="form-select text-center" name="cs-215" id="cs-215" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="mt-222">MT-222</label>
                    <select class="form-select text-center" name="mt-222" id="mt-222" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ee-222">EE-222</label>
                    <select class="form-select text-center" name="ee-222" id="ee-222" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="mt-224">MT-224</label>
                    <select class="form-select text-center" name="mt-224" id="mt-224" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-210">CS-210</label>
                    <select class="form-select text-center" name="cs-210" id="cs-210" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>

                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-211">CS-211</label>
                    <select class="form-select text-center" name="cs-211" id="cs-211" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-203">CS-203</label>
                    <select class="form-select text-center" name="cs-203" id="cs-203" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-214">CS-214</label>
                    <select class="form-select text-center" name="cs-214" id="cs-214" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ee-217">EE-217</label>
                    <select class="form-select text-center" name="ee-217" id="ee-217" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-212">CS-212</label>
                    <select class="form-select text-center" name="cs-212" id="cs-212" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="hs-205/20">HS-205/20</label>
                    <select class="form-select text-center" name="hs-205/20" id="hs-205/20" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>
                </div>
            </div>
            <p class="text-center">_____________________________________</p>
            <div>
                <h2 style="text-align: center;">Third year courses</h2>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="mt-331">MT-331</label>
                    <select class="form-select text-center" name="mt-331" id="mt-331" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="ef-303">EF-303</label>
                    <select class="form-select text-center" name="ef-303" id="ef-303" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="hs-304">HS-304</label>
                    <select class="form-select text-center" name="hs-304" id="hs-304" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-301">CS-301</label>
                    <select class="form-select text-center" name="cs-301" id="cs-301" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-302">CS-302</label>
                    <select class="form-select text-center" name="cs-302" id="cs-302" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="tc-383">TC-383</label>
                    <select class="form-select text-center" name="tc-383" id="tc-383" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>

                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="el-332">EL-332</label>
                    <select class="form-select text-center" name="EL-332" id="el-332" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-318">CS-318</label>
                    <select class="form-select text-center" name="cs-318" id="cs-318" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-306">CS-306</label>
                    <select class="form-select text-center" name="cs-306" id="cs-306" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>
                    </select>

                </div>
                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-312">CS-312</label>
                    <select class="form-select text-center" name="cs-312" id="cs-312" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>

                <div class="input-group mb-3 w-100 col">
                    <label class="input-group-text" for="cs-317">CS-317</label>
                    <select class="form-select text-center" name="cs-317" id="cs-317" required>
                        <option value="">Choose</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="B-">B-</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="C-">C-</option>
                        <option value="D+">D+</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                        <option value="I">I</option>
                        <option value="W">W</option>
                        <option value="WU">WU</option>

                    </select>

                </div>
            </div>
            <div style="text-align:center;">
                <button class="button" style="color: #000; font-weight: bold; font-size: large; margin-right: 5rem;"> Generate Report</button>
                <button class="button" formaction = '<?php echo base_url('/downloadcontroller')?>'style="color: #000; font-weight: bold; font-size: large; margin-right: 15rem;"> Download Report</button>
            </div>

    </div>
    </form>
    
</body>


</html>
