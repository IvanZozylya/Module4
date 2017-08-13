<?php

return array(


    'item/([0-9]+)/page-([0-9]+)'=>'item/showItem/$1/$2',
    'news/([0-9]+)/page-([0-9]+)'=>'news/index/$1/$2',
    'news/([0-9]+)'=>'news/index/$1',
    'item/([0-9]+)'=>'item/showItem/$1',
    'comments/user/([0-9])+'=>'comments/center/$1',

    'comments/add'=>'comments/add',
    'comments/top'=>'comments/top',
    'user/register'=>'user/register',
    'user/login'=>'user/login',
    'user/logout'=>'user/logout',
    'cabinet/edit'=>'cabinet/edit',
    'cabinet'=>'cabinet/index',

    '' => 'site/index', // actionIndex в SiteController
    
);
