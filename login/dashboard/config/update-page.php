<?php if ($page=='update'){?>
    <fieldset class="fieldset log-div mb-[80px]" id="next_1">
        <legend class="font-semibold px-[10px] font-[sub-title-font]">Contact Information</legend>
        
        <div class="field">
            <div class="w-[30%]">
                <label for="fullname" class="ml-[10px]">Full Name</label><br/>
                <input type="text" id="fullname" value="Bamirin Francis" class="bio-input" disabled>
            </div>

            <div class="w-[30%]">
                <label for="email" class="ml-[10px]">Email Address</label><br/>
                <input type="text" id="email" value="Francisbamirin@gmail.com" class="bio-input" disabled>
            </div>

            <div class="w-[30%]">
                <label for="phonenumber" class="ml-[10px]">Phone Number</label><br/>
                <input type="text" id="phonenumber" value="09028836536" class="bio-input" disabled>
            </div>
        </div>

        <div class="field my-[10px]">
        
            <div class="w-[30%]">
                <label for="gender" class="ml-[10px]">Gender</label><br/>
                <input type="text" id="gender" value="MALE" class="bio-input" disabled>
            </div>

            <div class="w-[30%]">
                <label for="phonenumber" class="ml-[10px]">Date of birth</label><br/>
                <input type="text" id="phonenumber" value="11/10/2000" class="bio-input" disabled>
            </div>

            <div class="w-[30%]">
                <label for="state" class="ml-[10px]">State Of Origin <span class="text-[#FF0000]">*</span></label><br/>
                <input type="text" id="state" Placeholder="Enter State Of Origin" class="bio-input text-[#000] bg-[#fcfcfc]">
            </div>
        </div>

        <div class="field my-[10px]">
            <div class="w-[30%]">
                <label for="lga" class="ml-[10px]">Local government Area <span class="text-[#FF0000]">*</span></label><br/>
                <input type="text" id="lga" Placeholder="Enter LGA" class="bio-input text-[#000] bg-[#fcfcfc]">
            </div>

            <div class="w-[30%]">
                <label for="gender" class="ml-[10px]">Permanent Address <span class="text-[#FF0000]">*</span></label><br/>
                <input type="text" id="gender" Placeholder="Enter Address" class="bio-input text-[#000] bg-[#fcfcfc]">
            </div>

            <div class="w-[30%]">
                <label for="lga" class="ml-[10px]">Marital status <span class="text-[#FF0000]">*</span></label><br/>
                <select name="" id="" class="font-[body-font] cursor-pointer bio-input bg-[#fcfcfc]">
                    <option value="" disabled="" selected="">SELECT MARITAL STATUS</option>
                    <option value="" class="font-[body-font]">Single</option>
                    <option value="" class="font-[body-font]">Married</option>
                    <option value="" class="font-[body-font]">Divorced</option>
                    <option value="" class="font-[body-font]">Separated</option>
                </select>
            </div>
        </div>

        <div class="field my-[10px]">
            <div class="w-[30%]">
                <label for="lga" class="ml-[10px]">Parent/Guardian Name <span class="text-[#FF0000]">*</span></label><br/>
                <input type="text" id="lga" Placeholder="Enter Guardian Name" class="bio-input text-[#000] bg-[#fcfcfc]">
            </div>

            <div class="w-[30%]">
                <label for="gender" class="ml-[10px]"> Guardian Phone number <span class="text-[#FF0000]">*</span></label><br/>
                <input type="text" id="gender" Placeholder="Enter Phonenumber" class="bio-input text-[#000] bg-[#fcfcfc]">
            </div>
            
            <div class="w-[30%]">
                <label for="gender" class="ml-[10px]"> Guardian Permanent Address <span class="text-[#FF0000]">*</span></label><br/>
                <input type="text" id="gender" Placeholder="Enter Address" class="bio-input text-[#000] bg-[#fcfcfc]">
            </div>
        </div>
        
        <buttton class="button cursor-pointer absolute bottom-[-9%] right-[5%] mt-[20px] ml-[15px]  py-[15px] px-[15px]" onclick="_next_page('next_2')"><i class="bi-check"></i> PROCEED</buttton>
    </fieldset>
    <div class="log-div hidden" id="next_2">
        <div class="flex items-center gap-[10px]  justify-center">
            <!-- <fieldset class="fieldset pl-[20px]">
                <legend class="font-semibold px-[10px] font-[sub-title-font]">Institution Attended</legend>
                <div class="w-[80%]">
                    <div clas="mt-[20px] w-full">
                        <label for="primary" class="ml-[10px] ">Primary School <span class="text-[#FF0000]">*</span></label><br/>                
                        <input type="text" id="primary" Placeholder="Enter primary school attended" class="bio-input py-[25px] text-[#000] border border-[#959595] bg-[#fff]">
                        <div class="flex items-center gap-[20px]">
                            <span>From</span>
                            <input type="text" id="year" class="bio-input p-[7px] w-[80px] text-[#000] border border-[#959595] bg-[#fff]">
                            <span>To</span>
                            <input type="text" id="year" class="bio-input p-[7px] w-[80px] text-[#000] border border-[#959595] bg-[#fff]">
                        </div>
                    </div>

                    <div class="my-[30px]">
                        <label for="primary" class="ml-[10px]">Secondary School <span class="text-[#FF0000]">*</span></label><br/>                
                        <input type="text" id="primary" Placeholder="Enter secondary school attended" class="bio-input py-[25px] text-[#000] border border-[#959595] bg-[#fff]">
                        <div class="flex items-center gap-[20px]">
                            <span>From</span>
                            <input type="text" id="year" class="bio-input py-[10px] w-[80px] text-[#000] border border-[#959595] bg-[#fff]">
                            <span>To</span>
                            <input type="text" id="year" class="bio-input py-[10px] w-[80px] text-[#000] border border-[#959595] bg-[#fff]">
                        </div>
                    </div>

                    <label for="primary" class="ml-[10px]">Tertiary Institution </label><br/>                
                    <input type="text" id="primary" Placeholder="Enter tertiary school attended" class="bio-input py-[25px] text-[#000] border border-[#959595] bg-[#fff]">
                    <div class="flex items-center gap-[20px]">
                        <span>From</span>
                        <input type="text" id="year" class="bio-input py-[10px] w-[80px] text-[#000] border border-[#959595] bg-[#fff]">
                        <span>To</span>
                        <input type="text" id="year" class="bio-input py-[10px] w-[80px] text-[#000] border border-[#959595] bg-[#fff]">
                    </div>
                    
                </div>
            </fieldset> -->

            <fieldset class="fieldset w-[calc(100%-20px)] relative min-h-[520px] px-[20px] py-[5px]">
                
                <legend class="font-semibold px-[10px] font-[sub-title-font]">Fill O level details</legend>
                <select name="" id="myDiv" class="select mt-[20px]">
                    <option value="" selected> Number of sitting(s)</option>
                    <option value="1"> 1</option>
                    <option value="2">2</option>
                </select>

                <div class="flex gap-[60px] items-center">
                    <select name="" id="" class="select my-[10px] w-[150px]">
                        <option value="" selected> Exam type</option>
                        <option value="">WASSCE</option>
                        <option value="">GCE</option>
                        <option value="">NECO</option>
                        <option value="">NECO GCE</option>
                        <option value="">NABTEB</option>
                    </select>
                        
                    <select name="" class="year-select select w-[150px]">
                        <option value="" selected> Exam Year</option>
                    </select>
                    
                    <div class="flex items-center gap-[10px]">
                        <label for="exam_no" class="text-[13px]">Exam Number</label>
                        <input type="text" id="exam_no" class="bio-input w-[150px] text-[#000] border border-[#959595] bg-[#fff]">
                    </div>
                </div>
                <div class="hidden mb-[15px]" id="secondsitting">
                <div class="flex gap-[60px] items-center">
                    <select name="" id="" class="select my-[10px] w-[150px]">
                        <option value="" selected> Exam type</option>
                        <option value="">WASSCE</option>
                        <option value="">GCE</option>
                        <option value="">NECO</option>
                        <option value="">NECO GCE</option>
                        <option value="">NABTEB</option>
                    </select>
                        
                    <select name="" class="year-select select w-[150px]">
                        <option value="" selected> Exam Year</option>
                    
                    </select>
                    <div class="flex items-center gap-[10px]">
                        <label for="exam_no" class="text-[13px]">Exam Number</label>
                        <input type="text" id="exam_no" class="bio-input w-[150px] text-[#000] border border-[#959595] bg-[#fff]">
                    </div>
                </div>
                </div>
                <script>Getyear()</script>
                <script>sittings()</script>
                
                    
                <div class="flex gap-[55px]">
                    <div class="flex items-center gap-[15px]">
                        <div class="flex flex-col mt-[10px]">
                    
                            <input type="text" id="phonenumber" value="Mathematics" class="bio-input w-[200px] h-[40px] bg-[#fff] border border-[#959595]" disabled>
                            <input type="text" id="phonenumber" value="English" class="bio-input w-[200px] h-[40px] bg-[#fff] border border-[#959595]" disabled>

                            <select name="" id="subject1" class="subject-select select h-[40px] mt-[10px]">
                                <option value="" disabled selected>SELECT SUBJECT</option>
                                
                            </select>

                            <select name="" id="subject2" class="subject-select select h-[40px] mt-[10px]">
                                <option value="" disabled selected>SELECT SUBJECT</option>
                            </select>

                            <select name="" id="select3" class="subject-select  select h-[40px] mt-[10px]">
                                <option value="" disabled selected>SELECT SUBJECT</option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center mt-[5px]">
                            <select name="" id="subject1" class="grade-select select w-[70px] h-[40px] mt-[10px]">
                            </select>
                        
                            <select name="" id="subject1" class="grade-select select w-[70px] h-[40px] mt-[10px]">
                            </select>
                        
                            <select name="" id="subject1" class="grade-select select w-[70px] h-[40px] mt-[10px]">
                            </select>
                        
                            <select name="" id="subject1" class="grade-select select w-[70px] h-[40px] mt-[10px]">
                            </select>
        
                            <select name="" id="subject1" class="grade-select select w-[70px] h-[40px] mt-[10px]">
                            </select>
                            
                        </div>
                    </div>
                    <div class="flex items-center gap-[10px]">
                        <div class="flex flex-col mt-[10px] gap-[15px]">
                            <select name="" id="select4" class="subject-select select h-[40px] mt-[10px]">
                                <option value="" disabled selected>SELECT SUBJECT</option>
                            </select>

                            <select name="" id="select5" class="subject-select select h-[40px] mt-[10px]">
                                <option value="" disabled selected>SELECT SUBJECT</option>
                            </select>

                            <select name="" id="select6" class="subject-select select h-[40px] mt-[10px]">
                                <option value="" disabled selected>SELECT SUBJECT</option>
                            </select>

                            <select name="" id="select7" class="subject-select  select h-[40px] mt-[10px]">
                                <option value="" disabled selected>SELECT SUBJECT</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-[15px] justify-center items-center mt-[5px]">
                            <select name="" id="subject1" class="grade-select select w-[70px] h-[40px] mt-[10px]">
                            </select>
                        
                            <select name="" id="subject1" class="grade-select select w-[70px] h-[40px] mt-[10px]">
                            </select>
                        
                            <select name="" id="subject1" class="grade-select select w-[70px] h-[40px] mt-[10px]">
                            </select>
                        
                            <select name="" id="subject1" class="grade-select select w-[70px] h-[40px] mt-[10px]">
                            </select>
                            
                        </div>
                    </div>
                    <script>grades()</script>
                    <script>subjects()</script>
                </div>
            

                 <button class="button absolute right-[2%] bottom-0" onclick="_next_page('next_3')"><i class="bi-check"></i> Proceed</button>
            </fieldset>
        </div>
    </div>

    <fieldset class="fieldset hidden log-div mb-[330px]" id="next_3">
        <legend class="font-semibold px-[10px] font-[sub-title-font]">Update Passport</legend>
        <div class="w-[130px] h-[130px] ml-[10px] cursor-pointer">
            <img src="all-images/background/friends.png" id="imagePreview" class="w-full h-full" alt="image">
            <input type="file" id="imageInput" class="hidden overflow-hidden object-cover" accept="image/*">
            <script>image()</script>
        </div>
      
        <buttton class="button cursor-pointer absolute bottom-[-5%] right-[2%] mt-[20px] ml-[15px]  py-[15px] px-[15px]" onclick=""><i class="bi-check"></i> SUBMIT</buttton>
    </fieldset>
<?php }?>