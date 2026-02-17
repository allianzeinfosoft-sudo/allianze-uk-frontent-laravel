<?php

use App\Services\WpService;
use App\Helpers\GeneralHelper;
use Illuminate\Support\Facades\Cache;

function measure($callback, $label)
{
     $start = microtime(true);
     $callback();
     $end = microtime(true);
     printf("%-30s: %.4f seconds\n", $label, $end - $start);
}

$wp = new WpService();
$helper = new GeneralHelper();

echo "--- Cold Cache (First Run) ---\n";
Cache::flush();

measure(fn() => $wp->posts(), "WpService::posts()");
measure(fn() => $helper->fetchPageData('home'), "GeneralHelper::fetchPageData('home')");

echo "\n--- Warm Cache (Second Run) ---\n";
measure(fn() => $wp->posts(), "WpService::posts()");
measure(fn() => $helper->fetchPageData('home'), "GeneralHelper::fetchPageData('home')");
