<?php
    session_start();
    // Change this to your connection info.
    $DATABASE_HOST = '10.4.14.71';
    $DATABASE_USER = 'mysql_user';
    $DATABASE_PASS = 'Hum1ll@d3r0';
    $DATABASE_NAME = 'humilladero';
    // Try and connect using the info above.
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if ( mysqli_connect_errno() ) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    // Now we check if the data from the login form was submitted, isset() will check if the data exists.
    if ( !isset($_POST['username'], $_POST['password']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
    }
    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($stmt = $con->prepare('SELECT * FROM tbl_usuarios WHERE usr_login = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($usr_login,$password,$nombre,$acceso_agenda,$acceso_archivo,$acceso_urbanismo,$acceso_personal,$acceso_calendario);
            $stmt->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if ($_POST['password'] === $password) {
                // Verification success! User has logged-in!
                // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['username'] = $usr_login;
                $_SESSION['nombre'] = $nombre;
                $_SESSION['acceso_agenda'] = $acceso_agenda;
                $_SESSION['acceso_archivo'] = $acceso_archivo;
                $_SESSION['acceso_personal'] = $acceso_personal;
                $_SESSION['acceso_urbanismo'] = $acceso_urbanismo;
                $_SESSION['acceso_calendario'] = $acceso_calendario;
                header('Location: home.php');
            } else {
                // Incorrect password
                header('Location: ../index.html');
            }
        } else {
            // Incorrect username
            header('Location: ../index.html');
        }

        $stmt->close();

    }
    
?>