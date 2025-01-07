<?php if ($page=='update'){?>
    <fieldset class="fieldset log-div mb-[80px]" id="next_1">
        <legend class="font-semibold px-[10px] font-[sub-title-font]">Contact Information</legend>
        
        <div class="field">
            <div class="w-[30%]">
                <label for="fullname" class="ml-[10px]">Full Name</label><br/>
                <input type="text" class="bio-input display-fullname-input" disabled>
            </div>

            <div class="w-[30%]">
                <label for="email" class="ml-[10px]">Email Address</label><br/>
                <input type="text" id="display-email" class="bio-input" disabled>
            </div>

            <div class="w-[30%]">
                <label for="phonenumber" class="ml-[10px]">Phone Number</label><br/>
                <input type="text" id="display-number" class="bio-input" disabled>
            </div>
        </div>

        <div class="field my-[10px]">
        
            <div class="w-[30%]">
                <label for="gender" class="ml-[10px]">Gender</label><br/>
                <input type="text" id="display-gender" class="bio-input" disabled>
            </div>

            <div class="w-[30%]">
                <label for="phonenumber" class="ml-[10px]">Date of birth</label><br/>
                <input type="text" id="display-dob" class="bio-input" disabled>
            </div>

            <div class="w-[30%]">
                <label for="state" class="ml-[10px]">State Of Origin <span class="text-[#FF0000]">*</span></label><br/>
                <SELECT class="font-[body-font] text-[#000] cursor-pointer bio-input bg-[#fcfcfc]" id="state_of_origin_id" onchange="get_local_gov(this.value)">
                    <option value="select_state" disabled selected>select state</option>
                   
                </SELECT>
            </div>
        </div>

        <div class="field my-[10px]">
            <div class="w-[30%]">
                <label for="lga" class="ml-[10px]">Local government Area <span class="text-[#FF0000]">*</span></label><br/>
                <SELECT class="font-[body-font] text-[#000] cursor-pointer bio-input bg-[#fcfcfc]" id="local_gov_id">
                    <option value="select_lga" disabled selected>select lga</option>
                </SELECT>
            </div>

            <div class="w-[30%]">
                <label for="gender" class="ml-[10px]">Permanent Address <span class="text-[#FF0000]">*</span></label><br/>
                <input type="text" id="address" Placeholder="Permanent Address" class="bio-input text-[#000] bg-[#fcfcfc]">
            </div>

            <div class="w-[30%]">
                <label for="lga" class="ml-[10px]">Marital status <span class="text-[#FF0000]">*</span></label><br/>
                <select name="" id="marital_status_id" class="font-[body-font] cursor-pointer text-[#000] bio-input bg-[#fcfcfc]">
                    <option value="select_marital" disabled="" selected="">SELECT MARITAL STATUS</option>
                    <script>get_marital();</script>
                </select>
            </div>
        </div>
        <script>get_state()</script>
        <div class="field my-[10px]">
            <div class="w-[30%]">
                <label for="lga" class="ml-[10px]">Parent/Guardian Name <span class="text-[#FF0000]">*</span></label><br/>
                <input type="text" id="parent_name" Placeholder="Enter Guardian Name" class="bio-input text-[#000] bg-[#fcfcfc]">
            </div>

            <div class="w-[30%]">
                <label for="gender" class="ml-[10px]"> Guardian Phone number <span class="text-[#FF0000]">*</span></label><br/>
                <input type="text" id="parent_mobileno" Placeholder="Enter Phonenumber" class="bio-input text-[#000] bg-[#fcfcfc]">
            </div>
            
            <div class="w-[30%]">
                <label for="gender" class="ml-[10px]">Religion<span class="text-[#FF0000]">*</span></label><br/>
                <SELECT class="font-[body-font] text-[#000] cursor-pointer bio-input bg-[#fcfcfc]" id="religion_id">
                    <option value="select_religion" disabled selected>select religion</option>
                    <script>get_religion();</script>
                </SELECT>
            </div>
        </div>
        
        <buttton class="button cursor-pointer absolute bottom-[-9%] right-[5%] mt-[20px] ml-[15px]  py-[15px] px-[15px]" onclick="preBiodata()" id="prebio_submit_btn"><i class="bi-check"></i> PROCEED</buttton>
    </fieldset>
   

    <fieldset class="fieldset hidden log-div mb-[330px]" id="next_3">
        <legend class="font-semibold px-[10px] font-[sub-title-font]">Update Passport</legend>
        <div class="w-[130px] h-[130px] ml-[10px] cursor-pointer">
            
            <img id="imagePreview" class="passport w-full h-full" alt="image">
            <input type="file" id="imageInput" class="hidden overflow-hidden object-cover" accept="image/*">
            <script>image()</script>
            
       
            
        </div>
      
        <buttton class="button w-[150px] text-center cursor-pointer absolute bottom-[-5%] right-[2%] mt-[20px] ml-[15px]  py-[15px] px-[15px]" onclick="updateBio(student_id)" id="bio_submit_btn"><i class="bi-check"></i> SUBMIT</buttton>
    </fieldset>

    <fieldset class="fieldset log-div hidden mb-[330px] py-[40px]" id="next_4">
        <legend class=" px-[10px] font-[sub-title-font]">Print Biodata</legend>
        <buttton class="button cursor-pointer  w-[150px] my-[40px] ml-[15px]  py-[15px] px-[15px]" onclick="printBiodata()" id="bio_submit_btn"><i class="bi-person-check-fill"></i> Print Biodata</buttton>
    </fieldset>
<?php }?>