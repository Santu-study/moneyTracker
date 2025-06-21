# moneyTracker// Insert all registration data into your table (add columns as needed)
    $sql = "INSERT INTO data (username, password, gender, address, email, phone_no) 
            VALUES ('$username', '$password', '$gender', '$address', '$email', '$phone_no')";
    if (mysqli_query($conn, $sql)) {
        // Redirect to login page after successful registration
        header("Location: indexlogin.html");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }