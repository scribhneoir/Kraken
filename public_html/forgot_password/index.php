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

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
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

        $mail->Username = 'krakensocialmusiclibrary@gmail.com';
        $mail->Password = 's3amonst3r';

        try {
            $mail->setFrom('krakensocialmusiclibrary@gmail.com', 'KrakenSML');
            $mail->addAddress("$email", "$first_name");
            $mail->Subject = 'Forgot Password';
            $mail->IsHTML(true);
            $mail->AddEmbeddedImage('../img/icon.png', 'icon', 'icon.png');
            $mail->Body = "<h1>Test 1 of PHPMailer html</h1>
                <p>This is a test picture: <img src=\"cid:icon\" /></p>";
            $mail->AltBody="We heard you forgot your password!\nDon't sweat it; here is a temporary one: " . $password;
            $mail->send();
        }
        catch (Exception $e){
            echo $e->errorMessage();
        }
        catch (\Exception $e){
            echo $e->getMessage();
        }

        try {
            $sql = "UPDATE User
                SET Password = '$password'
                WHERE Email = '$email'";
            $conn->exec($sql);
            header("Location: ../index.php");
            exit;
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        header("Location: ../");
    }
    $conn = null;

    $title = "Kracken - Forgot Password";
    $pathChange = "../";
    $smarty->assign('title', $title);
    $smarty->assign('pathChange', $pathChange);
    $smarty->display('forgot_password.tpl');
?>