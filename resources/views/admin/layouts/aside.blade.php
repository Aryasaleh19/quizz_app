<aside id="application-sidebar-brand"
    class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed xl:top-5 xl:left-auto top-0 left-0 with-vertical h-screen z-[999] shrink-0 w-[270px] shadow-md xl:rounded-md rounded-none bg-white left-sidebar transition-all duration-300">
    <!-- ---------------------------------- -->
    <!-- Start Vertical Layout Sidebar -->
    <!-- ---------------------------------- -->
    <div class="p-4">
        <a href="{{ route('dashboard') }}" class="font-bold text-xl text-nowrap">
            {{-- <img src="/images/logos/logo-light.svg" alt="Logo-Dark" /> --}}
            QUIZ {{ $nama_sekolah }}
        </a>
    </div>
    <div class="scroll-sidebar " data-simplebar="">
        <nav class="w-full flex flex-col sidebar-nav px-4 mt-5">
            <ul id="sidebarnav" class="text-gray-600 text-sm">
                <li class="text-xs font-bold pb-[5px]">
                    <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                    <span class="text-xs text-gray-400 font-semibold">HOME</span>
                </li>

                <li class="sidebar-item">
                    <a id="getDashboard"
                        class="sidebar-link active gap-3 py-2.5 my-1 text-base flex cursor-pointer items-center relative rounded-md text-gray-500 w-full">
                        <i class="ti ti-layout-dashboard ps-2 text-2xl"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class="text-xs font-bold mb-4 mt-6">
                    <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                    <span class="text-xs text-gray-400 font-semibold">UI COMPONENTS</span>
                </li>

                <li class="sidebar-item">

                    <a id="getDataQuiz"
                        class="sidebar-link cursor-pointer gap-3 py-2.5 my-1 text-base flex items-center relative rounded-md text-gray-500 w-full">
                        <i class="ti ti-article ps-2 text-2xl"></i>
                        <span>Quiz</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <button type="submit" id="getMateri"
                        class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center relative rounded-md text-gray-500 w-full">
                        <i class="ti ti-alert-circle ps-2 text-2xl"></i>
                        <span>Materi</span>
                    </button>
                </li>

                <li class="sidebar-item">
                    <button id="cards"
                        class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center relative rounded-md text-gray-500 w-full">
                        <i class="ti ti-cards ps-2 text-2xl"></i> <span>Card</span>
                    </button>
                </li>

                <li class="sidebar-item">
                    <button type="submit" data-view="view-forms" id="getform"
                        class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center relative rounded-md text-gray-500 w-full">
                        <i class="ti ti-file-description ps-2 text-2xl"></i>
                        <span>Forms</span>
                    </button>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center relative rounded-md text-gray-500 w-full"
                        href="./components/typography.html">
                        <i class="ti ti-typography ps-2 text-2xl"></i>
                        <span>Typography</span>
                    </a>
                </li>

                <li class="text-xs font-bold mb-4 mt-8">
                    <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                    <span class="text-xs text-gray-400 font-semibold">AUTH</span>
                </li>

                <li class="sidebar-item">
                    <a id="login"
                        class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center relative rounded-md text-gray-500 w-full"
                        href="/test-login">
                        <i class="ti ti-login ps-2 text-2xl"></i> <span>Login</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center relative rounded-md text-gray-500 w-full"
                        href="./pages/authentication-register.html">
                        <i class="ti ti-user-plus ps-2 text-2xl"></i>
                        <span>Register</span>
                    </a>
                </li>

                <li class="text-xs font-bold mb-4 mt-8">
                    <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                    <span class="text-xs text-gray-400 font-semibold">EXTRA</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center relative rounded-md text-gray-500 w-full"
                        href="./pages/icons.html">
                        <i class="ti ti-mood-happy ps-2 text-2xl"></i>
                        <span>Icons</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center relative rounded-md text-gray-500 w-full"
                        href="./pages/sample-page.html">
                        <i class="ti ti-aperture ps-2 text-2xl"></i>
                        <span>Sample Page</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Bottom Upgrade Option -->
    <div class="m-4 relative grid">
        {{--
         --}}
    </div>
    <!-- </aside> -->
</aside>
