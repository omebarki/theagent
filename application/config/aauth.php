<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------
  |  Aauth Config
  | -------------------------------------------------------------------
  | A library Basic Authorization for CodeIgniter 2.x
 */


// Config variables

$config['aauth'] = array(
    'login_page' => '/aauth/Aauth/',
    'login_page_bck' => '/aauth/Bauth/',
    // if user don't have permisssion to see the page he will be
    // redirected the page spesificed below
    'no_permission' => '/aauth/Aauth/',
    'no_permission_bck' => '/aauth/Bauth/',
    //name of admin group
    'admin_group' => 'admin',
    //name of default group, the new user is added in it
    'default_group' => 'default',
    // public group , people who not logged in
    'public_group' => 'public',
    // The table which contains users
    'users' => 'aauth_users',
    // the group table
    'groups' => 'aauth_groups',
    // 
    'user_to_group' => 'aauth_group_has_user',
    // roles
    'roles' => 'aauth_roles',
    // roles to group
    'role_to_group' => 'aauth_group_has_role',
    // roles to user
    'role_to_user' => 'aauth_user_has_role',
    // permitions
    'perms' => 'aauth_perms',
    // perms to group
    'perm_to_group' => 'aauth_group_has_perm',
    // perms to user
    'perm_to_user' => 'aauth_user_has_perm',
    // perms to role
    'perm_to_role' => 'aauth_role_has_perm',
    // pm table
    'pms' => 'aauth_pms',
    // system variables
    'system_variables' => 'aauth_system_variables',
    // user variables
    'user_variables' => 'aauth_user_variables',

    // remember time
    'remember' => ' +3 days',

    // pasword maximum char long (min is 4)
    'max' => 13,

    // non alphanumeric characters that are allowed in a name
    'valid_chars' => array(' ', '\''),

    // ddos protection,
    //if it is true, the user will be banned temporary when he exceed the login 'try'
    'ddos_protection' => true,

    'recaptcha_active' => false, 
    'recaptcha_login_attempts' => 4,
    'recaptcha_siteKey' => '', 
    'recaptcha_secret' => '', 

    // login attempts time interval
    // default 20 times in one hour
    'max_login_attempt' => 10,

    // to register email verifitaion need? true / false
    'verification' => false,

    // system email.
    'email' => 'contact@theagent.com',
    'name' => 'Contact THE AGENT'
    
);


/* End of file aauth.php */
/* Location: ./application/config/aauth.php */
