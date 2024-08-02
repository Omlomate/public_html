<?php

// Allow CORS
header("Access-Control-Allow-Origin: https://www.smitfoundation.org");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

if(isset($_REQUEST['contactForm'])){

    // Sanitize input
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $subject = htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8');
    $msg = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

    $message2 = '
    <table width="100%" cellspacing="0" cellpadding="20" border="0">
        <tbody>
            <tr>
                <td>
                    <table style="border:1px solid #ddd" align="center" width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
                        <tbody>
                            <tr>
                                <td>
                                    <table width="100%" cellspacing="0" cellpadding="0" bgcolor="#000">
                                        <tbody>
                                            <tr>
                                                <td style="padding:20px 30px" valign="center" height="88" bgcolor="#000">
                                                    <img title="SMIT Foundation" src="https://smitfoundation.org/assets/img/smitb.png" alt="SMIT Foundation" class="CToWUd" style="width:400px">
                                                </td>
                                                <td style="font-family:Georgia,serif;font-size:14px;color:#999;font-style:italic;border-bottom:1px solid #f5f5f5" valign="center" bgcolor="#F0F0F0"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-bottom:1px solid #eaebea">
                                    <div style="line-height:21px;font-size:14px;color:#444;padding:30px;font-family:Georgia,serif;background:white;border-top:1px solid #ccc">
                                        <p>Below is Contact Enquiry details:</p>
                                        <p>Name : ' . $name . '</p>
                                        <p>Email Id : ' . $email . '</p>
                                        <p>Subject : ' . $subject . '</p>
                                        <p>Message : ' . $msg . '</p>
                                        <p>Team - SMIT Foundation</p><br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:15px 30px;border-top:1px solid #fafafa;background:#f7f7f7;color:#888">
                                    Sent on ' . date('d-m-Y') . '. &nbsp;&nbsp;Have questions? Email to&nbsp; <a href="mailto:info@smitfoundation.org" target="_blank">info@smitfoundation.org</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>';

    $headers  = "From: SMIT Foundation <no-reply@smitfoundation.org>\n";
    $headers .= "X-Sender: SMIT Foundation <no-reply@smitfoundation.org>\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "X-Priority: 1\n"; // Urgent message!
    $headers .= "Return-Path: no-reply@smitfoundation.org\n"; // Return path for errors
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
    
    $to = 'info@smitfoundation.org';
    
    if (mail($to, "Enquiry on SMIT Foundation", $message2, $headers)) {
        $msg = "<span style='color:green;'>You have successfully registered your enquiry.</span>";
    } else {
        $msg = "<span style='color:red;'>It seems some error occurred. Please try again.</span>";
    }

    echo $msg;

    // Redirect to thank you page after displaying the message
    header('Location: thankyou.html');
    exit();
}
?>
