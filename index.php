<?php

use PhpSPA\App;

$app = new App(require __DIR__ . '/view/layout/Layout.php')

    ->attach()

    ->defaultTargetID('great-react-root')

    // --- Global Script ---
    ->script(fn() => <<<JS
        console.log('home.php: Element exists?', !!document.getElementById('great-react-root'));
    JS)

    // --- True to get the output ---
    ->run(true);
