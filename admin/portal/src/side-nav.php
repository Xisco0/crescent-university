<nav class="fixed w-[230px] h-screen bg-white">
    <div class="mt-[70px]">
        <ul>
            <li class="side-links" onclick="_get_page('dashboard');"><i class="bi-speedometer2 text-[#3a4669] mr-[6px]"></i> Dashboard</li>
            <li class="side-links" id="admin-page" onclick="_expand_link('staff');" title="Admin"><i class="bi-people text-[#3a4669] mr-[6px]"></i> Admin/Staff <i class="bi bi-chevron-down float-right mr-[15px]"></i>
                <div class="w-[100%] bg-[#f4f6fa]" id="staff-li" style="display:none">   
                    <div class="li-in" onclick="_get_page('active-staff');"> - Active Staff</div>
                    <div class="li-in" onclick="_get_page('inactive-staff');"> - Inactive Staff</div>
                </div>
            </li>

            <li class="side-links" onclick="_expand_link('agents');" title="Student Page"><i class="bi-people text-[#3a4669] mr-[6px]"></i> Student Page<i class="bi bi-chevron-down float-right mr-[15px]"></i>
                <div class="w-[100%] bg-[#f4f6fa]" id="agents-li" style="display:none">   
                    <div class="li-in" onclick="_get_page('active-student');"> - Active Student</div>
                    <div class="li-in" onclick="_get_page('inactive-student');"> - Inactive Student</div>
                </div>
            </li>

            <li class="side-links" onclick="_expand_link('faculty');" title="Faculty/Department Page"><i class="bi-book text-[#3a4669] mr-[6px]"></i> Faculty/Department Page<i class="bi bi-chevron-down float-right mr-[15px]"></i>
                <div class="w-[100%] bg-[#f4f6fa]" id="faculty-li" style="display:none">   
                    <div class="li-in"> - View Faculty</div>
                    <div class="li-in"> - View Department</div>
                </div>
            </li>

            <li class="side-links" onclick="_expand_link('course');" title="Agents"><i class="bi-book text-[#3a4669] mr-[6px]"></i> Course Page<i class="bi bi-chevron-down float-right mr-[15px]"></i>
                <div class="w-[100%] bg-[#f4f6fa]" id="course-li" style="display:none">   
                    <div class="li-in" onclick="_get_form('new-course-module');"> - Add New Course</div>
                    <div class="li-in" onclick="_get_form('department_course');"> - Add New Department Course</div>
                </div>
            </li>
                
            <li class="side-links" onclick="_expand_link('settings');"  title="Settings">  <i class="bi-gear text-[#3a4669] mr-[6px]"></i> Settings  <i class="bi bi-chevron-down float-right mr-[15px]"></i>
                <div class="w-[100%] bg-[#f4f6fa]" id="settings-li" style="display:none">   
                    <div class="li-in" id="system-settling" onClick=""> - System Settings</div>
                    <div class="li-in" onClick="_get_form('pass-form');"> - Change Password</div>
                </div>
            </li>

            <li class="side-links" onclick="_logout_();"><i class="bi-power text-[#3a4669] mr-[6px]"></i> Log-Out</li>
        </ul>
    </div>
</nav>



