 jQuery(document).ready(function() {
    $.backstretch(["src/all-images/background/campus-2.jpg","src/all-images/background/campus-2.webp","src/all-images/background/campus-4.webp"],{duration: 4000, fade: 2000});
});


document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
  document.querySelector(".preload").style.display = "none";
  document.getElementById("content").style.display = "block";
  }, 800);
  });

function _next_page(next_id) {
$('.log-div').hide();
$('#'+next_id).fadeIn(1000);
}


function Getpass(page) {
$('.overlay').html('<div class="ajax-loader"><br><img src="src/all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
try{
$.post(admin_portal_dashboard, 
{ action: 'get-page', page: page }, 
function(html) {
$('.overlay').html(html);
});}
catch (error) {
console.error(error);
}
}


function Getyear(){

  const currentYear = new Date().getFullYear();
  const startYear = 2024;
  const yearSpan = document.getElementById('year');

  if (currentYear > startYear) {
    yearSpan.textContent = startYear + '-' + currentYear;
  } else {
    yearSpan.textContent = startYear;
  }
}


function _close(){
$('.overlay').fadeOut(500);
}



function dashboard(){
window.location.href = dashboards
}


function reset_password() {
  try {
    var email_address = $('#reset-email').val();
    var email_addressRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email_address == '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> EMAIL ERROR!</br><span>Fill email To Continue</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    } else if (!email_addressRegex.test(email_address)) {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> EMAIL ERROR!</br> <span>Invalid email address</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    } else {
      const btn_text = $("#submit_button").html();
      $("#submit_button").html('<i class="fa fa-spinner fa fa-spin"></i> PROCESSING');
      document.getElementById("submit_button").disabled = true;

      var dataString = 'email_address=' + email_address;
      

      axios.post(endPoint + '/reset-password', dataString, {
          headers: {
            'apiKey': apiKey
          }
        })
        .then(function(response) {
          var info = response.data;
          var success = info.success;
          var message = info.message;

          if (success == true) {
            sessionStorage.setItem("resetPasswordDataSession", JSON.stringify(info));
            $('#success-div').html('<div><i class="bi-check-circle-fill"></i></div>' + 'SUCCESS! <br/>' + message).fadeIn(500).delay(5000).fadeOut(100);
            $("#reset-email").val("");
            $('#submit_button').html(btn_text);
            document.getElementById('submit_button').disabled = false;

            resetPass_form()
          } else {
            $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR! </br>' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
            $('#submit_button').html(btn_text);
            document.getElementById('submit_button').disabled = false;
          }
        })
        .catch(function(error) {
          console.error(error);
          $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + ' ERROR! </br>' + ' ' + error.message).fadeIn(500).delay(3000).fadeOut(100);
          $('#submit_button').html(btn_text);
          document.getElementById('submit_button').disabled = false;
        });
    }
  } catch (error) {
    console.error(error);
    $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR!' + ' ' + error.message).fadeIn(500).delay(3000).fadeOut(100);
  }
}

function resetPass_form() {
  var resetPasswordDataSession = JSON.parse(sessionStorage.getItem("resetPasswordDataSession"));
  var action = 'get-form';
  $('.overlay').html('<div class="ajax-loader"><br><img src="src/all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
  var data = 'action='+ action;
  axios.post(admin_portal_dashboard, data)
    .then(function (response) {
      $('.overlay').html(response.data);
      $('#pass_fullname').html(resetPasswordDataSession.fullname);
      $('#pass_email').html(resetPasswordDataSession.email_address);
    })
    .catch(function (error) {
      console.error('There was an error with the request:', error);
    
    });
}

function initializeCountdownTimer(timerElementId, resendButtonId, initialTime = 240) {
  let countdownInterval;
  let remainingTime = initialTime; 

  const timerElement = document.getElementById(timerElementId);
  const resendButton = document.getElementById(resendButtonId);

  function updateTimerDisplay() {
    const minutes = Math.floor(remainingTime / 60);
    const seconds = remainingTime % 60;
    timerElement.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
  }

  function startCountdown() {
    countdownInterval = setInterval(() => {
      remainingTime--;
      updateTimerDisplay();

      if (remainingTime <= 0) {
        clearInterval(countdownInterval);
        timerElement.style.display = 'none'; 
        resendButton.style.display = 'inline'; 
      }
    }, 1000); 
  }

  function resetCountdown() {
    remainingTime = initialTime;
    resendButton.style.display = 'none';
    timerElement.style.display = 'inline'; // Show timer element again
    updateTimerDisplay();
    startCountdown();
  }

  updateTimerDisplay(); 
  startCountdown(); 

  resendButton.addEventListener('click', resetCountdown);
}

function finish_reset_password() {
  try {
    var resetPasswordDataSession = JSON.parse(sessionStorage.getItem("resetPasswordDataSession"));

    var student_id = resetPasswordDataSession.student_id;
    var otp = $('#otp').val();
    var otp_regex=/^\d+$/;
    var password = $('#password').val();
    var confirm_password = $('#confirm_password').val();
    var passwordRegex = /^.{8,}$/;
    
    

    if (otp== '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> OTP ERROR!</br><span>Fill OTP To Continue</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (!otp_regex.test(otp)) {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> OTP ERROR!</br> <span class="text-[12px]">OTP require numbers only</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    } else if (password== '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> PASSWORD ERROR!</br> <span>Fill Password To Continue</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (confirm_password== '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> PASSWORD ERROR!</br> <span>Confirm your password To Continue</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (password!= confirm_password) {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> PASSWORD ERROR!</br> <span>Password Mismatch</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (!passwordRegex.test(password)) {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> PASSWORD ERROR!</br> <span class="text-[12px]">Password requires 8 characters</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    } else {
      const btn_text = $("#submit_button").html();
      $("#submit_button").html('<i class="fa fa-spinner fa fa-spin"></i> PROCESSING');
      document.getElementById("submit_button").disabled = true;

      var dataString = 'otp=' + otp + '&password=' + password +'&student_id=' + student_id;
      

      axios.post(endPoint + '/finish-reset-password', dataString, {
          headers: {
            'apiKey': apiKey
          }
        })
        .then(function(response) {
          var info = response.data;
          var success = info.success;
          var message = info.message;

          if (success == true) {
            sessionStorage.removeItem("resetPasswordDataSession");
            $('#success-div').html('<div><i class="bi-check-circle-fill"></i></div>' + 'SUCCESS! <br/>' + message).fadeIn(500).delay(5000).fadeOut(100);
            $("#otp").val(""),$("#password").val(""),$("#confirm_password").val("");
            $('#submit_button').html(btn_text);
            document.getElementById('submit_button').disabled = false;

            finishPass_form()
          } else {
            $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR! </br>' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
            $('#submit_button').html(btn_text);
            document.getElementById('submit_button').disabled = false;
          }
        })
        .catch(function(error) {
          console.error(error);
          $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + ' ERROR! </br>' + ' ' + error.message).fadeIn(500).delay(3000).fadeOut(100);
          $('#submit_button').html(btn_text);
          document.getElementById('submit_button').disabled = false;
        });
    }
  } catch (error) {
    console.error(error);
    $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR!' + ' ' + error.message).fadeIn(500).delay(3000).fadeOut(100);
  }
}

function finishPass_form() {
  var action = 'reset_successful';
  $('.overlay').html('<div class="ajax-loader"><br><img src="src/all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
  var data = 'action='+ action;
  axios.post(admin_portal_dashboard, data)
    .then(function (response) {
      $('.overlay').html(response.data);
    })
    .catch(function (error) {
      console.error('There was an error with the request:', error);
    
    });
}

function resend_otp() {
var resetPasswordDataSession = JSON.parse(sessionStorage.getItem("resetPasswordDataSession"));
var student_id = resetPasswordDataSession.student_id;

  var dataString = 'student_id=' + student_id;
  
  axios.post(endPoint + '/resend-otp', dataString, {
      headers: {
        'apiKey': apiKey
      }
    })
    .then(function(response) {
      var info = response.data;
      var success = info.success;
      var message = info.message;

      if (success == true) {
        $('#success-div').html('<div><i class="bi-check-circle-fill"></i></div>' + 'SUCCESS! <br/>' + message).fadeIn(500).delay(5000).fadeOut(100);

      } else {
        $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR! </br>' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
  
      }
    })
}



function get_gender() {
  var text = ''; 
  axios.post(endPoint + '/fetch-gender', {}, { 
    headers: {
      'apiKey': apiKey
    }
  })
  .then(function(response) {
    var fetch = response.data;
    var success = fetch.success;
    var message = fetch.message;
    if (success == true) {
      for (var i = 0; i < fetch.data.length; i++) { 
        var gender_id = fetch.data[i].gender_id;
        var gender_name = fetch.data[i].gender_name;
        text += '<option value="' + gender_id + '">' + gender_name + '</option>';
      }
      $('#gender_id').append(text);
    } else {
      text = '<option value="">'+message+'</option>'; 
      $('#gender_id').append(text);
    }
  })
}


function get_faculty() {
  axios.post(endPoint + '/fetch-faculty', {}, { headers: { 'apiKey': apiKey } })
    .then(function(response) {
      const { success, message, data } = response.data;
      if (success) {
        for (let i = 0; i < data.length; i++) {
          const faculty_id = data[i].faculty_id;
          const faculty_name = data[i].faculty_name;
          $('#faculty_id').append(`<option value="${faculty_id}">${faculty_name}</option>`);
        }
        $('#faculty_id').change(function() {
          const selected_faculty_id = $(this).val();
          get_department(selected_faculty_id);
        });
      } else {
        $('#faculty_id').html('<option value="">Error: ' + message + '</option>');
      }
    })
    .catch(error => {
      console.error('get_faculty error:', error);
      $('#faculty_id').html('<option value="">Error: Failed to load faculties</option>');
    });
}


function get_department(faculty_id) {
  $.ajax({
    type: 'POST',
    url: endPoint + '/fetch-department',
    data: { faculty_id: faculty_id },
    headers: {
      'apiKey': apiKey
    },
    success: function(response) {
      
      if (response.success) {
        var departments = response.data;  
        if (departments.length > 0) {
          var options = '';
          departments.forEach(function(department) {
            options += '<option value="' + department.department_id + '">' + department.department_name + '</option>';
          });
        
          $('#department_id').html(options);
          $('#department_id').removeAttr('disabled');
        } else {
      
          $('#department_id').html('<option value="">No departments found</option>');
        }
      } else {
    
        $('#department_id').html('<option value="">Error: ' + response.message + '</option>');
      }
    },
    error: function(xhr, status, error) {

      $('#department_id').html('<option value="">Error: Failed to load departments</option>');
    }
  });
}

function get_entry() {
  var text = ''; 
  axios.post(endPoint + '/fetch-entry', {}, { 
    headers: {
      'apiKey': apiKey
    }
  })
  .then(function(response) {
    var fetch = response.data;
    var success = fetch.success;
    var message = fetch.message;
    if (success == true) {
      for (var i = 0; i < fetch.data.length; i++) { 
        var entry_id = fetch.data[i].entry_id;
        var entry_code = fetch.data[i].entry_code;
        text += '<option value="' + entry_id + '">' + entry_code + '</option>';
      }
      $('#entry_id').append(text);
    } else {
      text = '<option value="">'+message+'</option>'; 
      $('#entry_id').append(text);
    }
  })
}




function signup() {
  try {
    var fullname = $('#fullname').val();
    var containsPunctuationOrNumber = /[^\p{L}\s]/gu.test(fullname);
    var email= $('#email').val();
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var mobileno = $('#phone_number').val();
    var mobilenoRegex =/^[^a-zA-Z]*$/;
    var gender_id = document.getElementById("gender_id").value;
    var dob = $('#dob').val();
    var today = new Date();
    var minAllowedAge = 16;
    var minAllowedDate = new Date(today.getFullYear() - minAllowedAge, today.getMonth(), today.getDate());
    var faculty_id=document.getElementById("faculty_id").value;
    var department_id = document.getElementById("department_id").value;
    var entry_id = document.getElementById("entry_id").value;



    if (fullname== '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> FULLNAME ERROR!</br><span>Fill Fullname To Continue</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (containsPunctuationOrNumber) {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> FULLNAME ERROR!</br><span>Full name cannot Contain Digits or Dots.</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (email== '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> EMAIL ERROR!</br><span>Fill email To Continue</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    } else if (!emailRegex.test(email)) {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> EMAIL ERROR!</br> <span>Invalid email address</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (mobileno== '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> PHONE NUMBER ERROR!</br><span>Fill Phone number</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (!mobilenoRegex.test(mobileno)) {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> PHONE NUMBER ERROR!</br><span>Invalid Phone number</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (gender_id== 'select_gender') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> GENDER ERROR!</br><span>Choose a gender to continue</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (faculty_id== 'select_faculty') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> FACULTY ERROR!</br><span>Choose a Faculty</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    } else if (department_id == 'select_department') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> DEPARTMENT ERROR!</br><span>Choose a DEPARTMENT</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (entry_id== 'select_entry') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> ENTRY ERROR!</br><span>Choose an entry</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (dob== '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> DOB ERROR!</br><span>Please enter your date of birth</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else{
      dobDate = new Date(dob)
      console.log("DOB format:", dob);  // Should log 'yyyy-mm-dd'

      if (dobDate.getTime > today.getTime) {
        $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> DOB ERROR!</br><span>Date of birth cannot be in the future</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
      } else if (dobDate.getTime < minAllowedDate.getTime) {
        $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> DOB ERROR!</br><span>You must be at least 16 years old to register</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
      }else {
      const btn_text = $("#submit").html();
      $("#submit").html('<i class="fa fa-spinner fa fa-spin"></i> PROCESSING');
      document.getElementById("submit").disablced = true;

      var dataString = 'email_address=' + email + '&fullname=' + fullname + '&mobileno=' + mobileno + '&gender_id=' + gender_id + '&department_id=' + department_id +'&entry_id=' + entry_id + '&dob=' + dob;

     

      axios.post(endPoint + '/signup', dataString, {
          headers: {
            'apiKey': apiKey
          }
        })
        .then(function(response) {
          var info = response.data;
          var success = info.success;
          var message = info.message;

          if (success == true) {
            sessionStorage.setItem("emailVerification", JSON.stringify(info));
            $('#success-div').html('<div><i class="bi-check-circle-fill"></i></div>' + 'SUCCESS! <br/>' + message).fadeIn(500).delay(5000).fadeOut(100);
            $('#submit').html(btn_text);
            document.getElementById('submit').disabled = false;

            _emailVerification()
          } else {
            $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR! </br>' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
            $('#submit').html(btn_text);
            document.getElementById('submit').disabled = false;
          }
        })
        .catch(function(error) {
          console.error(error);
          $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + ' ERROR! </br>' + ' ' + error.message).fadeIn(500).delay(3000).fadeOut(100);
          $('#submit').html(btn_text);
          document.getElementById('submit').disabled = false;
        });
    }
  }
  } catch (error) {
    console.error(error);
    $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR!' + ' ' + error.message).fadeIn(500).delay(3000).fadeOut(100);
  }
}


function _emailVerification() {
  var emailVerification = JSON.parse(sessionStorage.getItem("emailVerification"));
  var action = 'email_verification';
  $('.overlay').html('<div class="ajax-loader"><br><img src="src/all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
  var data = 'action='+ action;
  axios.post(admin_portal_dashboard, data)
    .then(function (response) {
      $('.overlay').html(response.data);
      $('#veri_fullname').html(emailVerification.fullname);
      $('#veri_email').html(emailVerification.email_address);
    })
    .catch(function (error) {
      console.error('There was an error with the request:', error);
    
    });
}




function completeSignup() {
  try {
    var fullname = $('#fullname').val();
    var otp = $('#otp').val();
    var otp_regex=/^\d+$/;
    var email= $('#email').val();
    var mobileno = $('#phone_number').val();
    var gender_id = document.getElementById("gender_id").value;
    var dob = $('#dob').val();
    var department_id = document.getElementById("department_id").value;
    var entry_id = document.getElementById("entry_id").value;
 
    if (otp== '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> OTP ERROR!</br><span>Fill OTP To Continue</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (!otp_regex.test(otp)) {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> OTP ERROR!</br> <span class="text-[12px]">OTP require numbers only</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    }else{
      const btn_text = $("#submit_email").html();
      $("#submit_email").html('<i class="bi-arrow-repeat spinning-icon"></i> PROCESSING');
      document.getElementById("submit_email").disablced = true;

      var dataString ='otp=' + otp + '&email_address=' + email + '&fullname=' + fullname + '&mobileno=' + mobileno + '&gender_id=' + gender_id + '&department_id=' + department_id +'&entry_id=' + entry_id + '&dob=' + dob;

     

      axios.post(endPoint + '/finish-signup', dataString, {
          headers: {
            'apiKey': apiKey
          }
        })
        .then(function(response) {
          var info = response.data;
          var success = info.success;
          var message = info.message;

          if (success == true) {
            sessionStorage.removeItem("emailVerification");
            $('#success-div').html('<div><i class="bi-check-circle-fill"></i></div>' + 'SUCCESS! <br/>' + message).fadeIn(500).delay(5000).fadeOut(100);
            $("#otp").val(""),$("#fullname").val(""),$("#email").val(""),$("#phone_number").val(""),$("#gender_id").val(""),$("#dob").val(""),$("#department_id").val(""),$("#entry_id").val("");
            $('#submit_email').html(btn_text);
            
            document.getElementById('submit_email').disabled = false;

            _emailVerificationsuccess()
          } else {
            $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR! </br>' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
            $('#submit_email').html(btn_text);
            document.getElementById('submit_email').disabled = false;
          }
        })
        .catch(function(error) {
          console.error(error);
          $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + ' ERROR! </br>' + ' ' + error.message).fadeIn(500).delay(3000).fadeOut(100);
          $('#submit_email').html(btn_text);
          document.getElementById('submit_email').disabled = false;
        });
      
      }
  } catch (error) {
    console.error(error);
    $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR!' + ' ' + error.message).fadeIn(500).delay(3000).fadeOut(100);
  }
}



function _emailVerificationsuccess() {
  var action = 'email_success';
  $('.overlay').html('<div class="ajax-loader"><br><img src="src/all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
  var data = 'action='+ action;
  axios.post(admin_portal_dashboard, data)
    .then(function (response) {
      $('.overlay').html(response.data);
    })
    .catch(function (error) {
      console.error('There was an error with the request:', error);
    
    });
}


function _resend_otp() {
  var resetPasswordData = JSON.parse(sessionStorage.getItem("emailVerification"));
  var email = resetPasswordData.email_address;
  
    var dataString = 'email_address=' + email;
    
    axios.post(endPoint + '/resend-otp-verification', dataString, {
        headers: {
          'apiKey': apiKey
        }
      })
      .then(function(response) {
        var info = response.data;
        var success = info.success;
        var message = info.message;
  
        if (success == true) {
          $('#success-div').html('<div><i class="bi-check-circle-fill"></i></div>' + 'SUCCESS! <br/>' + message).fadeIn(500).delay(5000).fadeOut(100);
  
        } else {
          $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR! </br>' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
    
        }
      })
}

function initializeCountdownTime(timerElementId, resendButtonId, initialTime = 300) {
  let countdownInterval;
  let remainingTime = initialTime;

  const timerElement = document.getElementById(timerElementId);
  const resendButton = document.getElementById(resendButtonId);

  function updateTimerDisplay() {
    const minutes = Math.floor(remainingTime / 60);
    const seconds = remainingTime % 60;
    timerElement.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
  }

  function startCountdown() {
    countdownInterval = setInterval(() => {
      remainingTime--;
      updateTimerDisplay();

      if (remainingTime <= 0) {
        clearInterval(countdownInterval);
        timerElement.style.display = 'none'; 
        resendButton.style.display = 'inline'; 
      }
    }, 1000); 
  }

  function resetCountdown() {
    remainingTime = initialTime;
    resendButton.style.display = 'none';
    timerElement.style.display = 'inline'; // Show timer element again
    updateTimerDisplay();
    startCountdown();
  }

  updateTimerDisplay(); 
  startCountdown(); 

  resendButton.addEventListener('click', resetCountdown);
}


function studentLogin() {
  try {
    var email_address = $('#email_address').val();
    var email_addressRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var password = $('#password').val();

    if (email_address == '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> EMAIL ERROR!</br><span>Fill email To Continue</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    } else if (!email_addressRegex.test(email_address)) {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> EMAIL ERROR!</br> <span>Invalid email address</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    } else if (password== '') {
      $('#warning-div').html('<div class="div-in"><div><i class="bi-exclamation-circle"></i></div> <div class="text"> EMAIL ERROR!</br><span>Fill email To Continue</span></div></div>').fadeIn(500).delay(3000).fadeOut(100);
    } else {
      const btn_text = $("#submit_btn").html();
      $("#submit_btn").html('<i class="fa fa-spinner fa fa-spin"></i> PROCESSING');
      document.getElementById("submit_btn").disabled = true;

      var dataString = 'email_address=' + email_address + '&password=' + password;
      

      axios.post(endPoint + '/student_login', dataString, {
          headers: {
            'apiKey': apiKey
          }
        })
        .then(function(response) {
          var info = response.data;
          var success = info.success;
          var message = info.message;
          var access_key = info.access_key;
          var student_id = info.student_id;

          if (success == true) {
              sessionStorage.setItem("access_key", JSON.stringify(access_key));
              sessionStorage.setItem("student_id", JSON.stringify(student_id));

            $('#success-div').html('<div><i class="bi-check-circle-fill"></i></div>' + 'SUCCESS! <br/>' + message).fadeIn(500).delay(5000).fadeOut(100);
            $("#email_address").val(""),$("#password").val("");
            $('#submit_btn').html(btn_text);
            document.getElementById('submit_btn').disabled = false;

            dashboard();
          } else {
            $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR! </br>' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
            $('#submit_btn').html(btn_text);
            document.getElementById('submit_btn').disabled = false;
          }
        })
        .catch(function(error) {
          console.error(error);
          $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + ' ERROR! </br>' + ' ' + error.message).fadeIn(500).delay(3000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled = false;
        });
    }
  } catch (error) {
    console.error(error);
    $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div>' + 'ERROR!' + ' ' + error.message).fadeIn(500).delay(3000).fadeOut(100);
  }
}