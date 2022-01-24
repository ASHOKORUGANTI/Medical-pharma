<?php
session_start();

$con=mysqli_connect("localhost","root","","register");

if(mysqli_connect_error()){
    echo "<script>
    alert('cannot connect to database');
    window.location.href='mycart.php';
    </script>";
    exit();
}

if(isset($_POST['checkout_full']))
{
    $query1="INSERT INTO `ordermanager`(`full_name`, `email`, `full_address`, `full_country`, `full_city`, `full_state`, `full_pin`, `full_number`) VALUES ('$_POST[full_name]','$_POST[email]','$_POST[full_address]','$_POST[full_country]','$_POST[full_city]','$_POST[full_state]','$_POST[full_pin]','$_POST[full_number]')";
    if(mysqli_query($con,$query1))
    {
        $Order_id=mysqli_insert_id($con);
        $query2="INSERT INTO `userorder`(`Order_id`, `item_name`, `item_quantity`, `item_price`) VALUES (?,?,?,?)";
        $stmt=mysqli_prepare($con,$query2);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt,"isii",$Order_id,$item_name,$item_quantity,$item_price);
            $_SESSION['confirm']=$Order_id;
            foreach($_SESSION["shopping_cart"] as $key => $values)
            {
                $item_name=$values["item_name"];
                $item_quantity=$values["item_quantity"];
                $item_price=$values["item_price"];
                mysqli_stmt_execute($stmt);
            }
            unset($_SESSION["shopping_cart"]);
            echo "<script>
            alert('Order placed');
            window.location.href='confirm.php';
            </script>";
        }else{
            echo "<script>
            alert('SQL Query prepare ERROR');
            window.location.href='mycart.php';
            </script>";
        }
    }
    else{
        echo "<script>
    alert('SQL ERROR');
    window.location.href='mycart.php';
    </script>";
    }
}

?>