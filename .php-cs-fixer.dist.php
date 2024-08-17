<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->notPath(['
        .phpstorm.meta.php'
    ])
    ->exclude([
        'vendor'
    ]);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
    ])
    ->setFinder($finder);
