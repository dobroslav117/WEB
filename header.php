<nav class="sticky top-0 h-20 bg-[#243c5a] p-5 sm:px-24 xl:px-64">
  <div class="mx-auto flex justify-between items-center">
    <a href="#"
       class="uppercase text-white text-xl xl:text-3xl font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter">
       News</a>
    <button class="block md:hidden uppercase inline-flex items-center bg-green-500 px-3 py-2 rounded-lg text-white">Menu <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg></button>
    <div class="hidden md:block">
      <h2 class="uppercase text-white text-xl xl:text-3xl font-bold whitespace-no-wrap font-Montserrat leading-normal tracking-tighter"><?php $today = date("d M Y"); echo $today; ?></h2>

    </div>
  </div>
</nav>