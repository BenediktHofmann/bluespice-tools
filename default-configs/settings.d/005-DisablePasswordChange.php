<?php

/* Disable possibility to change password
 * Maybe needed with ldap or other SSO installations
 */

function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {

  global $wgUser;

  if ( $wgUser->mId != 0 ) {
    return false;
  }

  $script = "<style type=\"text/css\">\n";
  $script .= "div#userloginForm div.mw-form-related-link-container { display: none; }\n";
  $script .= "</style>\n";

  $out->addHeadItem("jsonTree script", $script);

  return true;

}

$wgPasswordResetRoutes = false;

$wgHooks['SpecialPage_initList'][] = function ( &$list ) {
  unset( $list['ChangeCredentials'] );
  return true;
};

$wgHooks['GetPreferences'][] = function ( $user, &$preferences ) {
  unset( $preferences['password']) ;
  return true;
};

$wgExtensionFunctions[] = function() {
  global $wgHooks;
  $wgHooks['MakeGlobalVariablesScript'][] = 'ChangeUserManagerList';
};

function ChangeUserManagerList ( &$vars, $out ) {
  $vars['bsTaskAPIPermissions']['usermanager']['editPassword'] = false;
  return true;
}