<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamnagar Public Welfare Schemes</title>
    <meta name="theme-color" content="#9D4EDD">

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/FwbCBHF/fotor-2023-1-29-10-51-0.png">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>

<body>
    <div class="main-div">
        <div class="container-body" id="main-body">
            <h1 style="text-align: center;"><b>Jamnagar Public Welfare Schemes</b></h1>

            <!-- Gender -->
            <h4>Gender</h4>
            <select class="form-select" aria-label="Default select example" id="gender">
                <option selected disabled>Select Your Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <br>
            <!-- Gender -->
            <h4>Age</h4>
            <select class="form-select" aria-label="Default select example" id="age">
                <option selected disabled>Select Your Age</option>
                <option value="5year">0 to 5 Year</option>
                <option value="10year"> 5 to 10 Year</option>
                <option value="15year">10 to 15 Year</option>
                <option value="17year">15 to 17 Year</option>
                <option value="25year">18 to 25 Year</option>
                <option value="35year">25 to 35 Year</option>
                <option value="60year">35 to 60 Year</option>
                <option value="60above">60 Year Above</option>
            </select>

            <br>
            <!-- Category -->
            <h4>Category</h4>
            <select class="form-select" aria-label="Default select example" id="category">
                <option selected disabled>Select Your Category</option>
                <option value="general">General</option>
                <option value="obc">Other Backward Class (OBC)</option>
                <option value="sc">Scheduled Caste (SC)</option>
                <option value="st">Scheduled Tribe (ST)</option>
            </select>

            <br>
            <!-- area of residence  -->
            <h4>Area of residence</h4>
            <select class="form-select" aria-label="Default select example" id="residence">
                <option selected disabled>Select Your Area of residence</option>
                <option value="urban">Urban</option>
                <option value="rural">Rural</option>
            </select>

            <br>
            <!-- Occupation -->
            <h4>Occupation</h4>
            <select class="form-select" aria-label="Default select example" id="occupation">
                <option selected disabled>Select Your Occupation</option>
                <option value="student">Student</option>
                <option value="businessman">Businessman</option>
                <option value="gov-emp">Gov. employee</option>
                <option value="pri-emp">Private employee</option>
                <option value="farmer">Farmer</option>
                <option value="worker">Worker</option>
                <option value="uemployed">Unemployed</option>
                <option value="other">Other</option>

            </select>

            <br>
            <!--Family Income  -->
            <h4>Family income</h4>
            <select class="form-select" aria-label="Default select example" id="income">
                <option selected disabled>Select Your Family income</option>
                <option value="2L">0 to 2.5L</option>
                <option value="5L">2.5L to 5.0L</option>
                <option value="8L">5.0L to 8.5L</option>
                <option value="8Labove">8.5L Above</option>
            </select>
            <br>

            <button class='btn btn-primary shadow-none' onclick="myscheme()">Find Scheme &nbsp;<svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                    </path>
                </svg></i></button>

        </div>
    </div>

    <div class="parentscheme">
        <div class="container scheme" id="scheme1">
            <table class="table table-bordered mt-2">
                <tbody>
                    <tr>
                        <th>યોજનાનું નામ</th>
                        <td>ગુજરાત મુખ્યમંત્રી મહિલા ઉત્કર્ષ યોજના.</td>
                    </tr>
                    <tr>
                        <th>યોજના વિશે</th>
                        <td>મહિલાઓને 0% વ્યાજ દરે 1 લાખ રૂપિયા સુધીની લોન</td>
                    </tr>
                    <tr>
                        <th>દસ્તાવેજો</th>
                        <td>
                            <ul>
                                <li>આધાર કાર્ડ.</li>
                                <li>કાયમી રહેઠાણનું પ્રમાણપત્ર.</li>
                                <li>આવકનું પ્રમાણપત્ર.</li>
                                <li>રેશન કાર્ડ.</li>
                                <li>આવકનું પ્રમાણપત્ર.</li>
                                <li>બેંક એકાઉન્ટ સ્ટેટમેન્ટ.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>લાયકાત</th>
                        <td>માત્ર ગુજરાત રાજ્યની મહિલાઓ.</td>
                    </tr>
                    <tr>
                        <th>વેબસાઇટ</th>
                        <td><a href="https://mmuy.gujarat.gov.in/">Click Here</a></td>
                    </tr>
                    <tr>
                        <th>Download Form PDF</th>
                        <td><a href="https://mmuy.gujarat.gov.in/assets/img/Tharav_Final.pdf" download>Download</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container scheme" id="scheme2">
            <table class="table table-bordered mt-2">
                <tbody>
                    <tr>
                        <th>યોજનાનું નામ</th>
                        <td>નિરામયા હેલ્થ ઇન્સ્યોરન્સ યોજના</td>
                    </tr>
                    <tr>
                        <th>યોજના વિશે</th>
                        <td>૬૦ થી ૭૯ વર્ષ સુધીના લાભાર્થીને રૂ. ૧૦૦૦/- અને ૮૦ વર્ષ કે તેથી વધુ વયનાં લાભાર્થીને રૂ.
                            ૧૨૫૦/- ની માસિક સહાય ચૂકવવામાં આવે છે.</td>
                    </tr>
                    <tr>
                        <th>દસ્તાવેજો</th>
                        <td>
                            <ul>
                                <li>ઉંમરનું પ્રમાણપત્ર / શાળા છોડ્યાનું પ્રમાણપત્ર / ડોક્ટરશ્રી દ્વારા આપવામાં આવેલ વય
                                    પ્રમાણપત્ર</li>
                                <li>આવકનો દાખલો</li>
                                <li>દિવ્યાંગતાના કિસ્સામાં દિવ્યાંગતાનું પ્રમાણપત્ર.</li>
                                <li>૨૧ વર્ષ થી મોટી ઉમરનો પુત્ર ન હોવાનું પ્રમાણપત્ર.</li>
                                <li>આવકનું પ્રમાણપત્ર.</li>
                                <li>બેન્ક/પોસ્ટ ઓફીસ એકાઉન્ટ.</li>
                                <li>રેશનકાર્ડ</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>લાયકાત</th>
                        <td>
                            <ul>
                                <li>૬૦ વર્ષ કે તેથી વધુ ઉંમરનાં નિરાધાર વૃધ્ધ</li>
                                <li>૨૧ કે તેથી વધુ વર્ષનો પુત્ર ન હોય</li>
                                <li>અશક્ત- દિવ્યાંગ વ્યક્તિનાં કિસ્સામાં ૭૫ ટકા થી વધારે દિવ્યાંગતા હોય અને ૪૫ કે તેથી
                                    વધુ ઉંમરની વયમર્યાદા હોવી જોઈએ.</li>
                                <li>અરજદારની વાર્ષિક આવક ગ્રામ્ય વિસ્તાર રૂ. ૧,૨૦,૦૦૦/- અને શહેરી વિસ્તાર રૂ. ૧,૫૦,૦૦૦/-
                                    થી વધુ ન હોવી જોઈએ</li>
                                <li>ઓછામાં ઓછા ૧૦ વર્ષથી ગુજરાતમાં કાયમી વસવાટ હોય.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>વેબસાઇટ</th>
                        <td><a href="https://sje.gujarat.gov.in/dsd/Schemes/2212">Click Here</a></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="container scheme" id="scheme3">
            <table class="table table-bordered mt-2">
                <tbody>
                    <tr>
                        <th>યોજનાનું નામ</th>
                        <td>પ્રધાનમંત્રી કિસાન
                            માન-ધાન યોજના</td>
                    </tr>
                    <tr>
                        <th>યોજના વિશે</th>
                        <td>Government of India હેઠળ કાર્યરત Ministry of Labour & Employment અને Ministry of Agriculture
                            & Farmers Welfare દ્વારા અમલમાં મૂકવામાં આવેલ છે. આ યોજના દ્વારા ખેડૂતોને ઘડપણમાં સુરક્ષા
                            પૂરી પાડવાનો છે. આ યોજના દ્વારા દેશના નાના અને સીમાંત ખેડૂતોને 60 વર્ષ પછી દર મહિને રૂપિયા
                            3000 પેન્‍શનની રકમ આપીને સુરક્ષા આપવાનો મુખ્ય હેતુ છે. પ્રધાનમંત્રી કિસાન માનધન યોજના 2021
                            દ્વારા કિસાનોની સામાજિક સુરક્ષા આપવામાં આવે, જેના દ્વારા ખેડૂતોનું ભવિષ્ય સુરક્ષિત રહે અને
                            તેઓ વિકાસ કરી શકે તે આ યોજનાનું મુખ્ય લક્ષ્ય છે.</td>
                    </tr>
                    <tr>
                        <th>દસ્તાવેજો</th>
                        <td>
                            <ul>
                                <li>આધારકાર્ડ</li>
                                <li>ચૂંટણીકાર્ડ/પાનકાર્ડ/ પાસપોર્ટ પૈકી કોઈપણ એક</li>
                                <li>ઉંમર અંગેનું પ્રમાણપત્ર</li>
                                <li>ખેતીની જમીન ધરાવતા હોય તો તેના પ્રમાણપત્ર</li>
                                <li>બેંક ખાતાની ઝેરોક્ષ</li>
                                <li>મોબાઈલ નંબર
                                    ઈમેઈલ આઈડી
                                    પાસપોર્ટ સાઈઝનો ફોટો</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>લાયકાત</th>
                        <td>
                            <ul>
                                <li>ભારતના નાગરિક હોય તેવા 18 થી 40 વર્ષના ખેડૂતોને મળશે.</li>
                                <li>નાના અને સીમાંત ખેડૂતોને આ યોજનાનો લાભ મળશે</li>
                                <li>ખેડૂત 2 હેક્ટર કરતા ઓછી જમીન ધરાવતો હોય તો લાભ મળવાપાત્ર થાય</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>વેબસાઇટ</th>
                        <td><a href="https://mmuy.gujarat.gov.in/https://maandhan.in/">Click Here</a></td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>



</body>
<!-- Javascript -->
<script src="script.js"></script>

</html>