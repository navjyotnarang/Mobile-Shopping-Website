<?php
 include 'includes/header.php';
?>
<?php
$useremail=$_SESSION['email'];
$sql="SELECT * FROM users WHERE email='$useremail'";
$query_run=mysqli_query($con,$sql);
$row =mysqli_fetch_array($query_run);
$username=$row['name'];
$phonenumber=$row['contact'];
$addresss=$row['address'];
$city=$row['city'];
?>
<?php
$itemsid=$_GET['itemsid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="payment.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <div class="container">
      <div class="payment">
        <div class="payment__title">
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<h1>PAYMENT</h1>
        </div>
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title">
              <i class="icon icon-user"></i>PERSONAL INFORMATION
            </div>
            <form>
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">CARD NUMBER
                    </div>
                    <input type="text" class="input txt text-validated" placeholder="XXXX-XXXX-XXXX" />
                  </div>
                </div>
                <div class="row">
                  <div class="field small">
                    <div class="title">Expiry Date
                    </div>
                    <select class="input ddl" placeholder="MM">
                      <option selected>MM</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                    <select class="input ddl">
                    <option selected>YYYY</option>
                      <option>2021</option>
                      <option>2022</option>
                      <option>2023</option>
                      <option>2024</option>
                      <option>2025</option>
                      <option>2026</option>
                      <option>2027</option>
                      <option>2028</option>
                      <option>2029</option>
                      <option>2030</option>
                      <option>2031</option>
                    </select>
                  </div>
                  <div class="field small">
                    <div class="title">CVV Code
                      <span class="numberCircle">?</span>
                    </div>
                    <input type="text" class="input txt" placeholder="***"/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Name on Card
                    </div>
                    <input type="text" class="input txt" placeholder="ENTER YOUR NAME"/>
                  </div>
                </div>
              </div>
            </form>
          </div>
          
          <div class="payment__shipping">
            <div class="payment__title">
              <i class="icon icon-plane"></i> SHIPPING INFORMATION
            </div>
            <div class="details__user">
              <div class="user__name">
                  <?php
                  echo $username;
                  ?>
                  <br>
                  <?php
                  echo $phonenumber;
                  ?>
                 </div>
              <div class="user__address">
              <?php
                  echo $addresss;
                  ?>
                <br>
                <?php
                  echo $city;
                  ?>
            </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="actions">
     <form action = "success.php" method ="POST">
      <input class="btn action__submit" name="Pay" type="submit" value = "Place your order">
     </form>
          <i class="icon icon-arrow-right-circle"></i>
        </a>
        <a href="#" class="backBtn">Go Back to Shop</a>

      </div>
  </section>
  </div>
</body>
</html>
