<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* login page */
$lang['page_title']                 = 'Page de Connexion';
$lang['authentication']             = 'Authentification';
$lang['OK']                         = 'OK';
$lang['sign_in_account_brand']      = 'INSCRIPTION MARQUE';
$lang['sign_in_account_retailer']   = 'INSCRIPTION DISTRIBUTEUR';
$lang['email']                      = 'Mail';
$lang['password']                   = 'Mot de Passe';
$lang['login_with_facebook']        = 'Se connecter avec Facebook';
$lang['member_access']              = 'Accès Membre';
$lang['forgot_password']            = 'mot de passe oublié?';
$lang['the_agent_menu']             = 'Menu The agent';
$lang['brands']                     = 'Marques';
$lang['retailers']                  = 'Distributeurs';
$lang['stepone']                    = 'Step-One';
$lang['team']                       = "L'équipe";
$lang['contact']                    = 'Contact';
$lang['toggle_navigation']          = 'Toggle navigation';
$lang['password_must_provide']      = 'Vous devez fournir un %s.';

// Account verification
$lang['aauth_email_verification_subject']   = 'Vérification du compte';
$lang['aauth_email_verification_code']      = 'Votre code de vérification est: ';
$lang['aauth_email_verification_code_sent'] = 'Un code de vérification a été envoyé à votre adresse mail.';
$lang['aauth_email_verification_link']      = " Vous pouvez également cliquer sur (ou copier-coller) le lien suivant\n\nhttp://yourdomain/account/verification/";

// Password reset
$lang['aauth_email_reset_subject'] = 'Regénérer le Mot de Passe';
$lang['aauth_email_reset_link']    = "Pour regénérer cliquer sur (ou copier-coller dans la barre d'adresse du navigateur) le lien suivant:\n\nhttp://yourdomain/account/reset_password/";

// Password reset success
$lang['aauth_email_reset_success_subject']      = 'Le Mot de Passe a été regénéré !';
$lang['aauth_email_reset_success_new_password'] = 'Votre Mot de passe a bien été regénéré. Votre nouveau Mot de Passe est : ';


/* Error Messages */

// Account creation errors
$lang['aauth_error_email_exists']      = "un compte existe déjà avec cette adressse. Si vous avez oublié votre Mot de Passe, Vous pouvez cliquer sur le lien ci-dessous.";
$lang['aauth_error_username_exists']   = "un compte existe déjà avec cette adressse. Si vous avez oublié votre Mot de Passe, Vous pouvez cliquer sur le lien ci-dessous.";
$lang['aauth_error_email_invalid']     = 'Adresse Mail invalide';
$lang['aauth_error_password_invalid']  = 'Mot de Passe invalide';
$lang['aauth_error_username_invalid']  = 'Adresse Mail invalide';
$lang['aauth_error_username_required'] = 'Adresse Mail obligatoire';

// Access errors
$lang['aauth_error_no_access']               = "Désolé vous n'avez pas accès à la page demandée";
$lang['aauth_error_login_failed']            = "Adresse mail ou Mot de Passe erroné";
$lang['aauth_error_login_attempts_exceeded'] = "Vous avez effectué trop d'essais. Votre compte est maintenant bloqué";
$lang['aauth_error_ recaptcha_not_correct']   = "Désolé, le texte reCAPTCHA renseigné est incorrect";


// Misc. errors
$lang['aauth_error_no_user']              = "L'utilisateur n'existe pas.";
$lang['aauth_error_account_not_verified'] = "Votre compte n'a pas été vérifié. veuillez consulter votre boîte mail pour activer votre compte.";
$lang['aauth_error_no_group']             = "Le groupe n'existe pas.";
$lang['aauth_error_self_pm']              = "Vous ne pouvez vous envoyez vous-même un message.";
$lang['aauth_error_no_pm']                = "Message privé perdu.";


/* Info messages */
$lang['aauth_info_already_member'] = "L'utilisateur est déjà membre d'un groupe";
$lang['aauth_info_group_exists']   = 'Ce nom de Groupe existe déjà';
$lang['aauth_info_perm_exists']    = 'Ce nom de permission existe déjà';
