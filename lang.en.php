<?php
/* 
------------------
Language: English
------------------
*/

//$lang = array();

$lang = [
	/* ******************************************************************
		LANGS
	** ***************************************************************** */
	'GOTO'	=> "Go to",
	

	'LANG_CHOOSE'	=> "Language",
	'FR'		=> "French",
	'EN'		=> "English",
	'PT'		=> "Portuguese",
	'SV'		=> "Swedish",
	'PL'		=> "Polish",

	/* ******************************************************************
		MAINMENU
	** ***************************************************************** */
	'MM_HOME'		=> "Home",
	'MM_COMMUNITY'	=> "Community",
	'MM_NEWS'		=> "News",
	'MM_STATUS'		=> "Serverlist",
	'MM_DOWNLOADS'	=> "Downloads",

	/* ******************************************************************
		PAGE CONTENT
	** ***************************************************************** */
	'PAGE_HOME' 			=> "Welcome to H1EMU",
	'PAGE_DOWNLOADS'		=> "Downloads",
	'PAGE_COCKPIT_AUTH' 	=> "Login",
	'PAGE_HOME_ABOUT'		=> "About the game",
	'PAGE_HOME_ABOUT_TEXT'	=> "Together face In. His called Two lesser given divide. From, cattle saying be was doesn't set. Creature bearing life wherein dominion in saying them moveth first have. Under set darkness over light beast face fill from in after isn't first own all fowl itself evening also, grass doesn't Sea. Created very likeness herb wherein from lesser was bring brought above. Bearing tree a grass very.",

	/* ******************************************************************
		STATUS PAGE
	** ***************************************************************** */

	'PAGE_STATUS'			=> "Serverlist",
	'PAGE_SERVER_STATUS'	=> "Server Details",
	
	'SERVER_LOGINAVAILABLE'	=> "Login Available ?",
	'SERVER_COQUALITY'		=> "Stability",
	'SERVER_POP'			=> "Pop",

	'PAGE_OFFICIALS_SERVERS'		=> "Officials Servers",
	'PAGE_COMMUNITY_SERVERS'		=> "Community Servers",

	/* ******************************************************************
		COCKPIT
	** ***************************************************************** */
	'COCKPIT_TITLE'		=> "Login required",
	'COCKPIT_MYACCOUNT'	=> "My account",
	'COCKPIT_LOGOUT'	=> "Logout",

	// MENU
	'COCKPIT_HOME'	=> "Home",
	'COCKPIT_FORUMPOSTS'	=> "Forum Activity",
	'COCKPIT_SECURITY'	=> "Security",

	// TAB ACCOUNT TITLES PAGES
	'COCKPIT_TITLE_PAGE_HOME'		=> "Account Details",
	'COCKPIT_TITLE_PAGE_FORUMSPOST'	=> "Forum Activity",
	'COCKPIT_TITLE_PAGE_SECURITY'	=> "Security",

	'COCKPIT_TITLE_SECURITY_PASSWORD'	=> "Change my Password",

	// Menu Sub(DL)
	'DL_M_CHOOSE'		=> "Please choose version",
	'DL_M_APP'		=> "Application",
	'DL_M_MANUAL'	=> "Separated Binaries",
	/* ******************************************************************
		MAINMENU
	** ***************************************************************** */

	'ERROR_PAGENOTFOUND'		=> "This page no longer exists",
	'ERROR_PAGEACCESSDENIED'	=> "This page is disabled. Please try again later...",

	'ERROR_REQUIRED_LOGIN'	=> "Login is required to perform actions here.",
	'ERROR_INDEV'	=> "This website is under development, please be patient.",

	'ERROR_PAGENOTFULL'	=> "This page is not finished, links are not fully working !",
	'ERROR_NOSERVERS'	=> "No server here. Do you want to host a server ?",

	'ERROR_INFOSETUP'	=> "A full documentation can be found <a class='text-danger' href='//wiki.h1emu.com/'>here</a>.",
	'ERROR_USELASTRELEASE' => "Actual Project version -> ".$conf['EMU_RELEASE_VERSION']."",
	/* ******************************************************************
		INPUTS PLACEHOLDERS
	** ***************************************************************** */
	'INPUT_USERNAME'	=> "Username",
	'INPUT_PASSWORD'	=> "Password",

	'SLIDER_HOMETEXT'	=> "H1Z1 EMULATOR",

	/* ******************************************************************
		DATE SYSTEM
	** ***************************************************************** */
	'DATE_SECOND'	=> "Second",
	'DATE_MINUTES'	=> "Minute",
	'DATE_HOUR'		=> "Hour",
	'DATE_DAYS'		=> "Jour",
	'DATE_MONTH'	=> "Month",
	'DATE_YEAR'		=> "Year",


	'BACK2'	=> "Back",
	'BACK'	=> "Back to home",

	'HOST_MSGE'	=> "Need a performance host ? Use this service <a href=''>".($conf['hostperf']) ? $conf['hostperf']:"NoHostDefined"."</a>",

];
return $lang;
?>