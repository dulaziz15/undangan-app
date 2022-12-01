<header class="top-0 left-0 z-10 flex items-center w-full bg-transparent absolute">
    <div class="container">
      <div class="relative flex items-center justify-between">
        <div class="px-4 lg:px-12">
          <a href="{{ route('data_undangan') }}" class="block py-6 text-lg font-bold text-rose-500 lg:text-2xl md:text-xl">
            UNDANG
          </a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="absolute block right-4 lg:hidden">
            <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
            <span class="transition duration-300 ease-in-out hamburger-line"></span>
            <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
          </button>
          <nav id="nav-menu" class="hidden absolute py-5 lg:shadow-none lg:rounded-none bg-rose-200  shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full">
            <ul class="block lg:flex">
              <li class="group">
                <a href="{{ route('user.index') }}" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  Home
                </a>
              </li>
              <li class="group">
                <a href="{{ route('data_undangan') }}" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  Data Undangan
                </a>
              </li>
              <li class="group px-7 py-2 lg:p-0">
                <a href="/scan" class="block px-3 py-1.5 rounded-lg text-white hover:shadow-md transition duration-300s ease-in-out font-bold hover:bg-rose-400 bg-rose-600">Scanner</a>
              </li>
              <li class="group px-7">
                <a href="/logout" class="block px-3 py-1.5 rounded-lg text-white hover:shadow-md transition duration-300s ease-in-out font-bold hover:bg-rose-400 bg-rose-600">Logout</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>