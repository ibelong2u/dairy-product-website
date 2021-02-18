<?

$m_FormMail .= "\nName: ";
$m_FormMail .= $_POST["name"];
$m_FormMail .= "\nPhone: ";
$m_FormMail .= $_POST["phone"];
$m_FormMail .= "\nEmail: ";
$m_FormMail .= $_POST["email"];
$m_FormMail .= "\n\nMessage: ";
$m_FormMail .= $_POST["message"];

$headers = "From: " . $_POST["name"] . " <" . $_POST["email"] . ">";

mail("info@honeycreekcreamery.com", "Website Contact Form", $m_FormMail, $headers );
header("Location: contact.html?sent=1");

?>