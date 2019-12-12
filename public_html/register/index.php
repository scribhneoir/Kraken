<?php
    include '../../private_html/config.php';
    include '../../private_html/db.config.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../libs/phpMailer/src/Exception.php';
    require '../libs/phpMailer/src/PHPMailer.php';
    require '../libs/phpMailer/src/SMTP.php';

    if(isset($_POST['email'])) {
        $n=10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        $salt = "";
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $salt .= $characters[$index];
        }

        $password = $randomString;

        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
        }

        $mail = new PHPMailer(TRUE);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';

        /* Username (email address). */
        $mail->Username = 'krakensocialmusiclibrary@gmail.com';

        /* Google account password. */
        $mail->Password = 's3amonst3r';

        /* Open the try/catch block. */
        try {
            /* Set the mail sender. */
            $mail->setFrom('krakensocialmusiclibrary@gmail.com', 'KrakenSML');

            /* Add a recipient. */
            $mail->addAddress("$email", "$first_name");

            /* Set the subject. */
            $mail->Subject = 'Welcome to Kraken!';

            /* Set the mail message body. */
            $mail->Body = "Thank you for registering with Kraken!\nHere is your temporary password: " . $password;

            /* Finally send the mail. */
            $mail->send();
        }
        catch (Exception $e)
        {
            /* PHPMailer exception. */
            echo $e->errorMessage();
        }
        catch (\Exception $e)
        {
            /* PHP exception (note the backslash to select the global namespace Exception class). */
            echo $e->getMessage();
        }


        try {
            $sql = "SELECT Email FROM User WHERE email = :email";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

        $password = md5($password . $salt);
        if ($stmt->rowCount() == 0) {
            try {
                $sql = "INSERT INTO User (Password,Salt,Email,First_Name,Last_Name,Gender) VALUES ('$password','$salt','$email','$first_name','$last_name','$gender')";
                $conn->exec($sql);
                header("Location: ../index.php");
                exit;
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }else{

            echo "<script type='text/javascript'> window.onload = function(){ alert('There is already an account with that Email. Please use another Email.');}</script>";

        }
    }
    $conn = null;
    
    $title = "Kracken - Register";
    $pathChange = "../";
    $smarty->assign('title', $title);
    $smarty->assign('pathChange', $pathChange);
    $smarty->display('register.tpl');
?>