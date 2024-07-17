<?php
session_start();

// Extract POST data
extract($_POST);

// Include configuration file
require('includes/config.php');

// Check if the form is submitted
if (isset($submit)) {
    // Store address and phone in session variables
    $_SESSION['address'] = $address;
    $_SESSION['phone'] = $phone;

    // Get user ID from session
    $uid = $_SESSION['uid'];

    // Prepare SQL query to insert shipping details
    $query = "INSERT INTO shipping_details(name, address, city, state, phone, u_id) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare statement
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sssssi", $name, $address, $city, $state, $phone, $uid);

        // Execute statement
        mysqli_stmt_execute($stmt);

        // Close statement
        mysqli_stmt_close($stmt);

        // Redirect to payment details page
        header("Location: payment_details.php");
        exit();
    } else {
        // Handle errors
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head.inc.php"); ?>
</head>
<body>
    <!-- Start header -->
    <div id="templatemo_container">
        <div id="templatemo_menu">
            <ul>
                <?php include("includes/menu.inc.php"); ?>
            </ul>
        </div> <!-- end of menu -->

        <div id="logo-wrap">
            <div id="logo">
                <?php include("includes/logo.inc.php"); ?>
            </div>
        </div>

        <table align="center">
            <form id="checkout" method="POST" action="checkout.php">
                <tr>
                    <td><p class="contact"><label for="name">Name</label></p></td>
                    <td><input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"></td>
                </tr>
                <tr>
                    <td><p class="contact"><label for="address">Address</label></p></td>
                    <td><textarea id="address" name="address" placeholder="Address" required="" cols="55" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><p class="contact"><label for="city">City</label></p></td>
                    <td>
                        <select name="city">
                            <option value="surat">Surat</option>
                            <option value="rajkot">Rajkot</option>
                            <option value="vapi">Vapi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><p class="contact"><label for="state">State</label></p></td>
                    <td>
                        <select name="state">
                            <option value="gujarat">Gujarat</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><p class="contact"><label for="phone">Mobile phone</label></p></td>
                    <td><input id="phone" name="phone" placeholder="Phone number" required="" type="text"></td>
                </tr>
                <tr>
                    <td><button class="button" name="submit" id="submit" tabindex="5">Confirm & Proceed</button></td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>
