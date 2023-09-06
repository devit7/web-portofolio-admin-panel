<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- import app.css and app.js --}}
        @vite(['resources/css/app.css','resources/js/app.js'])
        <!--Regular Datatables CSS-->
    </head>
    <body class="dark:bg-gray-900 " >
        <div class="antialiased ">
            <nav class=" border-b  px-4 py-2.5 bg-gray-800 border-gray-700 fixed left-0 right-0 top-0 z-50">
              <div class="flex flex-wrap justify-between items-center">
                <div class="flex justify-start items-center">
                  <button
                    data-drawer-target="drawer-navigation"
                    data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="p-2 mr-2  rounded-lg cursor-pointer md:hidden   focus:bg-gray-700 focus:ring-2 focus:ring-gray-700 text-gray-400 hover:bg-gray-700 hover:text-white"
                  >
                    <svg
                      aria-hidden="true"
                      class="w-6 h-6"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    <svg
                      aria-hidden="true"
                      class="hidden w-6 h-6"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    <span class="sr-only">Toggle sidebar</span>
                  </button>
                  <a href="#" class="flex items-center justify-between mr-4">
                    <img
                      src="https://flowbite.s3.amazonaws.com/logo.svg"
                      class="mr-3 h-8"
                      alt="Flowbite Logo"
                    />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Hello Mpiie</span>
                  </a>
                  <form action="#" method="GET" class="hidden md:block md:pl-2">
                    <label for="topbar-search" class="sr-only">Search</label>
                    <div class="relative md:w-64 md:w-96">
                      <div
                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                      >
                        <svg
                          class="w-5 h-5 text-gray-400"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          ></path>
                        </svg>
                      </div>
                      <input
                        type="text"
                        name="email"
                        id="topbar-search"
                        class=" text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                        placeholder="Search"
                      />
                    </div>
                  </form>
                </div>
                <div class="flex items-center lg:order-2">
                  <button
                    type="button"
                    data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="p-2 mr-1  rounded-lg md:hidden  text-gray-400 hover:text-white hover:bg-gray-700 focus:ring-4 focus:ring-gray-600"
                  >
                    <span class="sr-only">Toggle search</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                    </svg>
                  </button>
                  <button
                    type="button"
                    class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-600"
                    id="user-menu-button"
                    aria-expanded="false"
                    data-dropdown-toggle="dropdown"
                  >
                    <span class="sr-only">Open user menu</span>
                    <img
                      class="w-8 h-8 rounded-full"
                      src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
                      alt="user photo"
                    />
                  </button>
                  <!-- Dropdown menu -->
                  <div
                    class="hidden z-50 my-4 w-56 text-base list-none rounded divide-y shadow bg-gray-700 divide-gray-600 rounded-xl"
                    id="dropdown"
                  >
                    <div class="py-3 px-4">
                      <span
                        class="block text-sm font-semibold text-white"
                        >Admin Mpiie</span
                      >
                      <span
                        class="block text-sm  truncate text-white"
                        >admin@mpiie.com</span
                      >
                    </div>
                    <ul
                      class="py-1 text-gray-300"
                      aria-labelledby="dropdown"
                    >
                      <li>
                        <a
                          href="#"
                          class="block py-2 px-4 text-sm  hover:bg-gray-600 text-gray-400 hover:text-white"
                          >My profile</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="block py-2 px-4 text-sm hover:bg-gray-600 text-gray-400 hover:text-white"
                          >Account settings</a
                        >
                      </li>
                    </ul>
                    <ul
                      class="py-1 text-gray-300"
                      aria-labelledby="dropdown"
                    >
                      <li>
                        <a
                          href="#"
                          class="flex items-center py-2 px-4 text-sm hover:bg-gray-600 hover:text-white"
                          ><svg
                            class="mr-2 w-5 h-5 text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                          My likes</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex items-center py-2 px-4 text-sm  hover:bg-gray-600 hover:text-white"
                          ><svg
                            class="mr-2 w-5 h-5 text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
                            ></path>
                          </svg>
                          Collections</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-600 hover:text-white"
                        >
                          <span class="flex items-center">
                            <svg
                              aria-hidden="true"
                              class="mr-2 w-5 h-5 text-primary-500"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            Pro version
                          </span>
                          <svg
                            aria-hidden="true"
                            class="w-5 h-5 text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </a>
                      </li>
                    </ul>
                    <ul
                      class="py-1 text-gray-300"
                      aria-labelledby="dropdown"
                    >
                      <li>
                        <a
                          href="{{ route('auth.logout') }}"
                          class="block py-2 px-4 text-sm rounded hover:bg-gray-600 hover:text-white"
                          >Sign out</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
        
            <!-- Sidebar -->
        
            <aside
              class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full  border-r md:translate-x-0 bg-gray-800 border-gray-700"
              aria-label="Sidenav"
              id="drawer-navigation"
            >
              <div class="overflow-y-auto py-5 px-3 h-full bbg-gray-800 text-slate-500">
                <form action="#" method="GET" class="md:hidden mb-2">
                  <label for="sidebar-search" class="sr-only">Search</label>
                  <div class="relative">
                    <div
                      class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                    >
                      <svg
                        class="w-5 h-5 text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        ></path>
                      </svg>
                    </div>
                    <input
                      type="text"
                      name="search"
                      id="sidebar-search"
                      class="  text-sm rounded-lg  block w-full pl-10 p-2 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                      placeholder="Search"
                    />
                  </div>
                </form>
                <ul class="space-y-2">
                  <li>
                    <a
                      href="/main"
                      class="flex items-center p-2 text-base font-medium rounded-lg text-white hover:bg-gray-700 group"
                    >
                      <svg
                        aria-hidden="true"
                        class="w-6 h-6  transition duration-75 text-gray-400 group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                      </svg>
                      <span class="ml-3 font-semibold">Overview</span>
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      class="flex items-center p-2 w-full text-base font-medium  rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                      aria-controls="dropdown-pages"
                      data-collapse-toggle="dropdown-pages"
                    >
                      <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6  transition duration-75 text-gray-400 group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                      <span class="flex-1 ml-3 text-left whitespace-nowrap font-semibold "
                        >Pages</span
                      >
                      <svg
                        aria-hidden="true"
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                      </svg>
                    </button>
                    <ul id="dropdown-pages"
                    class="py-2 space-y-2"
                    style="display: block;">
                      <li>
                        <a
                          href="/home"
                          class="flex  items-center p-2 pl-11 w-full text-base font-medium  rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                          >Preview</a
                        >
                      </li>
                      <li>
                        <a
                          href="/user"
                          class="flex  items-center p-2 pl-11 w-full text-base font-medium  rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                          >User</a
                        >
                      </li>
                      <li>
                        <a
                          href="/about"
                          class="flex  items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                          >About</a
                        >
                      </li>
                      <li>
                        <a
                          href="/proglanguage"
                          class="flex  items-center p-2 pl-11 w-full text-base font-medium  rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                          >Proglang</a
                        >
                      </li>
                      
                      <li>
                        <a
                          href="/project"
                          class="flex  items-center p-2 pl-11 w-full text-base font-medium  rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                          >Project</a
                        >
                      </li>
                      <li>
                        <a
                          href="/programproject"
                          class="flex  items-center p-2 pl-11 w-full text-base font-medium  rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                          >ProgProject</a
                        >
                      </li>
                      <li>
                        <a
                          href="/kda"
                          class="flex  items-center p-2 pl-11 w-full text-base font-medium  rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                          >KDA</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li>
                    <button
                      type="button"
                      class="flex items-center p-2 w-full text-base font-medium  rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                      aria-controls="dropdown-authentication"
                      data-collapse-toggle="dropdown-authentication"
                    >
                      <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6  transition duration-75  text-gray-400 group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                      <span class="flex-1 ml-3 text-left font-semibold whitespace-nowrap"
                        >Authentication</span
                      >
                      <svg
                        aria-hidden="true"
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </button>
                    <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                      <li>
                        <a
                          href="#"
                          class="flex items-center  p-2 pl-11 w-full text-base font-medium  rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                          >Sign In</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex items-center  p-2 pl-11 w-full text-base font-medium  rounded-lg transition duration-75 group  text-white hover:bg-gray-700"
                          >Sign Up</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex items-center  p-2 pl-11 w-full text-base font-medium  rounded-lg transition duration-75 group text-white hover:bg-gray-700"
                          >Forgot Password</a
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul
                  class="pt-5 mt-5 space-y-2 border-t border-gray-700"
                >
                  <li>
                    <a
                      href="#"
                      class="flex items-center p-2 text-base font-medium  rounded-lg transition duration-75 hover:bg-gray-700 text-white group"
                    >
                      <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400  group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path
                          fill-rule="evenodd"
                          d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                      <span class="ml-3 font-semibold">Docs</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center p-2 text-base font-medium  rounded-lg transition duration-75  hover:bg-gray-700 text-white group"
                    >
                      <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6  transition duration-75 text-gray-400  group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
                        ></path>
                      </svg>
                      <span class="ml-3  font-semibold">Components</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center p-2 text-base font-medium rounded-lg transition duration-75  hover:bg-gray-700 text-white group"
                    >
                      <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                      <span class="ml-3  font-semibold">Help</span>
                    </a>
                  </li>
                </ul>
              </div>
              </div>
            </aside>
        
            <main class="p-4 md:ml-64 h-auto pt-20  dark:bg-gray-900">
                <div>
                    @yield('content')
                </div>
            </main>
          </div>
          
    </body>
</html>
