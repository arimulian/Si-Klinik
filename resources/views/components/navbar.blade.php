<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <nav class="fixed z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <a href="#" class="flex ml-2 md:mr-24">
                        <img class="w-10 h-10 mr-2" src="{{ Vite::asset('resources/images/logo.png') }}"
                             alt="logo">
                    <span class="self-center text-primary-dark text-xl font-semibold sm:text-2xl whitespace-nowrap
                    dark:text-white">Si-Klinik</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ml-3">
                        <div>
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg?uid=R45920208&ga=GA1.1.727010324.1715513392&semt=sph" alt="user
                            photo">
                            </button>
                        </div>
                        <div class="z-20 hidden my-4 text-base list-none bg-white divide-y divide-gray-100
                        rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-2">
                            <div class="px-4 py-3 w-52" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                   Admin
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    Admin@test.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="3" class="block px-4 py-2 text-sm
                                text-gray-700
                                hover:bg-gray-100
                                dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                       role="menuitem">Profile</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700
                                hover:bg-gray-100
                                dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>