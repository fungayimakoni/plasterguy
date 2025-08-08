<?php

define('RWB_PATH', trailingslashit(get_stylesheet_directory()));

/*
* ACF Blocks Theme definition 
*/
add_action('acf/init', 'rwb_define_block');
function rwb_define_block()
{
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name' => 'fun-facts',
            'title' => __('Fun Facts'),
            'description' => __('A custom fun facts block'),
            'render_callback' => 'rwb_render_fun_facts_block',
            'category' => 'layout',
            'icon' => 'nametag',
            'keywords' => array('fun', 'facts', 'profiles', 'acf'),
        ));

        acf_register_block(array(
            'name' => 'home-hero',
            'title' => __('Home Hero'),
            'description' => __('A custom home page hero block'),
            'render_callback' => 'rwb_render_home_hero_block',
            'category' => 'layout',
            'icon' => 'heading',
            'keywords' => array('hero', 'acf'),
        ));

        acf_register_block(array(
            'name' => 'services-listing',
            'title' => __('Services Listing'),
            'description' => __('A custom services listing'),
            'render_callback' => 'rwb_render_services_listing_block',
            'category' => 'layout',
            'icon' => 'heading',
            'keywords' => array('services', 'acf'),
        ));

        acf_register_block(array(
            'name' => 'working-process',
            'title' => __('Working Process'),
            'description' => __('A custom wotking process steps'),
            'render_callback' => 'rwb_render_working_process_block',
            'category' => 'layout',
            'icon' => 'heading',
            'keywords' => array('working', 'process', 'acf'),
        ));

        acf_register_block(array(
            'name' => 'why-choose',
            'title' => __('Why choose us'),
            'description' => __('A custom why choose us'),
            'render_callback' => 'rwb_render_why_choose_block',
            'category' => 'layout',
            'icon' => 'heading',
            'keywords' => array('why', 'choose', 'acf'),
        ));

        acf_register_block(array(
            'name' => 'operational-areas',
            'title' => __('Operational Areas'),
            'description' => __('Areas we serve'),
            'render_callback' => 'rwb_render_operational_areas_block',
            'category' => 'layout',
            'icon' => 'heading',
            'keywords' => array('operational', 'areas', 'locations', 'acf'),
        ));

        acf_register_block(array(
            'name' => 'fullbleed-copy',
            'title' => __('Full width copy'),
            'description' => __('Section with copy'),
            'render_callback' => 'rwb_render_fullbleed_copy_block',
            'category' => 'layout',
            'icon' => 'heading',
            'keywords' => array('full', 'copy', 'acf'),
        ));
    }
}

function rwb_render_fun_facts_block($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(RWB_PATH . "template-parts/block/content-{$slug}.php")) {

        include_once(RWB_PATH . "template-parts/block/content-{$slug}.php");
    }
}

function rwb_render_home_hero_block($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(RWB_PATH . "template-parts/block/content-{$slug}.php")) {

        include_once(RWB_PATH . "template-parts/block/content-{$slug}.php");
    }
}

function rwb_render_services_listing_block($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(RWB_PATH . "template-parts/block/content-{$slug}.php")) {

        include_once(RWB_PATH . "template-parts/block/content-{$slug}.php");
    }
}

function rwb_render_working_process_block($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(RWB_PATH . "template-parts/block/content-{$slug}.php")) {

        include_once(RWB_PATH . "template-parts/block/content-{$slug}.php");
    }
}

function rwb_render_why_choose_block($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(RWB_PATH . "template-parts/block/content-{$slug}.php")) {

        include_once(RWB_PATH . "template-parts/block/content-{$slug}.php");
    }
}

function rwb_render_operational_areas_block($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(RWB_PATH . "template-parts/block/content-{$slug}.php")) {

        include_once(RWB_PATH . "template-parts/block/content-{$slug}.php");
    }
}

function rwb_render_fullbleed_copy_block($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(RWB_PATH . "template-parts/block/content-{$slug}.php")) {

        include_once(RWB_PATH . "template-parts/block/content-{$slug}.php");
    }
}
