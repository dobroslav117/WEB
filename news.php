<?php
    $servername = "127.0.0.1:3306"; 
    $username = "root";
    $password = "";
    $database = "modul2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Помилка підключення до бази даних: " . $conn->connect_error);
}

$sql = "SELECT * FROM News";

$result = $conn->query($sql);
?>
<section class="bg-white -mt-12 py-16">
    <div class="flex flex-wrap items-center justify-center min-h-screen gap-[50px] w-[80%] m-auto">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="max-w-sm w-full h-[500px] py-6 px-3">
            <div class="bg-white shadow-2xl rounded-lg overflow-hidden h-full">
              <div class="bg-cover bg-center h-56 p-4" style="background-image: url(<?php echo $row['image']; ?>)">
                <div class="flex justify-end">
                  <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                  </svg>
                </div>
              </div>
              <div class="p-4">
                <p class="uppercase tracking-wide text-xl font-bold text-gray-700"><?php echo $row['title']; ?></p>
                <?php echo '<p class="text-sm text-gray-900">' . $row['description'] . '</p>';?>
              </div>
            </div>
          </div>


          <?php endwhile; ?>

    </div>
  </section>
