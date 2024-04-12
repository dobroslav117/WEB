<?php
class House {
    // Атрибути класу
    public $price;
    public $name;
    public $address;
    public $contactPhone;
    public $image;
    public $bedrooms;
    public $bathrooms;
    public $realtor;
    public $ImgRealtor;

    // Конструктор класу для ініціалізації об'єктів
    public function __construct($price, $name, $address, $contactPhone, $image, $bedrooms, $bathrooms,$realtor,$ImgRealtor) {
        $this->price = $price;
        $this->name = $name;
        $this->address = $address;
        $this->contactPhone = $contactPhone;
        $this->image = $image;
        $this->bedrooms = $bedrooms;
        $this->bathrooms = $bathrooms;
        $this->realtor = $realtor;
        $this->ImgRealtor = $ImgRealtor;
    }
}
$houses =[
    new House(750000, "DETACHED HOUSE", "742 Evergreen Terrace", "123-456-789", "https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80", 3, 2,"Tiffany Heffner","https://images.unsplash.com/photo-1500522144261-ea64433bbe27?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80"),
    new House(450000, "Summer house", "Fort Myers, FL, USA", "789-143-543", "https://images.unsplash.com/photo-1583608205776-bfd35f0d9f83?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", 5, 3,"Mollie Bradley","https://plus.unsplash.com/premium_photo-1678208879883-0d53ec4e1dd9?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"),
    new House(4000000, "Family House", "Iowa, Glenwood, United States", "547-234-098", "https://images.unsplash.com/photo-1558036117-15d82a90b9b1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", 8, 5,"Beau Conner","https://plus.unsplash.com/premium_photo-1679857225604-c8b1a95ab802?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D")
];
function calculateDiscount()
{
    // Генеруємо випадковий відсоток знижки від 0 до 30%
    $discountPercent = mt_rand(0, 30);

    // Перевіряємо, чи будинок попадає під акцію (наприклад, якщо відсоток знижки більше 0)
    if ($discountPercent > 0) {
        return $discountPercent; // Повертаємо відсоток знижки
    } else {
        return false; // Якщо будинок не попадає під акцію, повертаємо false
    }
}
function generateHouses($numHouses=0) {
  $houses=[];
  for ($i = 0; $i < $numHouses; $i++) {
      // Генерація випадкових значень для будинку
      $price = rand(300000, 5000000);
      $name = ["DETACHED HOUSE", "Summer house", "Family House"][rand(0, 2)];
      $address = "Address " . ($i + 1);
      $phoneNumber = "123-456-789";
      $imageURL = "https://images.unsplash.com/photo-1558036117-15d82a90b9b1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"; // Замініть посиланням на реальне зображення
      $bedrooms = rand(3, 12);
      $bathrooms = rand(2, 5);
      $realtor = "Agent " . ($i + 1);
      $ImgRealtor = "https://via.placeholder.com/150"; // Замініть посиланням на реальне зображення

      $houses[] = new House($price, $name, $address, $phoneNumber, $imageURL, $bedrooms, $bathrooms, $realtor, $ImgRealtor);
  }

  return $houses;
}
?>


<section class="bg-white -mt-12 py-16">
    <div class="flex flex-wrap items-center justify-center min-h-screen gap-[50px] lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
      <?php $newHouses = generateHouses(isset($_GET['houses']) ? intval($_GET['houses']) : 3);
      $houses = array_merge($houses, $newHouses);

      ?>
        <?php foreach($houses as $house): ?>
            <?php $discount = calculateDiscount();?>
            <div class="max-w-sm w-full py-6 px-3">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
              <div class="bg-cover bg-center h-56 p-4" style="background-image: url(<?php echo $house->image; ?>)">
                <div class="flex justify-end">
                  <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                  </svg>
                </div>
              </div>
              <div class="p-4">
                <p class="uppercase tracking-wide text-sm font-bold text-gray-700"><?php echo $house->name; ?></p>
                <?php
                    if ($discount !== false) {
                        $discountedPrice = $house->price - ($house->price * $discount / 100);
                        echo '<p style="font-size: 18px; color: red; text-decoration: line-through;">$' . $house->price . '</p>';
                        echo '<p style="font-size: 24px; color: red;">$' . $discountedPrice . '</p>';
                    } else {
                        // Якщо знижки немає, виводимо просто поточну ціну
                        echo '<p class="text-3xl text-gray-900">$' . $house->price . '</p>';
                    }
                ?>
                <!-- <p class="text-3xl text-gray-900">$<?php echo $house->price; ?></p> -->
                <p class="text-gray-700"><?php echo $house->address; ?></p>
              </div>
              <div class="flex p-4 border-t border-gray-300 text-gray-700">
                <div class="flex-1 inline-flex items-center">
                  <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path>
                  </svg>
                  <p><span class="text-gray-900 font-bold"><?php echo $house->bedrooms; ?></span> Bedrooms</p>
                </div>
                <div class="flex-1 inline-flex items-center">
                  <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path>
                  </svg>
                  <p><span class="text-gray-900 font-bold"><?php echo $house->bathrooms; ?></span> Bathrooms</p>
                </div>
              </div>
              <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Realtor</div>
                <div class="flex items-center pt-2">
                  <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(<?php echo $house->ImgRealtor; ?>)">
                  </div>
                  <div>
                    <p class="font-bold text-gray-900"><?php echo $house->realtor; ?></p>
                    <p class="text-sm text-gray-700"><?php echo $house->contactPhone; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <?php endforeach; ?>

    </div>
    <div class=" w-full flex ">

      <form method="get" class="m-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="houses" value="<?php echo isset($_GET['houses']) ? intval($_GET['houses']) + 3 : 3; ?>">
        <button type="submit" class="m-auto bg-green-500 px-8 py-5 rounded-lg text-white hover:bg-green-900 duration-300">Show more</button>
      </form>
        <?php
            if (isset($_GET['houses'])) {
                $houses = intval($_GET['houses']);
            }
        ?>
    </div>
  </section>