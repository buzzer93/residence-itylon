
<?php
$array = ['firstname' => '', 'name' => '', 'email' => '', 'phone' => '', 'message' => '', 'firstnameError' => '', 'nameError' => '', 'emailError' => '', 'phoneError' => '', 'messageError' => '', 'isSuccess' => false];
$emailTo = 'residence.itylon@gmail.com';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $array['firstname'] = test_input($_POST['firstname']);
    $array['name'] = test_input($_POST['name']);
    $array['email'] = test_input($_POST['email']);
    $array['phone'] = test_input($_POST['phone']);
    $array['message'] = test_input($_POST['message']);
    $array['isSuccess'] = true;
    $emailText = '';
    $secret = '6Lc7HG8oAAAAAKiGNy8IXikN3nPlBDJu5Oo35L9H';
    $response = $_POST['g-recaptcha-response'];
    $request = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response";
    $get = file_get_contents($request);
    $decode = json_decode($get, true);

    if (empty($array['firstname'])) {
        $array['firstnameError'] = 'vous devez remplir ce champ';
        $array['isSuccess'] = false;
    } else {
        $emailText .= "Firstname: {$array['firstname']}\n";
    }

    if (empty($array['name'])) {
        $array['nameError'] = 'vous devez remplir ce champ';
        $array['isSuccess'] = false;
    } else {
        $emailText .= "Name: {$array['name']}\n";
    }

    if (!filter_var($array['email'], FILTER_VALIDATE_EMAIL)) {
        $array['emailError'] = "cet email n'est pas valide";
        $array['isSuccess'] = false;
    } else {
        $emailText .= "Email: {$array['email']}\n";
    }

    if (empty($array['phone'])) {
        $array['phoneError'] = 'vous devez remplir ce champ';
        $array['isSuccess'] = false;
    } else {
        $emailText .= "Phone: {$array['phone']}\n";
    }

    if (empty($array['message'])) {
        $array['messageError'] = 'vous devez remplir ce champ';
        $array['isSuccess'] = false;
    } else {
        $emailText .= "Message:\n {$array['message']}";
    }





    if ($array['isSuccess'] && $decode['success']) {
        $headers = "From: {$array['firstname']} {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
        mail($emailTo, 'Un message de votre site', $emailText, $headers);
        echo ('<h1>Votre message a bien été envoyé.</h1>');
    }
}




function test_input($data)
{
    // Extract URL without protocol from a string
    $extract_url_pattern = '/https?:\\/\\/(?:www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b(?:[-a-zA-Z0-9()@:%_\\+.~#?&\\/=]*)/';
    $asALink = preg_match_all($extract_url_pattern, $data, $matches);
    if ($asALink == !null) {
        error_log('link error');
        return false;
    } else {
        $data = trim((string) $data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}
?>