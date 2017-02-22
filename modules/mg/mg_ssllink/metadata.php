<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id' => 'mg_ssllink',
    'title' => array(
        'de' => 'SSL-Links (https)',
    ),
    'description' => array(
        'de' => 'In der core Datei "oxSeoEncoder" wird die "_getFullUrl" Funktion &uuml;berschrieben, dass immer ein https Adresse erzeugt wird.',
    ),
    'version' => '1.0',
    'author' => 'Marcel Gl&auml;ser',
    'url'           => 'https://www.PlueschStore.de',
    'email'         => 'info@plueschstore.de',
    'extend' => array(
        'oxseoencoderarticle' => 'mg/mg_ssllink/core/mg_ssllink_seoencoderarticle',
        'oxseoencodercategory' => 'mg/mg_ssllink/core/mg_ssllink_seoencodercategory',
        'oxseoencodercontent' => 'mg/mg_ssllink/core/mg_ssllink_seoencodercontent',
        'oxseoencodermanufacturer' => 'mg/mg_ssllink/core/mg_ssllink_seoencodermanufacturer',
        'oxseoencoderrecomm' => 'mg/mg_ssllink/core/mg_ssllink_seoencoderrecomm',
        'oxseoencodertag' => 'mg/mg_ssllink/core/mg_ssllink_seoencodertag',
        'oxseoencodervendor' => 'mg/mg_ssllink/core/mg_ssllink_seoencodervendor',
    ),
);
