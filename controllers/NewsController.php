<?php

class NewsController
{
    public function actionIndex($categoryId, $page = 1)
    {


        $newsList1 = News::actionNewsIndex(1);
        $newsList2 = News::actionNewsIndex(2);
        $newsList3 = News::actionNewsIndex(3);
        $newsList4 = News::actionNewsIndex(4);
        $newsList5 = News::actionNewsIndex(5);
        $newsList6 = News::actionNewsIndex(6);

        $sportList = array();
        $sportList = News::getNewsListByCategory($categoryId, $page);

        $total = News::getTotalNewsInCategory($categoryId);

        $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/news/view.php');
        return true;
    }

}