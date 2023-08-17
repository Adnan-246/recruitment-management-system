<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Recruitment Management Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!--Font Awesome-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css"/>
         <!--Alert Message show -->
         <link rel="stylesheet" type="text/css" href="/assets/libs/toastr/build/toastr.min.css">
         <!-- Sweet Alert-->
        <link href="/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
         <!-- Responsive Table css -->
         <link href="/assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
         <!--Alert Message show -->
         <link rel="stylesheet" type="text/css" href="/assets/libs/toastr/build/toastr.min.css">
          <!-- Custom css -->
        <link rel="stylesheet" href="/css/style.css" type="text/css">
        

    </head>

    
    <body style="background-color: 
    #f1f1f1;">

      <div class="p-2 mb-3" style="background-color: 
      #aac9ff;">
        <h2 class="mx-5" style="color: black; text-indent: 7%; font-size: 2.0rem;"><b>Careers</b></h2>
      </div>
    
        <!-- Begin page -->
        <div id="layout-wrapper">
          <div class="wrapper">
      
       
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-12">
                    <h2 class="mx-5 mt-4"></h2>
                    <ol class="breadcrumb float-sm-right mx-5" style="float: right;">
                      <li class="breadcrumb-item"><a href="{{ route('public.index') }}"><i class="fas fa-user mr-1" aria-hidden="true"></i> Careers</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('job.detail',$job->id) }}">{{ $job->position_name }}</a></li>
                      <li class="breadcrumb-item active">Apply</li>
                    </ol>
                  </div>
                  
                </div>
              </div><!-- /.container-fluid -->
            </section>
        
              <!-- Main content -->
            <section class="content">
              <div class="container-fluid ">
                <div class="row">

                  <div class="col-8 mx-5 mt-2">
                    <div class="card " style="left: 12%; right:5%;">
                      
                      <!-- /.card-header -->
                      <div class="card-body">

                        <p ><h4 style="font-family: IBM Plex Sans,sans-serif;
                          font-size: 2.0rem;
                          font-weight: 500;
                          line-height: 1.25;
                          color: #000000;
                          text-align:center;">Applicant Application</h4></p>

                        @if (count($errors) > 0)
                        <div class = "alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                     @endif

                        <form class="custom-validation" action="{{ url('public/applicant/store') }}" method="POST" enctype="multipart/form-data">
                          @csrf

                          <br><br>
                          <p style="font-family: IBM Plex Sans,sans-serif;
                          font-size: 1.5rem;
                          font-weight: 500;
                          line-height: 1.25;
                          color: #000000;">Personal Information:</p>


                          
                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b></b>
                            <span style="color:#ff0000"></span></label>
                          
                              <div class="col-sm-9 mt-2">
                                <input type="date" name="apply_date" class="form-control" value="{{ $date = date('Y-m-d'); }}" hidden>
                              </div>
                          </div>

                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b></b>
                            <span style="color:#ff0000"></span></label>
                          
                              <div class="col-sm-9 mt-2">
                                <select class="form-control @error('job_id') is-invalid @enderror" name="job_id" hidden>
                                  <option selected>{{ $job->job_id_no }}</option>
                                  <option disabled >----Select----</option>
                                   @foreach ($jobs as $row)
                                   
                                       <option value="{{ $row->id }}">{{ $row->job_id_no }}</option>
                                   @endforeach
                               </select>
                              </div>
                          </div>

                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>First Name</b>
                            <span style="color:#ff0000">*</span></label>
                          
                              <div class="col-sm-9 mt-2">
                                <input type="text" class="form-control @error('f_name') is-invalid @enderror" name="f_name" placeholder="type first name" value="{{ old('f_name') }}" required>
                                @error('f_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                             
                          </div>

                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Last Name</b>
                            <span style="color:#ff0000">*</span></label>
                          
                             
                              <div class="col-sm-9 mt-2">
                                <input type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name" placeholder="type last name" value="{{ old('l_name') }}" required>
                                @error('l_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>

                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Email</b>
                            <span style="color:#ff0000">*</span></label>
                          
                              <div class="col-sm-9 mt-2">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="type email" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                            
                          </div>

                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Phone</b>
                            <span style="color:#ff0000">*</span></label>
                          
                              <div class="col-sm-9 mt-2">
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="type phone number" pattern="[0-9]{5}-[0-9]{6}" value="{{ old('phone') }}" required>

                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>

                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Date of Birth</b>
                            <span style="color:#ff0000">*</span></label>
                          
                              <div class="col-sm-9 mt-2">
                                <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required>

                                @error('dob')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>

                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Gender</b>
                            <span style="color:#ff0000">*</span></label>
                          
                              <div class="col-sm-9 mt-2">
                                <div class="custom-radio form-check form-check-inline ">
                                  <input type="radio" id="customRadioInline1" name="gender" class="form-check-input" value="Male">
                                  <label class="form-check-label" for="customRadioInline">Male</label>
                              </div>
                              <div class="custom-radio form-check form-check-inline">
                                  <input type="radio" id="customRadioInline2" name="gender" class="form-check-input" value="Female">
                                  <label class="form-check-label" for="customRadioInline">Female</label>
                              </div>
                              <div class="custom-radio form-check form-check-inline">
                                  <input type="radio" id="customRadioInline2" name="gender" class="form-check-input" value="Other">
                                  <label class="form-check-label" for="customRadioInline">Other</label>
                              </div>

                                @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>

                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Address</b>
                            <span style="color:#ff0000">*</span></label>
                          
                             
                              <div class="col-sm-9 mt-2">
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Street address" value="{{ old('address') }}" required>
                                @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                             
                              <div class="col-sm-3 mt-2 mx-5" style="left: 11%;">
                                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder=" City" value="{{ old('city') }}" required>
                                @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="col-sm-3 mt-2" style="left: 5%;">
                                <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" placeholder="State/Province" value="{{ old('state') }}" required>
                                @error('state')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="col-sm-3 mt-2" style="left: 5%;">
                                <select id="country" name="country" class="form-select @error('country') is-invalid @enderror">
                                  <option disabled selected="selected">country  {{ old('country') }}</option>
                                  <option value="Afghanistan">Afghanistan</option>
                                  <option value="Aland Islands">Aland Islands</option>
                                  <option value="Albania">Albania</option>
                                  <option value="Algeria">Algeria</option>
                                  <option value="American Samoa">American Samoa</option>
                                  <option value="Andorra">Andorra</option>
                                  <option value="Angola">Angola</option>
                                  <option value="Anguilla">Anguilla</option>
                                  <option value="Antarctica">Antarctica</option>
                                  <option value="Antigua and Barbuda">Antigua & Barbuda</option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Armenia">Armenia</option>
                                  <option value="Aruba">Aruba</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Austria">Austria</option>
                                  <option value="Azerbaijan">Azerbaijan</option>
                                  <option value="Bahamas">Bahamas</option>
                                  <option value="Bahrain">Bahrain</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Barbados">Barbados</option>
                                  <option value="Belarus">Belarus</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="Belize">Belize</option>
                                  <option value="Benin">Benin</option>
                                  <option value="Bermuda">Bermuda</option>
                                  <option value="Bhutan">Bhutan</option>
                                  <option value="Bolivia">Bolivia</option>
                                  <option value="Bonaire, Sint Eustatius and Saba">Caribbean Netherlands</option>
                                  <option value="Bosnia and Herzegovina">Bosnia & Herzegovina</option>
                                  <option value="Botswana">Botswana</option>
                                  <option value="Bouvet Island">Bouvet Island</option>
                                  <option value="Brazil">Brazil</option>
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                  <option value="Brunei Darussalam">Brunei</option>
                                  <option value="Bulgaria">Bulgaria</option>
                                  <option value="Burkina Faso">Burkina Faso</option>
                                  <option value="Burundi">Burundi</option>
                                  <option value="Cambodia">Cambodia</option>
                                  <option value="Cameroon">Cameroon</option>
                                  <option value="Canada">Canada</option>
                                  <option value="Cape Verde">Cape Verde</option>
                                  <option value="Cayman Islands">Cayman Islands</option>
                                  <option value="Central African Republic">Central African Republic</option>
                                  <option value="Chad">Chad</option>
                                  <option value="Chile">Chile</option>
                                  <option value="China">China</option>
                                  <option value="Christmas Island">Christmas Island</option>
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                  <option value="Colombia">Colombia</option>
                                  <option value="Comoros">Comoros</option>
                                  <option value="Congo">Congo - Brazzaville</option>
                                  <option value="Congo, Democratic Republic of the Congo">Congo - Kinshasa</option>
                                  <option value="Cook Islands">Cook Islands</option>
                                  <option value="Costa Rica">Costa Rica</option>
                                  <option value="Cote D'Ivoire">Cote d'Ivoire</option>
                                  <option value="Croatia">Croatia</option>
                                  <option value="Cuba">Cuba</option>
                                  <option value="Curacao">Curacao</option>
                                  <option value="Cyprus">Cyprus</option>
                                  <option value="Czech Republic">Czechia</option>
                                  <option value="Denmark">Denmark</option>
                                  <option value="Djibouti">Djibouti</option>
                                  <option value="Dominica">Dominica</option>
                                  <option value="Dominican Republic">Dominican Republic</option>
                                  <option value="Ecuador">Ecuador</option>
                                  <option value="Egypt">Egypt</option>
                                  <option value="El Salvador">El Salvador</option>
                                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                                  <option value="Eritrea">Eritrea</option>
                                  <option value="Estonia">Estonia</option>
                                  <option value="Ethiopia">Ethiopia</option>
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Islas Malvinas)</option>
                                  <option value="Faroe Islands">Faroe Islands</option>
                                  <option value="Fiji">Fiji</option>
                                  <option value="Finland">Finland</option>
                                  <option value="France">France</option>
                                  <option value="French Guiana">French Guiana</option>
                                  <option value="French Polynesia">French Polynesia</option>
                                  <option value="French Southern Territories">French Southern Territories</option>
                                  <option value="Gabon">Gabon</option>
                                  <option value="Gambia">Gambia</option>
                                  <option value="Georgia">Georgia</option>
                                  <option value="Germany">Germany</option>
                                  <option value="Ghana">Ghana</option>
                                  <option value="Gibraltar">Gibraltar</option>
                                  <option value="Greece">Greece</option>
                                  <option value="Greenland">Greenland</option>
                                  <option value="Grenada">Grenada</option>
                                  <option value="Guadeloupe">Guadeloupe</option>
                                  <option value="Guam">Guam</option>
                                  <option value="Guatemala">Guatemala</option>
                                  <option value="Guernsey">Guernsey</option>
                                  <option value="Guinea">Guinea</option>
                                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                                  <option value="Guyana">Guyana</option>
                                  <option value="Haiti">Haiti</option>
                                  <option value="Heard Island and Mcdonald Islands">Heard & McDonald Islands</option>
                                  <option value="Holy See (Vatican City State)">Vatican City</option>
                                  <option value="Honduras">Honduras</option>
                                  <option value="Hong Kong">Hong Kong</option>
                                  <option value="Hungary">Hungary</option>
                                  <option value="Iceland">Iceland</option>
                                  <option value="India">India</option>
                                  <option value="Indonesia">Indonesia</option>
                                  <option value="Iran, Islamic Republic of">Iran</option>
                                  <option value="Iraq">Iraq</option>
                                  <option value="Ireland">Ireland</option>
                                  <option value="Isle of Man">Isle of Man</option>
                                  <option value="Israel">Israel</option>
                                  <option value="Italy">Italy</option>
                                  <option value="Jamaica">Jamaica</option>
                                  <option value="Japan">Japan</option>
                                  <option value="Jersey">Jersey</option>
                                  <option value="Jordan">Jordan</option>
                                  <option value="Kazakhstan">Kazakhstan</option>
                                  <option value="Kenya">Kenya</option>
                                  <option value="Kiribati">Kiribati</option>
                                  <option value="Korea, Democratic People's Republic of">North Korea</option>
                                  <option value="Korea, Republic of">South Korea</option>
                                  <option value="Kosovo">Kosovo</option>
                                  <option value="Kuwait">Kuwait</option>
                                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                                  <option value="Lao People's Democratic Republic">Laos</option>
                                  <option value="Latvia">Latvia</option>
                                  <option value="Lebanon">Lebanon</option>
                                  <option value="Lesotho">Lesotho</option>
                                  <option value="Liberia">Liberia</option>
                                  <option value="Libyan Arab Jamahiriya">Libya</option>
                                  <option value="Liechtenstein">Liechtenstein</option>
                                  <option value="Lithuania">Lithuania</option>
                                  <option value="Luxembourg">Luxembourg</option>
                                  <option value="Macao">Macao</option>
                                  <option value="Macedonia, the Former Yugoslav Republic of">North Macedonia</option>
                                  <option value="Madagascar">Madagascar</option>
                                  <option value="Malawi">Malawi</option>
                                  <option value="Malaysia">Malaysia</option>
                                  <option value="Maldives">Maldives</option>
                                  <option value="Mali">Mali</option>
                                  <option value="Malta">Malta</option>
                                  <option value="Marshall Islands">Marshall Islands</option>
                                  <option value="Martinique">Martinique</option>
                                  <option value="Mauritania">Mauritania</option>
                                  <option value="Mauritius">Mauritius</option>
                                  <option value="Mayotte">Mayotte</option>
                                  <option value="Mexico">Mexico</option>
                                  <option value="Micronesia, Federated States of">Micronesia</option>
                                  <option value="Moldova, Republic of">Moldova</option>
                                  <option value="Monaco">Monaco</option>
                                  <option value="Mongolia">Mongolia</option>
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option>
                                  <option value="Morocco">Morocco</option>
                                  <option value="Mozambique">Mozambique</option>
                                  <option value="Myanmar">Myanmar (Burma)</option>
                                  <option value="Namibia">Namibia</option>
                                  <option value="Nauru">Nauru</option>
                                  <option value="Nepal">Nepal</option>
                                  <option value="Netherlands">Netherlands</option>
                                  <option value="Netherlands Antilles">Curaçao</option>
                                  <option value="New Caledonia">New Caledonia</option>
                                  <option value="New Zealand">New Zealand</option>
                                  <option value="Nicaragua">Nicaragua</option>
                                  <option value="Niger">Niger</option>
                                  <option value="Nigeria">Nigeria</option>
                                  <option value="Niue">Niue</option>
                                  <option value="Norfolk Island">Norfolk Island</option>
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                  <option value="Norway">Norway</option>
                                  <option value="Oman">Oman</option>
                                  <option value="Pakistan">Pakistan</option>
                                  <option value="Palau">Palau</option>
                                  <option value="Palestinian Territory, Occupied">Palestine</option>
                                  <option value="Panama">Panama</option>
                                  <option value="Papua New Guinea">Papua New Guinea</option>
                                  <option value="Paraguay">Paraguay</option>
                                  <option value="Peru">Peru</option>
                                  <option value="Philippines">Philippines</option>
                                  <option value="Pitcairn">Pitcairn Islands</option>
                                  <option value="Poland">Poland</option>
                                  <option value="Portugal">Portugal</option>
                                  <option value="Puerto Rico">Puerto Rico</option>
                                  <option value="Qatar">Qatar</option>
                                  <option value="Reunion">Réunion</option>
                                  <option value="Romania">Romania</option>
                                  <option value="Russian Federation">Russia</option>
                                  <option value="Rwanda">Rwanda</option>
                                  <option value="Saint Barthelemy">St. Barthélemy</option>
                                  <option value="Saint Helena">St. Helena</option>
                                  <option value="Saint Kitts and Nevis">St. Kitts & Nevis</option>
                                  <option value="Saint Lucia">St. Lucia</option>
                                  <option value="Saint Martin">St. Martin</option>
                                  <option value="Saint Pierre and Miquelon">St. Pierre & Miquelon</option>
                                  <option value="Saint Vincent and the Grenadines">St. Vincent & Grenadines</option>
                                  <option value="Samoa">Samoa</option>
                                  <option value="San Marino">San Marino</option>
                                  <option value="Sao Tome and Principe">São Tomé & Príncipe</option>
                                  <option value="Saudi Arabia">Saudi Arabia</option>
                                  <option value="Senegal">Senegal</option>
                                  <option value="Serbia">Serbia</option>
                                  <option value="Serbia and Montenegro">Serbia</option>
                                  <option value="Seychelles">Seychelles</option>
                                  <option value="Sierra Leone">Sierra Leone</option>
                                  <option value="Singapore">Singapore</option>
                                  <option value="Sint Maarten">Sint Maarten</option>
                                  <option value="Slovakia">Slovakia</option>
                                  <option value="Slovenia">Slovenia</option>
                                  <option value="Solomon Islands">Solomon Islands</option>
                                  <option value="Somalia">Somalia</option>
                                  <option value="South Africa">South Africa</option>
                                  <option value="South Georgia and the South Sandwich Islands">South Georgia & South Sandwich Islands</option>
                                  <option value="South Sudan">South Sudan</option>
                                  <option value="Spain">Spain</option>
                                  <option value="Sri Lanka">Sri Lanka</option>
                                  <option value="Sudan">Sudan</option>
                                  <option value="Suriname">Suriname</option>
                                  <option value="Svalbard and Jan Mayen">Svalbard & Jan Mayen</option>
                                  <option value="Swaziland">Eswatini</option>
                                  <option value="Sweden">Sweden</option>
                                  <option value="Switzerland">Switzerland</option>
                                  <option value="Syrian Arab Republic">Syria</option>
                                  <option value="Taiwan, Province of China">Taiwan</option>
                                  <option value="Tajikistan">Tajikistan</option>
                                  <option value="Tanzania, United Republic of">Tanzania</option>
                                  <option value="Thailand">Thailand</option>
                                  <option value="Timor-Leste">Timor-Leste</option>
                                  <option value="Togo">Togo</option>
                                  <option value="Tokelau">Tokelau</option>
                                  <option value="Tonga">Tonga</option>
                                  <option value="Trinidad and Tobago">Trinidad & Tobago</option>
                                  <option value="Tunisia">Tunisia</option>
                                  <option value="Turkey">Turkey</option>
                                  <option value="Turkmenistan">Turkmenistan</option>
                                  <option value="Turks and Caicos Islands">Turks & Caicos Islands</option>
                                  <option value="Tuvalu">Tuvalu</option>
                                  <option value="Uganda">Uganda</option>
                                  <option value="Ukraine">Ukraine</option>
                                  <option value="United Arab Emirates">United Arab Emirates</option>
                                  <option value="United Kingdom">United Kingdom</option>
                                  <option value="United States">United States</option>
                                  <option value="United States Minor Outlying Islands">U.S. Outlying Islands</option>
                                  <option value="Uruguay">Uruguay</option>
                                  <option value="Uzbekistan">Uzbekistan</option>
                                  <option value="Vanuatu">Vanuatu</option>
                                  <option value="Venezuela">Venezuela</option>
                                  <option value="Viet Nam">Vietnam</option>
                                  <option value="Virgin Islands, British">British Virgin Islands</option>
                                  <option value="Virgin Islands, U.s.">U.S. Virgin Islands</option>
                                  <option value="Wallis and Futuna">Wallis & Futuna</option>
                                  <option value="Western Sahara">Western Sahara</option>
                                  <option value="Yemen">Yemen</option>
                                  <option value="Zambia">Zambia</option>
                                  <option value="Zimbabwe">Zimbabwe</option>
                              </select>
                                @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>
                          <br><br>
                          <p style="font-family: IBM Plex Sans,sans-serif;
                          font-size: 1.5rem;
                          font-weight: 500;
                          line-height: 1.25;
                          color: #000000;">Education/Experience:</p>

                            <br>
                            <div class="row mb-2">
                              <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Educational Qualification </b>
                              <span style="color:#ff0000">*</span></label>
                            
                                <div class="col-sm-9 mt-2">
                                  <select class="form-select @error('education') is-invalid @enderror" aria-label="Default select example" name="education">
                                    <option disabled selected>----Select----  {{ old('education') }}</option>
                                    <option>Associate Degree</option>
                                    <option>Bachelor Degree</option>
                                    <option>High School</option>
                                    <option>Masters Degree or Higher</option>
                                    <option>Not Specified</option>
                                  </select>
                                  @error('education')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                               
                            </div>

                            <div class="row mb-2">
                              <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Experience </b>
                              <span style="color:#ff0000">*</span></label>
                            
                                <div class="col-sm-9 mt-2">
                                  <select class="form-select  @error('experience') is-invalid @enderror"                     
                                  name="experience" >
                                   <option disabled selected>----Select---- {{ old('experience') }}</option>
                                   <option>1 - 2 Years</option>
                                   <option>2 - 4 Years</option>
                                   <option>5 - 10 Years</option>
                                   <option>None Required</option>
                                   <option>Other</option>
                                 </select>
                                  @error('experience')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                               
                            </div>

                            <div class="row mb-2">
                              <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Experience Description </b>
                              <span style="color:#ff0000">*</span></label>
                            
                                <div class="col-sm-9 mt-2">
                                  <textarea class="form-control @error('experience_descrip') is-invalid @enderror"  name="experience_descrip" rows="6" required>{{ old('experience_descrip') }}</textarea>
                                  @error('experience_descrip')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                               
                            </div>

                            <div class="row mb-2">
                              <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Salary Desired($)</b>
                              <span style="color:#ff0000">*</span></label>
                            
                                <div class="col-sm-9 mt-2">
                                  <input type="currency" class="form-control @error('salary_expect') is-invalid @enderror" name="salary_expect" value="{{ old('salary_expect') }}" placeholder="Salary expect" required>

                                  @error('salary_expect')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                               
                            </div>
                            <br><br>
                            <p style="font-family: IBM Plex Sans,sans-serif;
                            font-size: 1.5rem;
                            font-weight: 500;
                            line-height: 1.25;
                            color: #000000;">Resume/Cover Letter:</p>
  
                              <br>
                              <div class="row mb-2">
                                <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Resume</b>
                                <span style="color:#ff0000">*</span></label>
                              
                                  <div class="col-sm-9 mt-2">
                                    <input type="file" class="form-control @error('resume') is-invalid @enderror" name="resume" value="{{ old('resume') }}">
  
                                    @error('resume')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                  </div>
                                 
                              </div>

                              <div class="row mb-2">
                                <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Cover Letter </b>
                                <span style="color:#ff0000">*</span></label>
                              
                                  <div class="col-sm-9 mt-2">
                                    <textarea class="form-control @error('cover_letter') is-invalid @enderror"  name="cover_letter" rows="10" required>{{ old('cover_letter') }}</textarea>

                                    @error('cover_letter')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                  </div>
                                 
                              </div>

                                 <br>
                                   <div style="text-align:center;">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1" style="background-color: #18bd5b;">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                   
                                </div>
                              
                          </form>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                 
                  <!-- /.col -->
        
                  {{-- <div class="col-3 mt-2">
                    <div class="card ">
                      <div class="card-header" >
                        <h4 >Job Details</h4>
                      </div>
                      
                      <!-- /.card-header -->
                      <div class="card-body">
                        <h5><b>Job ID : </b>
        
                          <h6 class="text-muted">{{ $job->job_id_no }}</h6>
                       </h5>
                       <br>
                        <h5><b>Position Name : </b>
        
                          <h6 class="text-muted">{{ $job->position_name }}</h6>
                       </h5>
                       
                       <br>
                       <h5 ><b>Job Reference :</b>
                        <h6 class="text-muted">{{ $job->ref_code }}</h6>
                     </h5>
                     <br>
                       <h5 ><b>Position Type :</b>
                        <h6 class="text-muted">{{ $job->position_type }}</h6>
                     </h5>
                     <br>
                       <h5 ><b>Location :</b>
                        <h6 class="text-muted">{{ $job->location }}</h6>
                     </h5>
                    
                   
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    
               
                  </div>   <!-- , $jobs->id  --> --}}
                 
                  <!-- /.col -->
                  
              </div>
              <!-- end row -->

              </div>
              <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          <!-- /.content-wrapper -->
        </div>
        <!-- ./wrapper -->
        </div>
        <!-- END layout-wrapper -->

       

          <!-- JAVASCRIPT -->
      
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
          <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="/assets/libs/metismenu/metisMenu.min.js"></script> 
          <script src="/assets/libs/simplebar/simplebar.min.js"></script>
          <script src="/assets/libs/node-waves/waves.min.js"></script>
          <script src="/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
          <script src="/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
  
          <script src="/assets/js/app.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  
          <!-- Sweet Alerts js -->
          <script src="/assets/libs/sweetalert2/sweetalert2.min.js"></script>
          <!-- toastr plugin -->
          <script src="/assets/libs/toastr/build/toastr.min.js"></script>
             <!-- form mask -->
             <script src="/assets/libs/inputmask/min/jquery.inputmask.bundle.min.js"></script>

             <!-- form mask init -->
             <script src="/assets/js/pages/form-mask.init.js"></script>
     
             <!-- parsleyjs -->
             <script src="/assets/libs/parsleyjs/parsley.min.js"></script>
  
             <script src="/assets/js/pages/form-validation.init.js"></script>
     
  
          <script type="text/javascript">
              @if(Session::has('message'))
              var type ="{{ Session::get('alert-type', 'info') }}"
              switch (type) {
                case 'info' :
                  toastr.info("{{ Session::get('message') }}");
                  break;
                case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
                case 'warning':
                  toastr.warning("{{ Session::get('message') }}");
                  break;
                case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
              }
              @endif
            </script>
  

    </body>
</html> 

