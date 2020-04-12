$(document).ready(function () {
    'use strict'

    // Handle nav link not has treeview active
    var nav_link_not_has_treeview = $('ul.nav-sidebar .nav-item:not(.has-treeview) .nav-link[href="' + current_url + '"]')
    nav_link_not_has_treeview.addClass('active')

    // Handle nav link has treeview active
    var nav_link_not_has_treeview = $('ul.nav-sidebar .nav-item.has-treeview .nav-link[href="' + current_url + '"]')
    nav_link_not_has_treeview.closest('.nav-item.has-treeview').addClass('menu-open')
    nav_link_not_has_treeview.closest('.nav-item.has-treeview').children('.nav-link').addClass('active')
    nav_link_not_has_treeview.addClass('active')
});