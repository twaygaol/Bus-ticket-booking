<ul style="height: 100vh;" class="w-80 space-y-6 py-7 px-2 shadow  bg-white border-spacing-3 border border-black border-x-neutral-800" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="no-underline flex items-center space-x-2 justify-center text-gray-700" href="{{ route('home') }}">
    <!-- <div class="transform rotate-15">
      <i class="fas fa-ticket-alt"></i>
    </div> -->
    <div class="text-xl text-gray-900 font-semibold">PT Al MASAR</div>
  </a>
  <!-- Divider -->
  <!-- <hr class="border-gray-700 my-4"> -->
  <!-- Nav Item - Dashboard -->
  <li>
    <a class="no-underline flex items-center p-2 text-gray-800 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary @if(request()->routeIs('home')) bg-green-400 @endif" href="{{ route('home') }}">
      <i class="fas fa-home"></i>
      <span class="ml-2 text-gray-800 text-sm">Dashboard</span>
    </a>
  </li>
  <!-- Nav Item - Data Master Menu -->
  <li x-data="{ open: false }" @class="{'bg-green-500': open}">
    <a @click="$event.preventDefault(); open = !open" class="no-underline flex items-center p-2 text-gray-800 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary cursor-pointer" href="#" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'">
      <i class="fas fa-folder"></i>
      <span class="ml-2 text-gray-700 text-sm">Data Master</span>
      <span class="ml-auto">
        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </span>
    </a>
    <div x-show="open" class="mt-2 space-y-2 px-7" aria-label="Data Master">
      <a class="no-underline block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700 @if(request()->routeIs('rute.index')) bg-green-500 @endif" href="{{ route('rute.index') }}">Rute</a>
      <a class="no-underline block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700 @if(request()->routeIs('transportasi.index')) bg-green-500 @endif" href="{{ route('transportasi.index') }}">Transportasi</a>
      <a class="no-underline block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700 @if(request()->routeIs('category.index')) bg-green-500 @endif" href="{{ route('category.index') }}">Category</a>
      <a class="no-underline block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700 @if(request()->routeIs('user.index')) bg-green-500 @endif" href="{{ route('user.index') }}">User</a>
    </div>
  </li>

  <!-- Nav Item - Verifikasi -->
  <li>
    <a class="no-underline flex items-center p-2 text-gray-800 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary @if(request()->routeIs('petugas')) bg-green-400 @endif" href="{{ route('petugas') }}">
      <i class="fas fa-clipboard-check"></i>
      <span class="ml-2 text-gray-700 text-sm">Verifikasi Ticket</span>
    </a>
  </li>
  <!-- Nav Item - Transaksi -->
  <li>
    <a class="no-underline flex items-center p-2 text-gray-800 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary @if(request()->routeIs('transaksi')) bg-green-400 @endif" href="{{ route('transaksi') }}">
      <i class="fas fa-shopping-cart"></i>
      <span class="ml-2 text-gray-700 text-sm">Transaksi</span>
    </a>
  </li>
  <li x-data="{ open: false }" @class="{'bg-green-500': open}">
    <a @click="$event.preventDefault(); open = !open" class="no-underline flex items-center p-2 text-gray-800 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary cursor-pointer" href="#" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'">
      <i class="fas fa-folder"></i>
      <span class="ml-2 text-gray-700 text-sm">Pengaturan</span>
      <span class="ml-auto">
        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </span>
    </a>
    <div x-show="open" class="mt-2 space-y-2 px-7" aria-label="Data Master">
      <a class="no-underline block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700 @if(request()->routeIs('artikel.index')) bg-green-500 @endif" href="{{ route('artikel.index') }}">Artikel</a>
      <!-- <a class="no-underline block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700 @if(request()->routeIs('transportasi.index')) bg-green-500 @endif" href="{{ route('transportasi.index') }}">Transportasi</a>
      <a class="no-underline block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700 @if(request()->routeIs('category.index')) bg-green-500 @endif" href="{{ route('category.index') }}">Category</a>
      <a class="no-underline block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700 @if(request()->routeIs('user.index')) bg-green-500 @endif" href="{{ route('user.index') }}">User</a> -->
    </div>
  </li>
  <!-- Divider -->
  <!-- <hr class="border-gray-700 my-4"> -->
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center">
    <button class="rounded-full border-2 border-gray-800 p-1" id="sidebarToggle"></button>
  </div>
</ul>
