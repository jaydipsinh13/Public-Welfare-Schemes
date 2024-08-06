<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0, user-scalable=0">
  <meta property="og:title" content="Taluka Panchayat - GOVERNMENT OF GUJARAT" />
  <meta property="og:description" content=A Taluka Panchayat is a local government body in India that is responsible for
    the administration of a taluka, which is a sub-district level administrative unit." />
  <meta property="og:image" content="https://i.ibb.co/FwbCBHF/fotor-2023-1-29-10-51-0.png" />
  <title>બેરોજગાર ભથ્થું યોજના - Jamnagar Municipal Corporation</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/FwbCBHF/fotor-2023-1-29-10-51-0.png">

  <link rel="stylesheet" href="certificate-style.css">

  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@300;400&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>

  <header class="header" data-header>
    <div class="container-div">

      <a href="../../index.php" class="logo">
        <img src="https://i.ibb.co/ctVwdSx/menu-logo.png" alt="Taluka Panchayat logo" width="250px" class="nav-logo">
      </a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="index.php#about" class="navbar-link">About</a>
          </li>

          <li>
            <a href="index.php#lasted" class="navbar-link">Lasted Schemes</a>
          </li>

          <li>
            <a href="scheme/index.php" class="navbar-link">Schemes For You</a>
          </li>

          <li>
            <div class="google_translate">
              <a href="#" class="disclaimer" data-toggle="tooltip" data-placement="top">
                <i class="icon icon-information2"></i>
              </a>
              <div id="google_translate_element"></div>
            </div>
          </li>

        </ul>

      </nav>

    </div>
  </header>

  <div class="container">
    <header>બેરોજગાર ભથ્થું યોજના - Jamnagar Municipal Cor.</header>

    <form action="code.php" method="POST">
      <div class="form first">
        <div class="details personal">
          <span class="title">Personal Details</span>

          <div class="fields">
            <div class="input-field">
              <label>Full Name</label>
              <input type="text" placeholder="Enter your name" id="name" name="fullname" required>
            </div>

            <div class="input-field">
              <label>Date of Birth</label>
              <input type="date" placeholder="Enter birth date" name="dob" required>
            </div>

            <div class="input-field">
              <label>Email</label>
              <input type="text" placeholder="Enter your email" name="email" required>
            </div>

            <div class="input-field">
              <label>Mobile Number</label>
              <input type="number" placeholder="Enter mobile number" name="mobile" required pattern="/^-?\d+\.?\d*$/"
                onKeyPress="if(this.value.length==10) return false;">
            </div>

            <div class="input-field">
              <label>Gender</label>
              <select required name="gender">
                <option disabled selected>Select gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
              </select>
            </div>

            <div class="input-field">
              <label>Aadhar Card Number</label>
              <input type="number" placeholder="Enter your Aadhar card Number" name="aadhar" required
                pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;">
            </div>

            <div class="input-field">
              <label>Father name</label>
              <input type="text" placeholder="Enter Father name" name="fathername" required>
            </div>

            <div class="input-field">
              <label>Relation</label>
              <select name="relation" required>
                <option disabled selected>Select</option>
                <option>દીકરો/પુત્ર</option>
                <option>પુત્રી</option>
              </select>
            </div>

            <div class="input-field">
              <label>Caste</label>
              <select name="caste">
                <option disabled selected required>Select</option>
                <option>Bhathi Rajput/ભાથી રાજપૂત</option>
                <option>Charan gadhvi/ચારણ ગઢવી</option>
                <option>Chaudhary/ચૌધરી</option>
                <option>Prajapati/પ્રજાપતિ</option>
              </select>
            </div>


          </div>

          <div class="details ID">
            <span class="title">Address Details</span>

            <div class="fields">
              <div class="input-field">
                <label>District</label>
                <select required name="district" required>
                  <option disabled selected>Select District</option>
                  <option>Banaskantha </option>
                </select>
              </div>

              <div class="input-field">
                <label>Taluka</label>
                <select required name="taluka" required>
                  <option disabled selected>Select Taluka</option>
                  <option>Vav</option>
                  <option>Tharad</option>
                  <option>Dhanera</option>
                  <option>Dantiwada</option>
                  <option>Vadgam</option>
                  <option>Palanpur</option>
                  <option>Deesa</option>
                  <option>Deodar</option>
                  <option>Bhabhar</option>
                  <option>Kankrej</option>
                </select>
              </div>

              <div class="input-field">
                <label>Village</label>
                <select required name="village" required>
                  <option disabled selected>Select Village</option>
                  <option>Pasvadal</option>
                  <option>Malosana</option>
                  <option>Majadar</option>
                  <option>Teniwada</option>
                  <option>Basu</option>
                  <option>Bharkawada</option>
                </select>
              </div>

              <div class="input-field">
                <label>Upload Income Proof </label>
                <input type="file" style="padding-top: 10px;" name="IncomeProof" required>
              </div>

              <div class="input-field">
                <label>Annual Income</label>
                <input type="number" placeholder="Enter Annual Income" id="income-id" required name="annualincome">
              </div>

              <div class="input-field">
                <label>Issue date </label>
                <input type="date" name="issuedate" required>
              </div>

              <div class="input-field">
                <label>Upload Caste Certificate</label>
                <input type="file" style="padding-top: 10px;" required name="CasteCertificate">
              </div>

              <div class="input-field">
                <label>Certificate number</label>
                <input type="number" placeholder="Enter Certificate number" required name="Certificatenumber">
              </div>

              <div class="input-field">
                <label>Photo</label>
                <input type="file" accept="image/*" capture="user" required style="padding-top: 10px;" name="Photo">
              </div>

              <div class="input-field" style="display:none;">
                <label>Remark</label>
                <textarea name="remark" cols="30" rows="10"></textarea>
              </div>

              <div class="input-field" style="display:none;">
                <label>Status</label>
                <select name="fstatus">
                  <option selected>Pending</option>
                  <option>Approved</option>
                  <option>Cancelled</option>
                </select>
              </div>

              <button class="sumbit" name="sumbit">
                <span class="btnText">Submit</span>
                <i class="uil uil-navigator"></i>
              </button>

            </div>

          </div>
        </div>
      </div>
    </form>
  </div>




  <script>
    'use strict';

    // navbar variables
    const navToggleBtn = document.querySelector("[data-nav-toggle-btn]");
    const header = document.querySelector("[data-header]");

    navToggleBtn.addEventListener("click", function () {
      header.classList.toggle("active");
    });
  </script>

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'gu,hi,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
    }
  </script>
  <script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- - ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>