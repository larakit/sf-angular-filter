<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-filter')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->ngModule('angular.filter')
    ->jsPackage('angular-filter.min.js');
