<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./src/styles/common.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Farm</title>
</head>

<body>
  <!-- NAVIGATION -->
  <?php include_once './partials/header.php' ?>

  <section class="registration">
    <div class="registration-form">
      <h3>ანგარიშის შექმნა</h3>
      <h4>ინფორმაცია მომხმარებელზე</h4>
      <form action="./methods/register.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="password">პაროლი</label>
        <input type="password" name="password" id="password">

        <label for="password2">გაიმეორეთ პაროლი</label>
        <input type="password" name="password2" id="password2">

        <label for="address">შეკვეთის მიწოდების ადგილი</label>
        <input type="text" name="address" id="address">

        <label for="privateNumber">პირადი ნომერი</label>
        <input type="number" name="privateNumber" id="privateNumber">

        <label for="name">საკონტაქტო პირის სახელი</label>
        <input type="text" name="name" id="name">

        <label for="surname">საკონტაქტო პირის გვარი</label>
        <input type="text" name="surname" id="surname">

        <label for="phoneNumber">ტელეფონი</label>
        <input type="number" name="phone" id="phoneNumber">

        <div class="country-city">
          <select name="country" id="country">
            <option value="georgia">საქართველო</option>
          </select>
          <select name="city" id="city">
            <option value="tbilisi">თბილისი</option>
          </select>
        </div>

        <label for="personalAdress">საცხოვრებელი მისამართი</label>
        <input type="text" name="personalAdress" id="personalAdress">

        <button>რეგისტრაცია</button>
      </form>
    </div>
    <div class="registration-rules">
      <h3>რეგისტრირებული მომხმარებლის უპირატესობები</h3>
      <ul>
        <li>თვალყურის დევნება განთავსებულ შეკვეთებზე</li>
        <li>გამარტივებული შესყიდვები</li>
        <li>სასურველი ნივთების დამახსოვრება</li>
      </ul>
    </div>
  </section>


  <!-- FOOTER -->
  <?php include_once './partials/footer.php' ?>
</body>

</html>