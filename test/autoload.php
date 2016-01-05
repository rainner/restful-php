<?php
/**
 * Autoloader
 */
spl_autoload_register( function( $class='' )
{
    $base  = rtrim( str_replace( '\\', '/', $_SERVER['DOCUMENT_ROOT'] ), '/' ) .'/src';
    $class = rtrim( str_replace( '\\', '/', $class ), '/' );
    $file  = preg_replace( '/\/\/+/', '/', $base .'/'. $class .'.php' );
    realpath( $file ) && require_once( $file );

}, true );