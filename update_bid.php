<?php
    include('connect.php');
    
    if(isset($_POST['product_id']) && isset($_POST['new_bid'])) {
        $product_id = $_POST['product_id'];
        $new_bid = $_POST['new_bid'];

        // get the username of the logged-in user from the other table in the database
        session_start();
        $username = $_SESSION['username'];
        $user_query = "SELECT * FROM users WHERE username='$username'";
        $user_result = mysqli_query($conn, $user_query);
        $user_row = mysqli_fetch_assoc($user_result);
        $last_user_to_bid = $user_row['username'];

        // update the bid and last_user_to_bid in the products table
        $query = "UPDATE products SET bid='$new_bid', last_user_to_bid='$last_user_to_bid' WHERE id='$product_id'";
        $result = mysqli_query($conn, $query);

        // redirect back to the index page
        header("Location: index.php");
        exit();
    }
?>