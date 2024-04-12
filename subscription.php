<section class="bg-white -mt-12 py-16">
    <h1 class="text-center uppercase text-black text-4xl font-bold  leading-none tracking-normal">
      Subscription
    </h1>
    <form class="px-6 pb-12 max-w-2xl mx-auto" method="post">
      <div class="flex items-center border-b border-b-2 border-gray-400 py-10">
        <input class="appearance-none bg-transparent border-none w-full placeholder-gray-700 mr-3 py-1 leading-tight text-2xl focus:outline-none"
               type="text" name="email" placeholder="Email Address" aria-label="Email Address" required>
      </div>
      <div class="py-5 flex justify-center">
        <button class="bg-green-500 hover:bg-green-900 duration-300 font-bold px-8 py-5 rounded-lg text-white" type="submit">Subscribe</button>
      </div>
    </form>
  </section>
  <?php
    $servername = "127.0.0.1:3306"; 
    $username = "root";
    $password = "";
    $database = "modul2";

    $conn = new mysqli($servername, $username, $password, $database);

        $email = $_POST['email'];
        $sql = "INSERT INTO Subscriptions (email) VALUES ('$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Дані успішно збережені в таблицю contacts";
        } else {
            echo "Помилка: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    ?>
