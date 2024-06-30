<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        'trailing_comma_in_multiline' => true,
        'array_syntax' => ['syntax' => 'short'],
        '@PhpCsFixer' => true,
    ])
    ->setUsingCache(false)
    ->setFinder($finder);
