<p>
    Bryan Sanchez, IT202, Unit 12 In-Class Exercise, bs768@njit.edu, 11/19
</p>
<?php
$make = $_GET['make'];
switch ($make) {
   case "buick":
       echo "Enclave,Lacrosse,Regal";
       break;
   case "chevy":
       echo "Camero,Corvette,Impala";
       break;
   case "dodge":
       echo "Challenger,Charger,Viper";
       break;
   case "ford":
       echo "Fusion,Mustang,Taurus";
       break;
    case "toyota":
       echo "Camry,Corolla,Prius";
}