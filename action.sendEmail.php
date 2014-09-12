<?PHP

if (!isset($gCms)) exit;

//if an of the fields are blank send them back.

$isError=false;
$module_message="";
$sendTo=$params['sendTo'];
$senderName=$params['name'];
$email=$params['email'];
$subject=$params['subject'];
$message=$params['message'];

$_SESSION['senderName']=$senderName;
$_SESSION['email']=$email;
$_SESSION['subject']=$subject;
$_SESSION['message']=$message;


if($sendTo=="" || $senderName== "" || $email=="" || $subject=="" || $message==""){
	$module_message="All Fields are Required!...";
	$this->RedirectForFrontEnd($id, $returnid, 'default', array('module_message'=>$module_message));
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$module_message="The email you entered is not valid...";
	$this->RedirectForFrontEnd($id, $returnid, 'default', array('module_message'=>$module_message));
}


$captcha = &$this->getModuleInstance('Captcha');
if ($captcha->checkCaptcha($params['captcha_input']) == FALSE) { 
	$module_message="Image did not match..please try again...";
	$this->RedirectForFrontEnd($id, $returnid, 'default', array('module_message'=>$module_message));
}


$cmsmailer=& $this->GetModuleInstance('CMSMailer');		
$cmsmailer->AddAddress($sendTo,$sendTo);
$cmsmailer->SetBody($message);
$cmsmailer->IsHTML(true);
$cmsmailer->SetSubject($subject);
$cmsmailer->SetFrom($email);
$cmsmailer->SetFromName($senderName);
$cmsmailer->Send();
$module_message.="Email Sent Successfully";


$this->RedirectForFrontEnd($id, $returnid, 'default', array('success'=>'yes','module_message'=>$module_message));

?>