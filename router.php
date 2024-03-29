<?php declare(strict_types=1);
/**
 *  This router is to be used with PHP Development Server for local development/testing purposes
 * 
 *  - Routing to public/bootstrap.php if requested resource does not exist as file resource 
 *    in document root ($PROJECTNAME/public)
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/WebP5
 * @package Freezy
 * @version 0.2
 * @since 2023-12-16
 */

 
   // if requested resource does not exist as file in document root:
   if (!file_exists($_SERVER['DOCUMENT_ROOT'] . parse_url($_SERVER['REQUEST_URI'], \PHP_URL_PATH))) { 
       // set current script name in super global &
       $_SERVER['SCRIPT_NAME'] = 'bootstrap.php'; 
       // route to public/bootstrap.php   
       require_once 'pub/bootstrap.php'; 
       // or just deliver resource
    } else {
            return false;
    }
