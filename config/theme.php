<?php

return [

    "active_theme" => env('APP_THEME', 'default'),

    "getClassForm" => function ($component) {
        $theme = config('theme.active_theme');
        $segment = config("themes-$theme.components");

        $segment = Arr::dot($segment);

        if (!isset($segment[$component . ".common-class"])) {
            return "";
        }

        return $segment[$component . ".common-class"] ?: "";

    },

    "getIconFromRepository" => function ($repositoryReference) {

        $repository = [];

        if ($repositoryReference == "materialize") {
            $repository = config("themes-materialize-icons", []);
        }

        if ($repositoryReference == "font-awesome") {
            $repository = config("themes-font-awesome-icons", []);
        }

        return function ($icon) use ($repository) {

            if (empty($repository)) {
                return "";
            }

            if (isset($repository[$icon])) {
                return $repository[$icon];
            }
            return null;
        };

    },

];