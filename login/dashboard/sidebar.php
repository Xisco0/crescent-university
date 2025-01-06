<div class="h-full w-[280px] pt-[20px] bg-[#104621] custom-screen-dh:hidden">
        
    <div class="flex items-center gap-[20px] border-b-[1px] border-b-[#BEBEBE]">
        <img alt="image" class="passport overflow-hidden rounded-[50%] w-[60px] object-fill h-[60px] cursor-pointer ml-[15px]">
        <div class="text-[var(--main-color)] py-[20px] leading-[19px]">
            <span class="font-[body-font] text-[var(--schools-color)]">Welcome</span>
            <h2 class="font-[sub-title-font] text-[13px] display-fullname"></h2>
        </div>
    </div>

    <div class="mt-[40px]">
        <ul>
            <li class="active-li" onclick="Getpages('dashboard', 'dashboard')" id="dashboard"><button class="button2"><i class="bi-speedometer2 font-[body-font] mr-[10px]"></i> Dashboard</button>
            <div class="hidden" id="_dashboard"><i class="bi-speedometer2"></i> Student Dashboard</div>
            </li>
            <li><button class="button2 relative" onclick="_collapse('faq247')"><i class="bi-person font-[body-font] mr-[10px]"></i> Profile  <div id="faq247num" class="w-fit absolute bottom-0 top-0 transform translate-y-[30%] right-[5%]">&nbsp;<i class="bi-chevron-down text-[#fff]"></i>&nbsp;</div></button>
            <div class="hidden" id="faq247answer">
                <ul class="bg-slate-50 pl-[40px] py-[5px]">
                    <li onclick="Getpages('update-bio', 'update-bio')" id="update-bio" class="cursor-pointer active-li">Update Biodata
                    <div class="hidden" id="_update-bio"><i class="bi-person"></i> Update Biodata</div>
                    </li>
                    <li class="mt-[10px] cursor-pointer hidden" id="print-bio" onclick="printBiodata()">Print Biodata</li>
                    <li class="my-[10px] cursor-pointer" onclick="Getpages('transfer', 'transfer')" id="transfer">Transfer
                        <div class="hidden text-[17px] font-semibold" id="_transfer"><i class="bi-arrow-up-right-square-fill"></i> Transfer</div>
                    </li>
                    <li class="cursor-pointer">Ticket/complains</li>
                    
                </ul>
            </div>
            </li>
            <li onclick="Getpages('register-course', 'register-course')" id="register-course"><button class="button2"><i class="bi-pencil-square font-[body-font] mr-[10px]"> </i> Register course</button>
            <div class="hidden text-[17px] font-semibold" id="_register-course"><i class="bi-pencil-square"></i> Register Course</div>
            </li>
            <li><button class="button2 relative" onclick="_collapse('faq248')"><i class="bi-wallet font-[body-font] mr-[10px]"></i> My Fees <div id="faq248num" class="w-fit absolute bottom-0 top-0 transform translate-y-[30%] right-[5%]">&nbsp;<i class="bi-chevron-down text-[#fff]"></i>&nbsp;</div></button>
            <div class="hidden" id="faq248answer">
                <ul class="bg-slate-50 pl-[40px] py-[5px]">
                    <li class="cursor-pointer active-li"  onclick="Getpages('payment-history', 'payment-history')" id="payment-history">Payment History
                        <div class="hidden text-[17px] font-semibold" id="_payment-history"><i class="bi-credit-card-2-front"></i> Payment History</div>
                    </li>
                    <li class="mt-[10px] cursor-pointer active-li" onclick="Getpages('payment-advice', 'payment-advice')" id="payment-advice">Payment Advice
                        <div class="hidden text-[17px] font-semibold" id="_payment-advice"><i class="bi-credit-card-2-front"></i> Payment Advice</div>
                    </li>
                </ul>
            </div>
            </li>
            <li class="active-li" onclick="Getpages('change-password', 'change-password')" id="change-password"><button class="button2"><i class="bi-shield-lock font-[body-font] mr-[10px]"></i> Change Password</button>
                <div class="hidden text-[17px] font-semibold" id="_change-password"><i class="bi-lock-fill"></i> Change Password</div>
            </li>
        </ul>
    </div>
</div>