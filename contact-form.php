<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="https://eduprov.com/contact.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script type="application/ld+json">
    
    </script>
    <meta name="description" content="">
    <meta name="keywords" content=" 
    
    ">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact Form" />
    <meta property="og:url" content="https://eduprov.com/contact.html" />
    <meta property="og:site_name" content="Eduprov Educational Institute" />
    <meta property="og:description"
      content="" />
    <meta property="og:image" content="#" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@eduprov" />
    <meta name="twitter:title" content="Contact Form" />
    <meta name="twitter:description"
      content="" />
    <meta name="twitter:image" content="#" />
    <meta name="twitter:url" content="https://twitter.com/eduprov" />
    <link rel="shortcut icon" type="image/png" href="/images/favicon.png"  />
    <link rel="apple-touch-icon" href="/images/favicon.png"  >
    <meta name="author" content="thephotogenicbug">
    <link rel="stylesheet" href="blog.css" />
    <link rel="stylesheet" href="accordian.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
      <!-- Prevent form from Submitting Twice -->
      <script>
        if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
        }
        </script>
</head>
<body>
    
  <nav>
    <div class="hamburger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <ul class="nav-links">
      <li><a href="https://eduprov.com/">Home</a></li>
      <li><a href="https://eduprov.com/admission-guidance.html">Admission Guidance</a></li>
      <li><a href="https://eduprov.com/career-counseling.html">Career Counseling</a></li>
      <li><a href="https://eduprov.com/application-form.php">Application Form</a></li>
      <li><a href="https://eduprov.com/contact-form.php">Contact Us</a></li>
    </ul>
  </nav>
  <div id="logo">
    <a href="https://eduprov.com/"><img src="images/logo-white.png" alt="Edu-logo" title="eduprov logo" /></a>
  </div>
    
      <div class="banner">
    
        <div class="container text-white">
          <div class="row">
            <div class="col-md-8 mt-5 pt-5">
              <h1 class="text-white">Contact Form</h1>
            </div>
          </div>
        </div>
      </div>

      <?php
      include('enquiry.php');

      if(!empty($_POST["send"])) {
        $name                 = $_POST["name"];
        $email                = $_POST["email"];
        $mobile               = $_POST["mobile"];
        $enquiry              = $_POST["enquiry"];
        $message              = $_POST["message"];
        


        
            // Store student data in database
            $sql = $connection->query("INSERT INTO enquiry_form(name, mobile, email, enquiry, message, sent_date)
            VALUES (
              '{$name}', 
              '{$mobile}', 
              '{$email}', 
              '{$enquiry}', 
              '{$message}',
              
                now()
                )");

            if(!$sql) {
              die("MySQL query failed.");
            } else {
              $response = array(
                "status" => "alert-success",
                "message" => "Contact Form Submitted Successfully !."
              );              
            }
     
      }  
    ?>
    <!-- Msg -->
    <?php if(!empty($response)) {?>
      <div class="alert text-center <?php echo $response['status']; ?>" role="alert">
        <?php echo $response['message']; ?>
      </div>
    <?php }?>

            <form action="" name="contactForm" method="post" enctype="multipart/form-data">
              <div class="container mt-5">
                <div class="row">
                  <div class="col-md-12"></div>

                  <div class='col-md-4'>
                   <div class="form-group mb-3">
                     <label class="label-title">Name</label><i class="text-danger">*</i><br/>
                    <input type="text" class="form-control text-input"  name="name" placeholder="Name *" id="name" />
                 </div>
                  </div>
                  <div class='col-md-4'>
                   <div class="form-group mb-3">
                     <label class="label-title">Mobile </label><i class="text-danger">*</i><br/>
                     <input type="text" class="form-control text-input" name="mobile" placeholder="Mobile *" id="mobile" />
                  </div>
                  </div>
                  <div class='col-md-4'>
                   <div class="form-group mb-3">
                     <label class="label-title">Email ID</label><i class="text-danger">*</i><br/>
                    <input type="text" class="form-control  text-input" name="email" placeholder="Email ID *" id="email" />
                 </div>
                  </div>
              </div>
              <div class="row">
               <div class="col-md-12"></div>
               <div class='col-md-4'>
                 <div class="form-group mb-3 dropdown">
                   <label class="label-title">Enquiry for </label><i class="text-danger">*</i><br/>
                   <select  class="form-control  text-input" name="enquiry" id="enquiry">
                       <option>Choose...</option>
                       <option>Career Counseling</option>
                       <option>Admission Guidance</option>
                       <option>Overseas Education</option>
                       <option>Job</option>
                   </select>
                </div>
               </div>
                
               <div class='col-md-12'>
                 <div class="form-group mb-3">
                   <label  class="label-title">Message</label><i class="text-danger">*</i><br/>
                  <textarea class="form-control"  rows="5" name="message" id="message" placeholder="Message *"></textarea>
               </div>
               </div>
               <div class="row">
                <div class="col-md-12 text-center">
                  <input class="btn btn-block btn-light" type="submit" name="send" value="Send Message" />
                </div>
            </div>
            <hr/>
                <div class="row mt-4">
                     <div class="col-md-12 text-center">
                       <img src="images/india.png" height="50">
                       <h6 class="mt-3">Head Office (INDIA)</h6>
                     </div>
                 </div>
                  <div class="row text-center">
                   <div class="col-md-6">
                     <img src="images/placeholder.png" class="location-icon"  height="35">
                     <h6 class="mt-3">
                       No 20 3rd Floor Lady Curzon Rd Santha Complex, Lady Curzon Rd, Infantry Rd, Bengaluru Karnataka 560001
                     </h6>
                   </div>
                   <div class="col-md-6">
                     <img src="images/customer-service.png" class="location-icon" height="35">
                     <h6 class="mt-3">+91 80 25591146</h6>
                   </div>
                  </div>
   
                   <div class="row mt-5 pt-3">
                     <div class="col-md-12 text-center">
                       <img src="images/united-states.png"  class="usa-icon" height="50">
                       <h6 class="mt-3">Branch Office (USA)</h6>
                     </div>
                      
                     <div class='row text-center mt-5'>
                       <div class="col-md-4">
                         <img src="images/placeholder.png" class="minnesota-icon" height="35">
                         <h6  class="mt-3" >
                           N.E Blaine Minnesota USA 55434
                         </h6>
                       </div>
                       <div class="col-md-4">
                         <img src="images/placeholder.png" class="minnesota-icon" height="35">
                         <h6  class="mt-3" >
                           Old Whittlesey Road Suite Columbus Georgia 31904, USA
                         </h6>
                       </div>
                       <div class="col-md-4 ">
                        <img src="images/placeholder.png" class="minnesota-icon" height="35">
                        <h6  class="mt-3" >
                          4939 Kevin Walker Dr, Montclair, Virginia 22025, USA
                        </h6>
                      </div>
                     </div>
                     <div class='row text-center mt-5'>
                       <div class="col-md-12">
                         <img src="images/customer-service.png" class="minnesota-icon" height="35">
                         <h6  class="mt-3" >
                           (+1) 651 967 7789
                         </h6>
                       </div>
                     </div>
   
                      <div class="row mt-4">
                        <div class="col-md-12 text-center">
                          <img src="images/email.png" height="45" >
                          <h6 class="mt-3">admin@eduprov.com</h6>
                          <h6 class="mt-3">hr@eduprov.com</h6>
                        </div>
                      </div>
                   </div>
   
                    
                 </div>
   
                 
                 </div>
            </form>
                <!-- <div class="col-md-12 text-center">
                   <div class="row">
                    <div class="col-md-4 text-center">
                      <img src="images/india.png" height="50">
                       <h6 class="mt-3">Head Office (INDIA)</h6>
                    </div>
                    <div class="col-md-4 text-center">
                      <img src="images/india-pin.png" class="location-icon" height="50">
                      <h6 class="mt-3">
                        No 20 2nd Floor Lady Curzon Rd Santha Complex Shivaji Nagar Bengaluru Karnataka 560001
                      </h6>
                     
                    </div>
                    <div class="col-md-4">
                      <img src="images/call.svg" class="call-icon" height="60">
                      <h6>+91 80 25591146</h6>
                    </div>
                   </div>
                   <div class="row mt-5">
                    <div class="col-md-4 text-center">
                      <img src="images/email.svg" class="email-icon" height="40">
                       <h6 class="mt-3"> admin@eduprov.com</h6>
                       <h6 class="mt-3"> hr@eduprov.com</h6>
                    </div>
                    <div class="col-md-4 text-center">
                      <img src="images/email.svg" class="email-icon-2" height="40">
                       <h6 class="mt-3"> hr@eduprov.com</h6>
                        <h6 class="mt-3"> hr@eduprov.com</h6>
                    </div>
                    <hr/>
                    <div class="row mt-5 ">
                      <div class="col-md-4 text-center">
                        <img src="images/united-states.png"  class="usa-icon" height="50">
                         <h6 class="mt-3">Branch Office (USA)</h6>
                      </div>
                      <div class="col-md-4 text-center">
                        <img src="images/united-states-of-america.png" class="minnesota-icon" height="60">
                        <h6  class="mt-3" >
                          N.E Blaine Minnesota USA 55434
                        </h6>
                      </div>

                      <div class="col-md-4 text-center">
                        <img src="images/united-states-of-america.png" class="georgia-icon" height="60">
                        <h6  class="mt-3" >
                          Old Whittlesey Road Suite Columbus Georgia 31909
                        </h6>
                      </div>
                     
                     </div>
                     <div class="row mt-5 ">
                      <div class="col-md-4 text-center">
                        <img src="images/united-states-of-america.png" class="minnesota-icon" height="60">
                        <h6  class="mt-3" >
                          N.E Blaine Minnesota USA 55434
                        </h6>
                      </div>

                      <div class="col-md-4 text-center">
                        <img src="images/call.svg" class="georgia-icon" height="60">
                        <h6  class="mt-3" >
                          (+1) 651 967 7789
                        </h6>
                      </div>
                     
                     </div>
                      </div>
                      </div>
                   </div>
                </div>
          </div> -->
         

           
     <!-- <form action="" name="contactForm" method="post" enctype="multipart/form-data">
      <div class="container mt-1">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-4">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group mb-3">
                            <label class="label-title">Name</label><i class="text-danger">*</i><br/>
                           <input type="text" class="form-control text-input"  name="name" placeholder="Name *" id="name" />
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group mb-3">
                            <label class="label-title">Mobile </label><i class="text-danger">*</i><br/>
                            <input type="text" class="form-control text-input" name="mobile" placeholder="Mobile *" id="mobile" />
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group mb-3">
                            <label class="label-title">Email ID</label><i class="text-danger">*</i><br/>
                           <input type="text" class="form-control  text-input" name="email" placeholder="Email ID *" id="email" />
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group mb-3 dropdown">
                            <label class="label-title">Enquiry for </label><i class="text-danger">*</i><br/>
                            <select  class="form-control  text-input" name="enquiry" id="enquiry">
                                <option>Choose...</option>
                                <option>Career Counseling</option>
                                <option>Admission Guidance</option>
                                <option>Overseas Education</option>
                                <option>Admin</option>
                                <option>Job</option>
                            </select>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                         <div class="form-group mb-3">
                             <label  class="label-title">Message</label><i class="text-danger">*</i><br/>
                            <textarea class="form-control"  rows="5" name="message" id="message" placeholder="Message *"></textarea>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                      <input class="btn btn-block btn-light" type="submit" name="send" value="Send Message" />
                    </div>
                </div>
                
            </div>
            <div class="col-md-3"></div>
        </div> -->
        <!-- <div class="row mt-5">
          <div class="col-md-6">
            <h6>Head Office (India)</h5>
            <p class="text-justify"><i class="fas fa-map-pin"></i>
              No 20 2nd Floor Lady Curzon Rd Santha Complex Shivaji Nagar Bengaluru Karnataka 560001
            </p>
            <p class="text-justify"><i class="fa fa-envelope"></i>
             admin@eduprov.com
            </p>
            <p class="text-justify"><i class="fa fa-envelope"></i>
              hr@eduprov.com
             </p>
            <p class="text-justify"><i class="fas fa-phone"></i>
              +91 80 25591146
            </p>
  
          </div>
          <div class="col-md-6">
            <h6>USA LOCATION</h5>
              <p class="text-justify"><i class="fas fa-map-pin"></i>
                N.E Blaine Minnesota USA 55434
              </p>
              <p class="text-justify"><i class="fas fa-map-pin"></i>
                Old Whittlesey Road Suite Columbus Georgia 31909
              </p>
              <p class="text-justify"><i class="fas fa-phone"></i>
                (+1) 651 967 7789
              </p>
          </div>
        </div> -->
    

     

       <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
  
  <script>
    $(function() {
      $("form[name='contactForm']").validate({
        // Define validation rules
        rules: {
          name:          "required",
          email:         "required",
          mobile:        "required",
          enquiry:       "required",
          message:       "required",
          
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },          
          mobile: {
            required: true,
            number: true
          },
          enquiry:{
            required:true,
          },
          message:{
            required:true,
          }          
          
        },
        // Specify validation error messages
        messages: {
          name: "Please provide a valid name.",
          email: {
            required: "Please enter your email",
            minlength: "Please enter a valid email address"
          },
          mobile: {
            required: "Please provide a mobile no",
            minlength: "Phone number must be min 10 characters long",
            maxlength: "Phone number must not be more than 10 characters long"
          },
        },
      

        submitHandler: function(form) {
          form.submit();
        }
      });
    });    
  </script>
       
       <footer class="page-footer font-small bg-dark pt-4 mt-4">

        <!-- Footer Links -->
        <div class="container text-left text-md-left">
      
          <!-- Footer links -->
          <div class="row text-left text-md-left mt-3 pb-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <label class="text-uppercase mb-4 font-weight-bold text-white">Medical</label>
              <p>
                <a id="links" href="https://eduprov.com/mbbs-course.html">MBBS</a>
              </p> 
              <p>
                <a id="links" href="https://eduprov.com/bds-course.html">BDS</a>
              </p> 
              <p>
                <a id="links" href="https://eduprov.com/bpt-course.html">BPT</a>
              </p> 
               <hr style="color:gray"/>
              <label class="text-uppercase mb-4 font-weight-bold text-white">Engineering</label>
              <p>
                <a id="links" href="https://eduprov.com/btech-computer-science-engineering.html">B.Tech CS</a>
              </p> 
              <p>
                <a id="links" href="https://eduprov.com/btech-it-course.html">B.Tech IT</a>
              </p> 
              <p>
                <a id="links" href="https://eduprov.com/btech-in-eee.html">B.Tech EEE</a>
              </p>
              <hr style="color:gray"/> 
               <label class="text-uppercase mb-4 fw-bold lh-4 text-white course-label">MBA</label>
               <p>
                <a id="links" href="https://eduprov.com/mba-banking-finance-course.html">Finance Management</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/retail-management-course.html">Retail Management</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/human-resource-course.html">Human Resources</a>
              </p> 
            </div>
            <div  class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <label class="text-uppercase mb-4 font-weight-bold text-white">Para Medical </label>
               <p>
                <a id="links" href="https://eduprov.com/bsc-nuro-course.html">BSc Nuro</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/bsc-nursing-course.html">BSc Nursing</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/b-pharm-course.html">B.Pharm</a>
              </p> 
              <hr style="color:gray"/> 
              <label class="text-uppercase mb-4 font-weight-bold text-white">Technical</label>
              <p>
                <a id="links" href="https://eduprov.com/bsc-computer-course.html">BSc.CS</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/bachelor-of-computer-application.html">BCA</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/mca-course.html">MCA</a>
              </p>
              <hr style="color:gray"/> 
              <label class="text-uppercase mb-4 font-weight-bold text-white">Law </label>
              <p>
                <a id="links" href="https://eduprov.com/llb-course.html">LLB</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/master-of-law-course.html">LLM</a>
              </p>
            </div>
            <div  class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <label class="text-uppercase mb-4 font-weight-bold text-white">Commerce</label>
               <p>
                <a id="links" href="https://eduprov.com/bachelor-of-commerce-honours.html">B.Com(hons)</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/bachelor-of-commerce-professional.html">B.Com(Professional)</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/bachelor-of-business-administration.html">BBA</a>
              </p>
              <hr style="color:gray"/> 
              <label class="text-uppercase mb-4 font-weight-bold text-white">Exam</label>
              <p>
                <a id="links" href="https://eduprov.com/kcet-exam-information.html">KCET</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/jee-exam-blog.html">JEE</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/neet-exam-blog.html">NEET</a>
              </p>
              <hr style="color:gray"/> 
              <label class="text-uppercase mb-4 font-weight-bold text-white">Education</label>
              <p>
               <a id="links" href="https://eduprov.com/bachelor-of-education-course.html">B.Ed</a>
             </p>
             <p>
               <a id="links" href="https://eduprov.com/master-of-education-course.html">M.Ed</a>
             </p>
            </div>
            <div  class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <label class="text-uppercase mb-4 font-weight-bold text-white">Quick Links</label>
              <p>
                <a id="links" href="https://eduprov.com/contact-form.php">Contact us</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/application-form.php">Application form</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/admission-guidance.html">Admission Guidance</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/career-counseling.html">Career counseling</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/overseas-education.html">Overseas education</a>
              </p>
              <hr style="color:gray"/> 
              <label class="text-uppercase mb-4 font-weight-bold text-white">Counseling</label>
              <p>
                <a id="links" href="https://eduprov.com/career-after-sslc.html">Career after 10th / SSLC</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/career-after-puc.html">Career after 12th / PUC</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-1"></div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-1"></div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto  mt-1"></div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-1"></div>
          </div>
          <hr>
          <!-- Grid row -->
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8"
              <!--Copyright-->
              <p class="text-center text-md-left">Eduprov Educational Institute 2021 © Copyright :
                <a href="https://www.thephotogenicbug.in">
                  <strong>thephotogenicbug</strong>
                </a>
              </p>
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">
      
              <!-- Social buttons -->
              <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a href="https://www.facebook.com/eduprovinstitute/" class="btn btn-primary btn-rounded btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://twitter.com/eduprov" class="btn btn-info btn-rounded btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/eduprov-educational-institute-ab2b24115/" class="btn btn-secondary btn-rounded btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/eduprov_education/" class="btn btn-danger btn-rounded btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
      </footer>
      <!-- Footer -->

</body>
<script src="app.js"></script>
</html>

