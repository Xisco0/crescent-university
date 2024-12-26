<?php if ($page=='dashboard'){?>
    <div class="w-full h-full">
        
        <div class="flex items-center justify-around gap-3">
            <div class="totals" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.3)">
                <h3 class="text-[#fff] text-[18px] mb-[10px] font-[body-font] m-0 p-0">Total Bill</h3>
                <span class="text-[var(--schools-color)] counter" data-target="689000">N 0</span>
                    
                <button class="bg-[#50DC62] hover:bg-[rgb(42,200,69)] text-[#fff] font-[body-font text-[10px] py-[6px] px-[6px] rounded-[3px] font-semibold absolute bottom-[5%] right-[3%]" onclick="Getpages('payment-advice','payment-advice')"><i class="bi-wallet"></i> Fees Breakdown</button>
            </div>

            <div class="totals" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.3)">
                <h3 class="text-[#fff] text-[18px] mb-[10px] font-[body-font] m-0 p-0">Total Payment</h3>
                <span class="text-[var(--schools-color)] counter" data-target="689000">N 0</span>
            </div>
            <script>count()</script>
            <div class="totals" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.3)">
                <h3 class="text-[#fff] text-[18px] mb-[10px] font-[body-font] m-0 p-0">Total Outstanding</h3>
                <span class="text-[var(--schools-color)]">N 0</span>
            </div>

            <div class="totals" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.3)">
                <h3 class="text-[#fff] text-[18px] mb-[10px] font-[body-font] m-0 p-0">Total Units</h3>
                <span class="text-[var(--schools-color)]">0</span>
            </div>
        </div>

        <div class="w-[calc(100%-15px)] px-[15px] rounded-[5px] mx-auto h-[calc(100%-100px)] mt-[10px] border-[1px] border-[#BEBEBE]">
            <div class="flex justify-between w-full">
                <div class="flex items-center gap-[20px] mt-[10px]">
                    <img src="all-images/background/friends.png" alt="image" class="overflow-hidden rounded-[60%]  w-[60px] h-[60px] cursor-pointer ml-[15px]">
                    <div>
                        <h3>BAMIRIN FRANCIS OLAWALE</h3>
                        <span class="text-[#979797] font-[sub-title-font]">MATRIC NO: <span clas="font-[body-font]">2463987356</span> </span>
                    </div>
                </div>

                <button class="button py-[10px]"><i class="bi-person"></i> EDIT PROFILE</button>
            </div>
            <table class="w-[100%] mt-[10px] mx-auto table-auto border-collapse border  border-gray-300">
                <tr class="bg-gray-100">
                <th class="th">Matric no</th>
                <td class="td">2463987356</td>
                </tr>

                <tr class="hover:bg-gray-50">
                <th class="th">Fullname</th>
                <td class="td">Bamirin Francis</td>
                </tr>

                <tr class="bg-gray-100">
                <th class="th">Faculty</th>
                <td class="td">Science</td>
                </tr>

                <tr class="hover:bg-gray-50">
                <th class="th">Department</th>
                <td class="td">Computer science</td>
                </tr>

                <tr class="bg-gray-100">
                <th class="th">Level</th>
                <td class="td">100 level</td>

                <th class="th">Status</th>
                <td class="td"><span class="bg-[#00A65A] font-[body-font] text-[12px] rounded-[5px] py-[3px] px-[7px] text-[#fff]">Active</span></td>
                </tr>

                <tr class="hover:bg-gray-50">
                <th class="th">Session</th>
                <td class="td">2024/2025</td>
                <td class="td border-r-0 border-r-[transparent]">FIRST SEMESTER</td>
                </tr>

                <tr class="bg-gray-100">
                <th class="th">ENTRY MODE</th>
                <td class="td">UTME</td>

                <th class="th">ENTRY YEAR</th>
                <td class="td">2024</td>
                </tr>
            
            </table>


        </div>
    </div>
<?php }?>

<?php if ($page=='update-bio'){?>
    <div class="w-full h-full max-w-[1200px] relative" data-aos="fade-in" data-aos-duration="2200">
        <?php include $page='update'?>
        <?php include 'update-page.php'?>
    </div>
<?php }?>

<?php if ($page=='payment-history'){?>
    <div class="h-full w-full pr-[10px] py-[10px] mb-[10px] overflow-auto" >
        <div class="bg-[#dedcdc] w-full rounded-[5px] p-[5px] flex items-center gap-[10px]"> 
            <select name="Select Status" class="h-[40px] bg-[rgb(16,70,33)] text-[var(--main-color)] rounded-[5px] cursor-pointer font-[body-font] px-[10px]" id="status_id"  onchange="_all_active_staff(this.value)">     
                <option value="" class="font-[body-font]" selected disabled>Transaction Status</option>
                <option value="1" class="font-[body-font]">Successful</option>
                <option value="2" class="font-[body-font]">Pending</option>
                <option value="2" class="font-[body-font]">Failed</option>
               
            </select>
            <input type="text" class="w-full h-[40px] pl-[10px] rounded-[5px] outline-none" placeholder="Type Here to Search...." id="search_txt" onkeyup="_all_active_staff('')"/>

            <script>
                superplaceholder({
                el: search_txt,
                sentences: [ 'Type Here to Search....', 'e.g successful', 'failed', 'stu0015664484332446', 'credit card','transfer' ],
                options: {
                letterDelay: 80,
                loop: true,
                startOnFocus: false
                }
                });
            </script>
        </div>
        <div class="h-[420px]">
            <table class="mt-[25px] w-full text-[15px] overflow-auto text-[#000]" style="box-shadow: 2px 2px 10px 1px rgba(0, 0, 0, 0.1)">
                <tr class="bg-[#b3eac4]">
                    <th class="font-[body-font] py-[11px]">SN</th>
                    <th class="font-[body-font] py-[11px]">TRANSACTION ID</th>
                    <th class="font-[body-font] py-[11px]">AMOUNT</th>
                    <th class="font-[body-font] py-[11px]">DATE</th>
                    <th class="font-[body-font] py-[11px]">STATUS</th>
                    <th class="font-[body-font] py-[11px]">PAYMENT METHOD</th>
                </tr>

                <tr class="text-center text-[12px] mt-[15px]">
                    <td class="font-[body-font] py-[12px]">1</td>
                    <td class="font-[body-font] py-[12px]">TRN276635353535</td>
                    <td class="font-[body-font] py-[12px]">N 20000</td>
                    <td class="font-[body-font] py-[12px]">2024-11-03 01:01:29</td>
                    <td class="font-[body-font] py-[12px]">PENDING</td>
                    <td class="font-[body-font] py-[12px]">CREDIT CARD</td>
                </tr>

                
            </table>
        </div>
    </div>
<?php }?>

<?php if ($page=='payment-advice'){?>
    <div class="h-full w-full pr-[10px] py-[10px] mb-[10px] overflow-auto">
        <div class="bg-[#dedcdc] w-full rounded-[5px] p-[5px] flex items-center gap-[10px]"> 
            <select name="Select Status" class="h-[40px] bg-[rgb(16,70,33)] text-[var(--main-color)] rounded-[5px] cursor-pointer font-[body-font] px-[10px]" id="status_id"  onchange="_all_active_staff(this.value)">     
                <option value="" class="font-[body-font]" selected disabled>Transaction Status</option>
                <option value="1" class="font-[body-font]">Print receipt</option>
                <option value="2" class="font-[body-font]">Pay now</option>
               
            </select>
            <input type="text" class="w-full h-[40px] pl-[10px] rounded-[5px] outline-none" placeholder="Type Here to Search...." id="search_txt" onkeyup="_all_active_staff('')"/>

            <script>
                superplaceholder({
                el: search_txt,
                sentences: [ 'Type Here to Search....', 'e.g Print receipt', 'failed'],
                options: {
                letterDelay: 80,
                loop: true,
                startOnFocus: false
                }
                });
            </script>
        </div>
        <div class="h-[420px]">
            <table class="mt-[25px] w-full text-[15px] overflow-auto text-[#000]" style="box-shadow: 2px 2px 10px 1px rgba(0, 0, 0, 0.1)">
                <tr class="bg-[#b3eac4] pl-[10px]">
                    <th class="font-[body-font] py-[11px]">SN</th>
                    <th class="font-[body-font] py-[11px]">PAYMENT NAME</th>
                    <th class="font-[body-font] py-[11px]">AMOUNT</th>
                    <th class="font-[body-font] py-[11px]">STATUS</th>
                </tr>

                <tr class="py-[19px] text-center text-[12px] mt-[15px]">
                    <td class="font-[body-font] py-[12px]">1</td>
                    <td class="font-[body-font] py-[12px]">POST UTME FORM</td>
                    <td class="font-[body-font] py-[12px]">N 20000</td>
                    <td class="font-[body-font] py-[12px] text-[var(--main-color)] cursor-pointer"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px]">PAY NOW</button></td>
                </tr>

                <tr class="text-center py-[19px] text-[12px] mt-[15px]">
                    <td class="font-[body-font] py-[12px]">2</td>
                    <td class="font-[body-font] py-[12px]">CERTIFICATE FEE</td>
                    <td class="font-[body-font] py-[12px]">N 10000</td>
                    <td class="font-[body-font] py-[12px] text-[var(--main-color)] cursor-pointer "><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px]">Print receipt</button></td>
                </tr>

                <tr class="text-center py-[19px] text-[12px] mt-[15px]">
                    <td class="font-[body-font] py-[12px]">3</td>
                    <td class="font-[body-font] py-[12px]">O LEVEL VERIFICATION</td>
                    <td class="font-[body-font] py-[12px]">N 10000</td>
                    <td class="font-[body-font] py-[12px] text-[var(--main-color)] cursor-pointer"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px]">PAY NOW</button></td>
                </tr>
                
            </table>
        </div>
    </div>
<?php }?>

<?php if ($page=='register-course'){?>
    <div class="p-[10px] h-[500px] mb-[20px] overflow-auto">
        <div class="relative">
            <table class="w-[100%]  mt-[10px] mx-auto table-auto border-collapse border  border-gray-300">
                <tr class="bg-gray-100 rounded-[10px]">
                <th class="th">Course Code</th>
                <th class="th">Course Title</th>
                <th class="th">Course Units</th>
                </tr>

                <tr>
                    <td class="py-[12px] td">CHEM101</td>
                    <td class="py-[12px] td">INTRODUCTION TO CHEMISTRY</td>
                    <td class="py-[12px] td">3</td>
                    <td class="py-[12px] text-center td text-[#fff]"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px] accept-btn flex justify-center items-center" id="courseButton" onclick="changeButtonText('button1')"> <span id="button1">Accept</span></button></td>
                </tr>

                <tr>
                    <td class="py-[12px] td">BCH101</td>
                    <td class="py-[12px] td">INTRODUCTION TO BIOCHEMISTRY</td>
                    <td class="py-[12px] td">2</td>
                    <td class="py-[12px] text-center td text-[#fff]"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px] accept-btn flex justify-center items-center" id="courseButton" onclick="changeButtonText('button2')"> <span id="button2">Accept</span></button></td>
                </tr>

                <tr>
                    <td class="py-[12px] td">MTH101</td>
                    <td class="py-[12px] td">GENERAL MATHEMATICS</td>
                    <td class="py-[12px] td">3</td>
                    <td class="py-[12px] text-center td text-[#fff]"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px] accept-btn flex justify-center items-center" id="courseButton" onclick="changeButtonText('button3')"> <span id="button3">Accept</span></button></td>
                </tr>

                <tr>
                    <td class="py-[12px] td">GNS202</td>
                    <td class="py-[12px] td">INTRODUCTION TO ENGLISH LANGUAGE</td>
                    <td class="py-[12px] td">2</td>
                    <td class="py-[12px] text-center td text-[#fff]"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px] accept-btn flex justify-center items-center" id="courseButton" onclick="changeButtonText('button4')"> <span id="button4">Accept</span></button></td>
                </tr>

                <tr>
                    <td class="py-[12px] td">COM111</td>
                    <td class="py-[12px] td">INTRODUCTION TO COMPUTER</td>
                    <td class="py-[12px] td">3</td>
                    <td class="py-[12px] text-center td text-[#fff]"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px] accept-btn flex justify-center items-center" id="courseButton" onclick="changeButtonText('button5')"> <span id="button5">Accept</span></button></td>
                </tr>

                <tr>
                    <td class="py-[12px] td">MTH101</td>
                    <td class="py-[12px] td">GENERAL MATHEMATICS</td>
                    <td class="py-[12px] td">3</td>
                    <td class="py-[12px] text-center td text-[#fff]"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px] accept-btn flex justify-center items-center" id="courseButton" onclick="changeButtonText('button6')"> <span id="button6">Accept</span></button></td>
                </tr>

                <tr>
                    <td class="py-[12px] td">MTH101</td>
                    <td class="py-[12px] td">GENERAL MATHEMATICS</td>
                    <td class="py-[12px] td">3</td>
                    <td class="py-[12px] text-center td text-[#fff]"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px] accept-btn flex justify-center items-center" id="courseButton" onclick="changeButtonText('button7')"> <span id="button7">Accept</span></button></td>
                </tr>

                <tr>
                    <td class="py-[12px] td">EED202</td>
                    <td class="py-[12px] td">INTRODUCTION TO ENTREPRENUER</td>
                    <td class="py-[12px] td">3</td>
                    <td class="py-[12px] text-center td text-[#fff]"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px] accept-btn flex justify-center items-center" id="courseButton" onclick="changeButtonText('button8')"> <span id="button8">Accept</span></button></td>
                </tr>

                <tr>
                    <td class="py-[12px] td">GNS218</td>
                    <td class="py-[12px] td">INTRODUCTION TO LIBRARY</td>
                    <td class="py-[12px] td">3</td>
                    <td class="py-[12px] text-center td text-[#fff]"><button class="bg-[rgb(0,141,76)] rounded-[5px] px-[8px] p-[5px] accept-btn flex justify-center items-center" id="courseButton" onclick="changeButtonText('button9')"> <span id="button9">Accept</span></button></td>
                </tr>
            </table>

            <button class="button absolute right-0">Submit <i class="bi-check-all"></i></button>
        </div>
    </div>
<?php }?>

<?php if ($page=='change-password'){?>
    <div class="px-[10px] mt-[20px]" data-aos="fade-out" data-aos-duration="2200">
        <div class="w-[500px] h-[500px] p-[10px] border border-[#BEBEBE] rounded-[5px]">
            <div class="w-full h-[110px] p-[10px] bg-[#F3FFF9] border border-[#E5EEE9]">
                <div class="flex gap-[10px] mb-[5px] items-center">
                    <i class="bi-info-circle-fill text-[25px]"></i>
                    <h2 class="p-0 m-0 text-[18px] font-[title-font]">Notice!</h2>
                </div>
                <span class="text-[12px] text-center font-[body-font]">Your password should be <span class="text-[#B1C5CC]">Personal to you alone,</span> ICT will not be responsible for any <span class="text-[#B1C5CC]">unsecure password,</span>
                also Be mindful of the <span class="text-[#B1C5CC]">CAPS</span> you used because password is <span class="text-[#B1C5CC]"> case sensitive</span></span>
            </div>
            <div class="mt-[10px]">
                <h3 class="mt-[15px] mb-[5px] ml-[10px]">Current Password</h3>
                <div class="w-full py-[10px] px-[10px] flex items-center border border-[#AAAAAA] rounded-[5px]">
                    <input type="password" class="w-full outline-none h-full" id="password1" required>
                    <i class="cursor-pointer bi-eye-slash" id="toggler1" onclick="_password('password1','toggler1')"></i>
                </div>

                <h3 class="mt-[15px] mb-[5px] ml-[10px]">New Password</h3>
                <div class="w-full py-[10px] px-[10px] flex items-center border border-[#AAAAAA] rounded-[5px]">
                    <input type="password" class="w-full outline-none h-full" id="password2" required>
                    <i class="cursor-pointer bi-eye-slash" id="toggler2" onclick="_password('password2','toggler2')"></i>
                </div>

                <h3 class="mt-[15px] mb-[5px] ml-[10px]">Confirm New Password</h3>
                <div class="w-full py-[10px] px-[10px] flex items-center border border-[#AAAAAA] rounded-[5px]">
                    <input type="password" class="w-full outline-none h-full" id="password3" required>
                    <i class="cursor-pointer bi-eye-slash" id="toggler3" onclick="_password('password3','toggler3')"></i>
                </div>
            </div>
            <button class="button float-right mt-[30px] hover:bg-gradient-to-r from-[#15a242] to-[#0c6e2b]"><i class="bi-check"></i> Update</button>
        </div>
    </div>
<?php }?>

<?php if ($page=='transfer'){?>
    <div class="px-[10px] w-full mt-[20px] flex flex-row-reverse justify-between items-center" data-aos="fade-out" data-aos-duration="2200">
        <div class="flex w-[calc(100%-550px)] justify-center gap-[10px] items-center flex-col">
            <div class="totals bg-gradient-to-r from-[#2b693f] to-[#57a871]" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.3)">
                <h3 class="text-[#fff] text-[18px] mb-[10px] font-[body-font] m-0 p-0">Approved</h3>
                <span class="text-[var(--schools-color)]">0</span>
            </div>

            <div class="totals bg-gradient-to-r from-[#2b693f] to-[#57a871]" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.3)">
                <h3 class="text-[#fff] text-[18px] mb-[10px] font-[body-font] m-0 p-0">Pending</h3>
                <span class="text-[var(--schools-color)]" >0</span>
            </div>

            <div class="totals bg-gradient-to-r from-[#2b693f] to-[#57a871]" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.3)">
                <h3 class="text-[#fff] text-[18px] mb-[10px] font-[body-font] m-0 p-0">Declined</h3>
                <span class="text-[var(--schools-color)]">0</span>
            </div>
        </div>
        <div class="w-[550px] relative min-h-[520px] py-[10px] border border-[#BEBEBE] rounded-[5px]">
            <h3 class="font-[title-font] ml-[10px] text-[#073c18]"><i class="bi-arrow-up-right-square"></i> Transfer Request</h3>
            <div class="px-[10px]">
                <div class="flex items-center justify-between mt-[30px]">
                    <h3 class="font-normal font-[body-font]">PREFERRED DEPARTMENT</h3>
                    <select id="department" class="select h-[40px] w-[320px] font-[body-font]">
                        <option value="" selected disabled>Select a department</option>
                    </select>
                </div>

                <div class="flex items-center justify-between mt-[30px]">
                    <h3 class="font-normal font-[body-font]">PREFERRED COURSE</h3>
                    <select id="course-select" class="select h-[40px] w-[320px] font-[body-font]">
                        <option value="" selected disabled >Select a course</option>
                    </select>
                </div>
                <script>transdepartment()</script>

                <div class="flex items-center justify-between mt-[30px]">
                    <h3 class="font-normal font-[body-font]">MESSAGE SUBJECT</h3>
                    <select class="select h-[40px] w-[320px] font-[body-font]">
                        <option value="">TIRED OF THE DEPARTMENT</option>
                        <option value="">LOW CGPA</option>
                        <option value="">O LEVEL REQUIREMENT NOT MET</option>
                    </select>
                </div>
            </div>

            <div class="border-t border-t-[#bebebe] pt-[10px] mt-[10px]">
                <div class="w-[90%] m-auto h-[150px]">
                    <div id="editor" class="h-full overflow-auto">
                        <p>                           </p>
                        <h2></h2>
                        <p><strong>Through:</strong></p>
                        <p>The Level Adviser,</p>
                        <p>100 LEVEL COMPUTER SCIENCE,</p>
                        <p>CRESCENT UNIVERSITY.</p>
                        <p><br></p>
                        <p><strong>Through:</strong></p>
                        <p>The Head of Department,</p>
                        <p>COMPUTER SCIENCE,</p>
                        <p>CRESCENT UNIVERSITY.</p>
                        <p><br></p>
                        <p><strong>Through:</strong></p>
                        <p>The Dean,</p>
                        <p>Faculty of science,</p>
                        <p>CRESCENT UNIVERSITY.</p>
                        <p><br></p>
                        <p><strong>To:</strong></p>
                        <p>The Vice Chancellor,</p>
                        <p>CRESCENT UNIVERSITY.</p>
                        <p><br></p>
                        <h2 class="my-[10px]"><span>GOOD DAY SIR/MA,</span></h2>
                        <p style="color: rgb(0, 0, 0);background-color: rgb(255, 255, 255);text-align: center;"><span><strong>REQUEST FOR CHANGE OF DEPARTMENT</strong></span><br></p>
                        <p>State Your Reason Here................</p>

                        
                        <p>Thanks!</p>
                        <p>your's faithfully,</p>
                        <p>BAMIRIN FRANCIS</p>
                        <p></p>
                
                    </div>
                    <script> initQuillEditor() </script>
                </div>
            </div>

            <buttton class="button py-[10px] cursor-pointer text-center absolute bottom-[-2%] right-[2%]">SEND REQUEST</buttton>
        </div>
        
    </div>
<?php }?>
