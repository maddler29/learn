<?php

$rules = [
    '@PSR2' => true,
];

$excludes = [
    'directories' => [
        'bootstrap/cache',
        'public',
        'resources',
        'storage',
        'vendor',
    ],
    'path' => [
        'artisan',
        'server.php',
        '.php_cs.dist',
        '.phpstorm.meta.php',
        '_ide_helper.php',
    ],
];

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude($excludes['directories']);
foreach ($excludes['path'] as $path) {
    $finder->notPath($path);
}

return (new PhpCsFixer\Config())
    ->setRules($rules)
    ->setRiskyAllowed(true)
    ->setCacheFile(__DIR__ . '/.php_cs.cache')
    ->setFinder($finder);
