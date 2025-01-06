<header class="animated fadeInDown fixed z-[800]">
    
    <div class="w-screen h-[60px] bg-[linear-gradient(45deg,_#fff_0%,_#fff_60%,_#075720_60%,_#10b981_100%)] " style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.1);">
        <div class="w-[95%] m-auto flex items-center justify-between">
            <div class="w-[200px]">
                <img src="all-images/images/crescent_logo.JPG" alt="logo" id="imagePreview2" class="mix-blend-multiply w-full">
            </div>

            

            <div class="flex gap-[30px] items-center relative">
                <div class="setting-bg custom-screen-dh:hidden">
                    <i class="bi-gear text-[#fff]"></i>
                </div>

                <div class="setting-bg relative custom-screen-d:hidden">
                    <i class="bi-bell text-[#fff] "></i>
                    <div class="w-[14px] h-[14px] bg-[#FE6A49] flex justify-center items-center rounded-[50%] absolute top-[14%] right-[18%]">
                        <span class="text-[#fff] text-[8px]">0</span>
                    </div>
                </div>

                <hr class="border custom-screen-dh:hidden">
                <div class="flex items-center gap-[10px] flex-row-reverse">
                    <div onclick="dropdown()" id="dropdown-button-1" class="flex text-[#fff] cursor-pointer items-center"><h2 class="font-[sub-title-font] display-fullname custom-screen-dh:hidden" >xxx </h2><i class="bi-chevron-down"></i></div>
                    <div class="w-[35px] h-[35px] rounded-[100%] cursor-pointer">
                        <img alt="image" class="passport overflow-hidden rounded-[100%] w-full h-full" id="">
                    </div>
                </div>
                <button class="cursor-pointer" title="menu" onclick="toggleMenu()" id="menu-button"><i class="bi-list text-[#fff] text-[23px]"></i></button>

                <div class="bg-[var(--main-color)] w-[10rem] absolute z-[888] top-[128%] hidden right-[-3%] h-[165px]  rounded-[5px] transition duration-[0.5s] ease-out" id="dropdown-content-1"  style="box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.1)">
                    <ul class="w-full mt-[10px] px-[10px] absolute z-[888]">
                        <li class="list">Update Biodata</li>
                        <li class="list my-[10px] flex justify-between items-center">inbox
                        <div class="w-[14px] h-[14px] bg-[#FE6A49] flex justify-center items-center rounded-[50%]">
                            <span class="text-[#fff] text-[8px]">0</span>
                        </div>
                        </li>
                        <li class="list">Calendar</li>
                        <li class="list my-[10px] ">Settings</li>
                        <hr class="border h-[0] w-full">
                        <li class="list mt-[8px]" onclick="_logOut()">Log out</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>




