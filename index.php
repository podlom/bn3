<?php

declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 20.12.2016
 * Time: 15:23
 *
 * Updated: 2025-06-14 20:24
 */

require_once 'banner.class.php';

$lang = 'uk';
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}
$num = $_GET['num'] ?? null;
$bn = new app\banner($lang, $num);
$bn->getHeaders();
echo $bn->getBannerHtml();