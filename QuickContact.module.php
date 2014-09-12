<?php



#-------------------------------------------------------------------------
# Module: QuickContact
# Version: 1.0
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2010 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
# The module's homepage is: http://dev.cmsmadesimple.org/projects/skeleton/
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------


#-------------------------------------------------------------------------

class QuickContact extends CMSModule
{
  
 
  function GetName()
  {
    return 'QuickContact';
  }
  
  function GetFriendlyName()
  {
    return $this->Lang('friendlyname');
  }


  function GetVersion()
  {
    return '1.0';
  }
  

  function GetHelp()
  {
    return $this->Lang('help');
  }

  function GetAuthor()
  {
    return 'SIWebsupport';
  }


  function GetAuthorEmail()
  {
    return 'jeff@siwebsupport.com';
  }
  

  function GetChangeLog()
  {
    return $this->Lang('changelog');
  }
  

  function IsPluginModule()
  {
    return true;
  }

  function HasAdmin()
  {
    return false;
  }


  function GetAdminSection()
  {
    return 'extensions';
  }

 
  function GetAdminDescription()
  {
    return $this->Lang('moddescription');
  }

 
  function VisibleToAdminUser()
  {
    return $this->CheckPermission('Use QuickContact');
  }
  
 
  function GetDependencies()
  {
    return array('Captcha'=>'0.4.5');
  }


  function MinimumCMSVersion()
  {
    return "1.11";
  }
  

  function MaximumCMSVersion()
  {
    return "2.0";
  }

 
  function SetParameters()
  {

  $this->RegisterModulePlugin();
   $this->RestrictUnknownParams();
	$this->CreateParameter('sendTo', 'email@email.com', $this->lang('helpSendTo'),false);
   $this->SetParameterType('sendTo',CLEAN_STRING);
     $this->SetParameterType('emailTo',CLEAN_STRING);
   $this->SetParameterType('name',CLEAN_STRING);
   $this->SetParameterType('email',CLEAN_STRING);
   $this->SetParameterType('subject',CLEAN_STRING);
   $this->SetParameterType('message',CLEAN_STRING);
   $this->SetParameterType('module_message',CLEAN_STRING);
   $this->SetParameterType('captcha_input',CLEAN_STRING);
   $this->SetParameterType('success',CLEAN_STRING);
   $this->SetParameterType('submit',CLEAN_STRING);

  }


  function InstallPostMessage()
  {
    return $this->Lang('postinstall');
  }

  function UninstallPostMessage()
  {
    return $this->Lang('postuninstall');
  }

 
  function UninstallPreMessage()
  {
    return $this->Lang('really_uninstall');
  }
  

}
?>
