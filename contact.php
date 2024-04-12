<?php
    class ContactInformation {
        public $name;
        public $emailAddress;
        public $phoneNumber;
        public $message;

        // Конструктор класу
        public function __construct($name, $emailAddress, $phoneNumber, $message) {
            $this->name = $name;
            $this->emailAddress = $emailAddress;
            $this->phoneNumber = $phoneNumber;
            $this->message = $message;
        }
    }
?>

<section class="bg-white -mt-12 py-16">
    <h1 class="text-center uppercase text-black text-4xl font-bold  leading-none tracking-normal">
      Contact Me
    </h1>
    <div class="flex flex-row items-center justify-center py-4">
      <span class="h-1 w-24 bg-black rounded-full mx-2"></span>
      <svg class="h-12 fill-current text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/>
      </svg>
      <span class="h-1 w-24 bg-black rounded-full mx-2"></span>
    </div>
    <form class="px-6 pb-12 max-w-2xl mx-auto" method="post">
      <div class="flex items-center border-b border-b-2 border-gray-400 py-10">
        <input class="appearance-none bg-transparent border-none w-full placeholder-gray-700 mr-3 py-1 leading-tight text-2xl focus:outline-none"
               type="text" name="name" placeholder="Name" aria-label="Name" required>
      </div>
      <div class="flex items-center border-b border-b-2 border-gray-400 py-10">
        <input class="appearance-none bg-transparent border-none w-full placeholder-gray-700 mr-3 py-1 leading-tight text-2xl focus:outline-none"
               type="text" name="email" placeholder="Email Address" aria-label="Email Address" required>
      </div>
      <div class="flex items-center border-b border-b-2 border-gray-400 py-10">
        <input class="appearance-none bg-transparent border-none w-full placeholder-gray-700 mr-3 py-1 leading-tight text-2xl focus:outline-none"
               type="text" placeholder="Phone Number" name="phone" aria-label="Phone Number" required>
      </div>
      <div class="flex items-center border-b border-b-2 border-gray-400 py-10">
        <label>
                    <textarea
                      class="appearance-none border-none w-full placeholder-gray-700 mr-3 py-1 leading-tight text-2xl focus:outline-none"
                      rows="5" name="message" require placeholder="Message"></textarea>
        </label>

      </div>
      <div class="py-5">
        <button class="bg-green-500 px-8 py-5 rounded-lg text-white" type="submit">Send</button>
      </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Отримання даних з форми
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $contactInfo = new ContactInformation($name, $email, $phone, $message);

        echo "<pre>";
        print_r($contactInfo->name . "<br/>" . $contactInfo->emailAddress . "<br/>". $contactInfo->phoneNumber . "<br/>". $contactInfo->message);
        echo "</pre>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
  </section>