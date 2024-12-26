<?php if ($page=='login'){?>
    <div class="log-div" id="next_1">
        <div class="flex flex-col justify-center mt-[10px] px-[18px] m-auto ">
            <img src="src/all-images/images/crescent_logo.fw.png" class="w-[130px]" alt="logo" title="crescent logo">
            <h1 class=" font-[title-font] text-[25px]"><i class="bi-person-circle"></i> STUDENT LOGIN</h1>
        </div>

        <div class="w-[100%] mt-[35px] flex flex-col justify-center items-center gap-[20px]">

            <div class="input-div w-[90%]  my-[30px] border-b-[1px] border-b-[#BEBEBE] relative">
                <input type="text" id="emailinput" class="input input-div-in" required/>
                <label for="emailinput" class="label-div absolute top-[50%] left-1 translate-y-[-50%]">Email Address</label>
                <i class="bi-envelope absolute translate-y-[-50%] top-[50%] right-0"></i>
            </div>

            
            <div class="input-div w-[90%] border-b-[1px] border-b-[#BEBEBE] relative">
                <input type="password" class="input input-div-in" id="validinput" required/>
                <label for="validinput" class="label-div absolute top-[50%] left-1 translate-y-[-50%]" >Password</label>
                <i class="bi-lock absolute translate-y-[-50%] top-[50%] right-0"></i>
            </div>
        </div>
        <div class="flex justify-between items-center w-full px-[20px] my-[10px] custom-screen-ml:flex-col">
            <button class="button" onclick="dashboard()">Login <i class="bi-check"></i></button>
            <div>
                <span class="text-[var(--text-color)] text-[14px]">New Applicant ?</span>
                <span class="ml-[6px] text-[16px] cursor-pointer" onclick="_next_page('next_3')">Apply Now</span>
            </div>
        </div>
        <div class="custom-screen-ml:text-[14px] w-[95%] m-auto rounded-[4px] border-[1px] pl-[10px] py-[10px] text-[var(--text-color)] border-[rgba(46,204,113,.4)] bg-[rgba(46,204,113,.05)]">Forget Password? <span class="cursor-pointer custom-screen-ml:text-[12px] underline" onclick="_next_page('next_2')">RESET PASSWORD</span></div>
    </div>

    <div class="hidden log-div" id="next_2">  <!-- reset-password -->
        <div class="flex flex-col justify-center mt-[10px] px-[18px] m-auto">
            <img src="src/all-images/images/crescent_logo.fw.png" class="w-[130px]" alt="logo" title="crescent logo">
            <h1 class=" font-[title-font] text-[25px]"><i class="bi-lock-fill"></i> Reset Password</h1>
        </div>

        <div class="w-[100%] mt-[35px] flex flex-col justify-center items-center gap-[20px]">

            <div class="input-div w-[90%]  my-[30px] border-b-[1px] border-b-[#BEBEBE] relative">
                <input type="text" id="email_address" class="input input-div-in" required/>
                <label for="email_address" class="label-div absolute top-[50%] left-1 translate-y-[-50%]">Email Address</label>
                <i class="bi-envelope absolute translate-y-[-50%] top-[50%] right-0"></i>
            </div>

        </div>
        <div class="flex justify-between items-center w-full px-[15px] my-[10px]">
            <button class="button" onclick="reset_password('reset_password')" id="submit_button">Proceed <i class="bi-check"></i></button>
            <div>   
            </div>
        </div>
        <div class="custom-screen-ml:text-[14px] w-[95%] m-auto rounded-[4px] border-[1px] pl-[10px] py-[10px] text-[var(--text-color)] border-[rgba(46,204,113,.4)] bg-[rgba(46,204,113,.05)]">Already have an account ? <span class="cursor-pointer custom-screen-ml:text-[12px] underline" onclick="_next_page('next_1')">Login</span></div>
    </div>

    <div class="hidden log-div" id="next_3">  <!-- Apply now -->
        <div class="flex flex-col justify-center mt-[10px] px-[18px] m-auto">
            <img src="src/all-images/images/crescent_logo.fw.png" class="w-[130px]" alt="logo" title="crescent logo">
            <div class="flex justify-between items-center">
                <h1 class=" font-[title-font] text-[25px] custom-screen-ml:text-[15px]"><i class="bi-person"></i> STUDENT SIGNUP</h1>
                <i class="bi-arrow-left-square cursor-pointer text-[25px] text-[var(--school-color)] transition duration-[0.5s] ease-in-out hover:text-[#075720]" onclick="_next_page('next_1')"  title="Back"></i>
            </div>
        </div>

        <div class="w-[100%] mt-[27px] px-[18px] flex flex-col justify-center items-center gap-[20px]">
            <div class="w-full">
                <label for="" class="ml-[10px] mb-[7px]">Full Name</label>
                <input type="text" id="fullname" class="w-[100%] py-[10px] pl-[15px] outline-none border-[1px] border-[#BEBEBE] rounded-[4px]"  placeholder="ENTER FULLNAME"/>
            </div>
            <div class="w-full">
                <label for="" class="ml-[10px] mb-[7px]">Email Address</label>
                <input type="text" id="email" class="w-full custom-screen-ml:w-full py-[10px] pl-[15px] outline-none border-[1px] border-[#BEBEBE] rounded-[4px]"  placeholder="EMAIL ADDRESS"/>
            </div>
            <div class="w-full">
                <label for="" class="ml-[10px] mb-[7px]">Phone Number</label>
                <input type="text" id="phone_number" class="w-full custom-screen-ml:w-full py-[10px] pl-[15px] outline-none border-[1px] border-[#BEBEBE] rounded-[4px]"  placeholder="PHONE NUMBER"/>
            </div>
            

            <div class="w-full">
                <label for="" class="ml-[10px] mb-[7px]">Gender</label>
                <select name="Gender" id="gender_id" class="font-[body-font] custom-screen-ml:w-full w-full py-[10px] pl-[15px] bg-[#fff] cursor-pointer outline-none border-[1px] border-[#BEBEBE] rounded-[4px]">
                    <option value="select_gender" selected disabled>--SELECT GENDER--</option>
                    <script>get_gender();</script>
                </select>
            </div>
            <div class="flex w-full items-center justify-end">
                <button class="button my-[0px] w-[150px] custom-screen-ml:w-full" onclick="_next_page('next_4')"> Next <i class="bi-arrow-right"></i></button>
            </div>
        </div>
    </div>

    <div class="hidden log-div" id="next_4">  <!--continue Apply now -->
        
        <div class="flex flex-col justify-center mt-[10px] px-[18px] m-auto">
            <img src="src/all-images/images/crescent_logo.fw.png" class="w-[130px]" alt="logo" title="crescent logo">
            <div class="flex justify-between items-center">
            <h1 class=" font-[title-font] text-[25px]"><i class="bi-person custom-screen-ml:text-[15px]"></i> STUDENT SIGNUP</h1>
            <i class="bi-arrow-left-square cursor-pointer text-[25px] text-[var(--school-color)] transition duration-[0.5s] ease-in-out hover:text-[#075720]" onclick="_next_page('next_3')"  title="Back"></i>
            </div>
        </div>
        <div class="w-[100%] mt-[27px] px-[18px] flex flex-col justify-center items-center gap-[15px]">  
            <div class="w-full">
                <label for="" class="ml-[10px] mb-[7px]">Date of birth</label>
                <input type="date" id="dob" class="w-full py-[10px] custom-screen-ml:w-full pl-[15px] outline-none border-[1px] border-[#BEBEBE] rounded-[4px]"/>
            </div>
            <div class="w-full">
                <label for="" class="ml-[10px] mb-[7px]">Select Faculty</label>
                <select id="faculty_id" name="faculty" onchange="get_department(this.value)" class="font-[body-font] w-full py-[10px] pl-[15px] bg-[#fff] cursor-pointer outline-none border-[1px] border-[#BEBEBE] rounded-[4px]">
                    <option value="select_faculty" selected disabled> SELECT FACULTY </option>
                 
                </select>
            </div>
            <div class="w-full">
                <label for="" class="ml-[10px] mb-[7px]">Select department </label>
                <select id="department_id" name="department" class="font-[body-font] w-full py-[10px] pl-[15px] bg-[#fff] cursor-pointer outline-none border-[1px] border-[#BEBEBE] rounded-[4px]">
                    <option value="select_department" selected disabled>SELECT DEPARTMENT</option>
                   
                </select>
                
            </div>
            <script>get_faculty();</script>
            <div class="w-full">
                <label for="" class="ml-[10px] mb-[7px]">Select Entry mode</label>
                <select id="entry_id" name="faculty" class="font-[body-font] w-full py-[10px] pl-[15px] bg-[#fff] cursor-pointer outline-none border-[1px] border-[#BEBEBE] rounded-[4px]">
                    <option value="select_entry" selected disabled>SELECT MODE</option>
                    <script>get_entry()</script>
                </select>
            </div>
        </div>
        <div class="flex justify-between items-center w-full px-[15px] mt-[28px] custom-screen-ml:flex-col">
        <button class="button my-[0px] w-[150px] custom-screen-ml:w-full" id="" onclick="signup('finish-signup')"> Proceed <i class="bi-check"></i></button>
            <div>   
                <span>Already have an account ?</span>
                <span class="cursor-pointer custom-screen-ml:text-[12px] underline" onclick="_next_page('next_1')">Login</span>
            </div>
        </div>
    </div>


<?php }?>

<?php if ($page=='reset_password'){?>
    <div class="w-[calc(100%-600px)] h-[calc(100%-50px)] custom-screen:w-[calc(100%-100px)] bg-[#fff] absolute top-[50%] left-[50%] z-[100] translate-x-[-50%] translate-y-[-50%] rounded-[5px]">
        <div class="w-full py-[12px] px-[15px] bg-gradient-to-r from-[var(--school-color)] to-[#075720] rounded-tl-[inherit] rounded-tr-[inherit] flex items-center justify-between">
            <div>
            <i class="bi-lock-fill text-[#fff]"></i>
            <span class="font-[sub-title-font] text-[#fff]">Reset Password</span>
            </div>

            <div class="w-[30px] h-[30px] text-[#fff] text-[15px] rounded-[50%] cursor-pointer bg-[#FF0000] hover:bg-[#f13d3d] transition duration-[0.5s] ease-in-out flex justify-center items-center" onclick="_close()"><i class="bi-x"></i></div>
        </div>
        <div class=" w-[calc(100%-40px)] px-[20px] mt-[20px] flex mx-auto flex-col justify-center">
            <div class="message text-[14px] py-[10px] px-[15px] font-[body-font] custom-screen-ml:text-[12px]"><i class="bi-person-fill"></i> Dear <span id="pass_fullname">Bamirin Francis</span>, an <span>OTP</span> has been sent
            to your email address (<span id="pass_email">francis6@gmail.com</span>) to reset your password. Kindly check your <b>INBOX</b> or <b>SPAM</b> to confirm. </div>
        
            <label class="mt-[18px] ml-[10px] text-[var(--secondary-color)] font-[sub-title-font] custom-screen-ml:text-[14px]" >ENTER OTP:</label>
            <input type="text" placeholder="ENTER OTP" class="w-full outline-none mt-[5px] py-[10px] border-[#BEBEBE] border-[1px] rounded-[7px] pl-[10px]" id="otp">

            <div class="w-full py-[15px] pl-[15px] rounded-[3px] mt-[15px] bg-[#FCEDEA] custom-screen-ml:text-[11px]"><span class="text-[#0b471e] ">OTP</span> not received? <span class="text-[#0b471e] cursor-pointer hidden" id="resendOtp" onclick="resend_otp()"><i class="bi-send"></i> RESEND OTP </span><span class="text-[#0b471e] cursor-pointer" id="timer">4:00</span></div>
            <script>initializeCountdownTimer('timer', 'resendOtp');</script>
            <label class="mt-[13px] ml-[10px] text-[var(--secondary-color)] font-[sub-title-font] custom-screen-ml:text-[14px]">CREATE PASSWORD:</label>
            <input type="password" placeholder="CREATE PASSWORD" class="w-full border-[1px] outline-none border-[#BEBEBE] mt-[5px] py-[10px] rounded-[7px] pl-[10px]" id="password">
            <span class="text-[12px] custom-screen-ml:text-[10px]">At least 8 characters required including upper & lower cases and special characters and numbers</span>

            <label class="mt-[13px] ml-[10px] text-[var(--secondary-color)] font-[sub-title-font] custom-screen-ml:text-[14px]" >CONFIRMED PASSWORD:</label>
            <input type="password" placeholder="CONFIRMED PASSWORD" class="w-full border-[1px] outline-none border-[#BEBEBE] mt-[5px] py-[10px] rounded-[7px] pl-[10px]" id="confirm_password">

            <button class="button w-full mt-[17px]" onclick="finish_reset_password('finish_reset_password')" id="submit_button"><i class="bi-check"></i> Reset Password</button>
        </div>
    </div>
<?php }?>

<?php if ($page=='finish-signup'){?>

    <div class="w-[calc(80%-600px)] min-h-[calc(70%-50px)] custom-screen:w-[calc(100%-100px)] bg-[#fff] absolute top-[50%] left-[50%] z-[100] translate-x-[-50%] translate-y-[-50%] rounded-[5px]">
        <div class="w-full py-[12px] px-[15px] bg-gradient-to-r from-[var(--school-color)] to-[#075720] rounded-tl-[inherit] rounded-tr-[inherit] flex items-center justify-between">
            <div>
            <i class="bi-lock-fill text-[#fff]"></i>
            <span class="font-[sub-title-font] text-[#fff]">Confirm Email</span>
            </div>

            <div class="w-[30px] h-[30px] text-[#fff] text-[15px] rounded-[50%] cursor-pointer bg-[#FF0000] hover:bg-[#f13d3d] transition duration-[0.5s] ease-in-out flex justify-center items-center" onclick="_close()"><i class="bi-x"></i></div>
        </div>
        <div class=" w-[calc(100%-40px)] px-[20px] mt-[20px] flex mx-auto flex-col justify-center">
            <div class="message text-[14px] py-[10px] px-[15px] font-[body-font] custom-screen-ml:text-[12px]"><i class="bi-person-fill"></i> Dear <span >Bamirin Francis</span>, An <span>OTP</span> has been sent
            to your email address (<span>francis6@gmail.com</span>) to confirm your email address. Kindly check your <b>INBOX</b> or <b>SPAM</b> to confirm. </div>
        
            <label class="mt-[18px] ml-[10px] text-[var(--secondary-color)] font-[sub-title-font] custom-screen-ml:text-[14px]">ENTER OTP:</label>
            <input type="text" placeholder="ENTER OTP" class="w-full outline-none mt-[5px] py-[10px] border-[#BEBEBE] border-[1px] rounded-[7px] pl-[10px]">

            <div class="w-full py-[15px] pl-[15px] rounded-[3px] mt-[15px] bg-[#FCEDEA] custom-screen-ml:text-[11px]"><span class="text-[#0b471e] ">OTP</span> not received? <span class="text-[#0b471e] cursor-pointer"><i class="bi-send"></i> RESEND OTP </span></div>

            <button class="button w-full mt-[17px]" onclick="Getpass('Registration-success')"><i class="bi-check"></i> Submit</button>
        </div>
    </div>

<?php }?>

<?php if ($page=='Registration-success'){?>
    <div class="w-full h-full flex justify-center items-center">
        <div class="rounded-[5px] bg-[var(--main-color)] w-[350px] min-h-[250px] flex flex-col justify-center items-center gap-[10px]">
            <div class="w-[180px]">
                <img src="src/all-images/images/success.gif" class="w-full overflow-hidden" alt="success">
            </div>
            <span class="font-[body-font] text-[18px]">Registration successful</span>
            <button class="button w-[190px]" onclick="window.location.reload()">Login</button>
        </div>
    </div>
<?php }?>

<?php if ($page=='finish_reset_password'){?>
    <div class="w-full h-full flex justify-center items-center">
        <div class="rounded-[5px] bg-[var(--main-color)] w-[350px] min-h-[250px] flex flex-col justify-center items-center gap-[10px]">
            <div class="w-[180px]">
                <img src="src/all-images/images/success.gif" class="w-full overflow-hidden" alt="success">
            </div>
            <span class="font-[body-font] text-[18px]">Password Reset successful</span>
            <button class="button w-[190px]" onclick="window.location.reload()">Login</button>
        </div>
    </div>
<?php }?>
