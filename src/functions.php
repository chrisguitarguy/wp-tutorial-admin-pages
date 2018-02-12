<?php

/**
 * This file is part of chrisguitarguy/wp-admin-pages-tutorial
 *
 * Copyright (c) Christopher Davis <https://chrisguitarguy.com>. For full
 * license information see the LICENSE file included with this source code.
 */

!defined('ABSPATH') && exit;

function chrisguitarguy_adminpages_load()
{
    add_action('admin_init', 'chrisguitarguy_adminpages_add');
}

function chrisguitarguy_adminpages_add()
{
    add_menu_page(
        // page <title> tag, localize it like any other user-facing string
        __('Example Top-Level Page', 'chrisguitarguy-adminpages'),
        // text displayed in the menu, localize it
        __('Example Top', 'chrisguitarguy-adminpages'),
        // what capability is required to access this? `manage_options` would be
        // an admin-level user.
        'manage_options',
        // page url slug, prefix like anything else
        'chrisguitarguy-adminpages-toplevel',
        // callback, this is called to display the actual page
        'chrisguitarguy_adminpages_callback',
        // this is the icon URL, we'll skip this, but it can be used to
        // show a custom ICON in the menu.
        '',
        // position, where in the menu should this page be displayed?
        // higher number === lower on the page, can use ints or floats here
        1000
    );

    add_submenu_page(
        // the page under which the submenu page should be nested
        'options-general.php',
        // page <title> tag, localize it like any other user-facing string
        __('Example Submenu Page', 'chrisguitarguy-adminpages'),
        // text displayed in the menu, localize it
        __('Example Submenu', 'chrisguitarguy-adminpages'),
        // what capability is required to access this? `manage_options` would be
        // an admin-level user.
        'manage_options',
        // page url slug, prefix like anything else
        'chrisguitarguy-adminpages-submenu',
        // callback, this is called to display the actual page
        'chrisguitarguy_adminpages_callback'
    );

    // Under Pages
    add_submenu_page(
        'edit.php?post_type=page',
        __('Example Post Type Page', 'chrisguitarguy-adminpages'),
        __('Example Type', 'chrisguitarguy-adminpages'),
        'manage_options',
        'chrisguitarguy-adminpages-type',
        'chrisguitarguy_adminpages_callback'
    );
    // Under Tools
    add_management_page(
        __('Example Management Page', 'chrisguitarguy-adminpages'),
        __('Example Manage', 'chrisguitarguy-adminpages'),
        'manage_options',
        'chrisguitarguy-adminpages-management',
        'chrisguitarguy_adminpages_callback'
    );
    // Under Settings
    add_options_page(
        __('Example Options Page', 'chrisguitarguy-adminpages'),
        __('Example Options', 'chrisguitarguy-adminpages'),
        'manage_options',
        'chrisguitarguy-adminpages-options',
        'chrisguitarguy_adminpages_callback'
    );
    // Under Appearance
    add_theme_page(
        __('Example Theme Page', 'chrisguitarguy-adminpages'),
        __('Example Theme', 'chrisguitarguy-adminpages'),
        'manage_options',
        'chrisguitarguy-adminpages-theme',
        'chrisguitarguy_adminpages_callback'
    );
    // Under Themes
    add_plugins_page(
        __('Example Plugin Page', 'chrisguitarguy-adminpages'),
        __('Example Plugin', 'chrisguitarguy-adminpages'),
        'manage_options',
        'chrisguitarguy-adminpages-plugin',
        'chrisguitarguy_adminpages_callback'
    );
    // Under Users
    add_users_page(
        __('Example User Page', 'chrisguitarguy-adminpages'),
        __('Example User', 'chrisguitarguy-adminpages'),
        'manage_options',
        'chrisguitarguy-adminpages-user',
        'chrisguitarguy_adminpages_callback'
    );
}

function chrisguitarguy_adminpages_callback()
{
    include __DIR__.'/../views/page.php';
}
