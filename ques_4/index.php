
<form method="post" action="">
    Enter number
    <input type="text" name="num">
    <input type="submit" value="Submit">
</form>


<?php
if(isset($_POST['num'])){
    $n=(int)$_POST['num'];
    $is_prime=true;
   
    if ($n == 0 || n == 1) {
        $is_prime = false;
    }

    for ($i = 2; $i <= n/2; ++$i) {
    if ($n % $i == 0) {
      $is_prime = false;
      break;
    }

    if ($is_prime)
    echo " is a prime number";
  else
    echo " is not a prime number";
  }
}

