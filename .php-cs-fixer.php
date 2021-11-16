<?php

/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:2.19.0|configurator
 * you can change this configuration by importing this file.
 */

$config = new PhpCsFixer\Config();

return $config
    ->setUsingCache(false)
    ->setRules([
        'single_space_after_construct' => true,
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->in(__DIR__)
    )
;
