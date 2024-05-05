<?php
    if(isset($_POST['orderButton'])){
        $food = $_POST['menu'];
        $quantity = $_POST['quantity'];
        $cash = $_POST['cash'];
        
        $foodPrice = 0;
        
        switch($food){
            case 'Milktea':
                $foodPrice = 49;
                break;
            case 'Coffee':
                $foodPrice = 100;
                break;
            case 'Frappe':
                $foodPrice = 90;
                break;
        }
        
        $totalCost = $foodPrice * $quantity;
        $change = $cash - $totalCost;
        
        if($change >= 0){
            echo "<h2>THANK YOU FOR ORDERING IN ARJOSH'S CAFE!</h2>";
            echo "<h3>The total cost is: " . $totalCost . "</h3>";
            echo "<h3>Your change is: " . $change . "</h3>";
        }else{
            echo "<h2>YOU NEED TO PAY THE EXACT AMOUNT OF CASH.</h2>";
            $missingCash = $change - $change - $change;
            echo "<h2>You are lacking " . $missingCash ." PHP. </h2>";
        }
    }
?>