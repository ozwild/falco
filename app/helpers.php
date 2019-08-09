<?php

define('TC_SINGULAR', 1);
define('TC_PLURAL', 10);

use Jenssegers\Agent\Agent;

function getThemeClassConfigPrefix()
{
    return config('theme.active_theme', "");
}

;

function html_class($value)
{
    $themePrefix = getThemeClassConfigPrefix();
    $configKey = "theme-" . $themePrefix . ".class." . $value;
    return config($configKey, "");
}

function getLocaleText()
{
    $locale = App::getLocale();

    if ($locale === "en") {
        return "English";
    }
    if ($locale === "es") {
        return "Español";
    }

    return "";

}

function agent()
{
    return (new Agent());
}