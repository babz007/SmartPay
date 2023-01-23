<?php
     if (isset($_POST['submit'])) {


        $result1 = $_POST['num1'];
        $result2 = $_POST['num2'];
        $operator = $_POST['operator'];
       


        //$grossEarnings = $result1 * $result2;



        switch ($operator) {

           case "None":
               echo "you need to select a method";
           break;
           case "Add":
               echo $result1 + $result2;
           break;
           case "Subtract":
               echo $result1 - $result2;
           break;
           case "Multiply":
                $grossEarnings= $result1 * $result2;
                echo $grossEarnings;
           break;
           case "Divide":
               echo $result1 / $result2;
           break;

        }

        //taxes
        $fit = rand(1000,5000);
        echo "<br>\n";
        echo $fit."this is the fit";
        echo "<br>";
        echo "<br>";

        $FeesandTolls = rand(1000,5000);
        echo $FeesandTolls."this is the Fees and Tolls";
        echo "<br>";
        echo "<br>";

        $sit = rand(1000,5000);
        echo $sit."this is the sit";
        echo "<br>";
        echo "<br>";

        $medicare = rand(1000,5000);
        echo $medicare."this is the medicare";
        echo "<br>";
        echo "<br>";

        $insurance = rand(1000,5000);
        echo $insurance."this is the insurance";
        echo "<br>";
        echo "<br>";

        $fit = rand(1000,5000);
        echo $fit."this is the fit";
        echo "<br>";
        echo "<br>";





        $taxes = $fit + $FeesandTolls + $sit + $medicare + $insurance + $fit;
        echo "<br>";
        echo "<br>";
        echo $taxes."this is total taxes";

        //contributions
        $companyIncentive = rand(1, 100);
        $reimbursement = rand(1,100);


        //netpay

        $netpay = $grossEarnings - $taxes;
        $bonusPay = rand(100,1000);
        echo "<br>";
        echo "<br>";
        echo $netpay."this is the netpay";

        //checkamount
        $checkamount = $netpay + $bonusPay;
        echo "<br>";
        echo "<br>";
        echo $checkamount."this is check amount";














     }
            












?>