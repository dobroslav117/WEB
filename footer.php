<section class="bg-gray-800 -mt-12 py-16">
    <div class="flex flex-col md:flex-row text-white text-center">
      <div class="p-6 md:w-1/3">
        <h1 class="uppercase text-2xl font-bold leading-none tracking-normal pb-5">Location</h1>
        <p>
        <?php
    $query = @unserialize (file_get_contents('http://ip-api.com/php/'));
    if ($query && $query['status'] == 'success') {
        echo $query['country'] . ', ' . $query['city'];
    }
?></p>
      </div>
      <div class="p-6 md:w-1/3">
        <h1 class="uppercase text-2xl font-bold  leading-none tracking-normal">Around the web</h1>
        <div class="flex justify-center py-5 ">
                    <span class="items-center rounded-full border-2 p-3 hover:bg-white mx-1">
                        <svg class="fill-current w-5 h-5 hover:text-blue-900" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"><title>Twitter</title><path
                          d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg>
                    </span>
          <span class="items-center rounded-full border-2 p-3 hover:bg-white mx-1">
                        <svg class="fill-current w-5 h-5 hover:text-blue-900" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"><title>Twitter</title><path
                          d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg>
                    </span>
          <span class="items-center rounded-full border-2 p-3 hover:bg-white mx-1">
                        <svg class="fill-current w-5 h-5 hover:text-blue-900" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"><title>Twitter</title><path
                          d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg>
                    </span>
          <span class="items-center rounded-full border-2 p-3 hover:bg-white mx-1">
                        <svg class="fill-current w-5 h-5 hover:text-blue-900" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"><title>Twitter</title><path
                          d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg>
                    </span>
        </div>

      </div>
      <div class="p-6 md:w-1/3">
        <h1 class="uppercase text-2xl font-bold leading-none tracking-normal pb-5">About freelancer</h1>
        <p class="text-xl break-normal">Freelance is a free to use, MIT licensed Tailwindcss theme created by
          <a class="text-green-500" href="https://twitter.com/framansi">Francesco Mansi</a>
        </p>
      </div>
    </div>
  </section>