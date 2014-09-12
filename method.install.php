<?php
#-------------------------------------------------------------------------
# Module: Skeleton - a pedantic "starting point" module
# Version: 1.5, SjG
# Method: Install
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2008 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
# The module's homepage is: http://dev.cmsmadesimple.org/projects/skeleton/
#
#-------------------------------------------------------------------------

/**
 * For separated methods, you'll always want to start with the following
 * line which check to make sure that method was called from the module
 * API, and that everything's safe to continue:
 */ 
if (!isset($gCms)) exit;


// create a preference
//$this->SetPreference("allow_add", true);

// register an event that the Skeleton will issue. Other modules
// or user tags will be able to subscribe to this event, and trigger
// other actions when it gets called.
//$this->CreateEvent( 'OnSkeletonPreferenceChange' );

// put mention into the admin log
$this->Audit( 0, 
	      $this->Lang('friendlyname'), 
	      $this->Lang('installed', $this->GetVersion()) );
	      
?>