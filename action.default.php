<?php

if (!isset($gCms)) exit;

if($params['success']=='yes'){

	$_SESSION['senderName']="";
	$_SESSION['email']="";
	$_SESSION['subject']="";
	$_SESSION['message']="";
	echo $this->CreateFrontEndLink($id,$returnid,'default','Your email was sent. Click here to send another message',array());
	}
	else
	{

	$sendTo=$params['sendTo'];
	$captcha = &$this->getModuleInstance('Captcha');


	$this->smarty->assign('form_start',$this->CreateFrontendFormStart($id,$returnid,'sendEmail','post','multipart/form-data',true,'class=contact'));
	$this->smarty->assign('sendTo', $this->CreateInputHidden($id, 'sendTo',$sendTo));
	$this->smarty->assign('name', $this->CreateInputText($id, 'name', $_SESSION['senderName'], 30,'','class=span3'));
	$this->smarty->assign('email', $this->CreateInputText($id, 'email',$_SESSION['email'], 30,'','class=span3'));
	$this->smarty->assign('subject', $this->CreateInputText($id, 'subject',$_SESSION['subject'], 30));
	$this->smarty->assign('message', $this->CreateTextArea(false, $id,$_SESSION['message'],'message','','','','','80','8'));
	$this->smarty->assign('captcha',$captcha->getCaptcha());
	$this->smarty->assign('captcha_input',$this->CreateInputText($id,'captcha_input','',15));
	$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', 'Submit'));
	$this->smarty->assign('form_end', $this->CreateFormEnd());

	if (isset($params['module_message'])){
	   $this->smarty->assign('module_message',$params['module_message']);
	}
	else
	{
	$this->smarty->assign('module_message','');
	}
	echo $this->ProcessTemplate('display.tpl');
}
?>