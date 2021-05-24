<?php

use SebastianBergmann\CodeCoverage\Report\Text;

class KolesaAcceptanceCest
{
    //1. Зайти на http://automationpractice.com/index.php
    //2. Найти на странице товар «Blouse»
    //3. Навести на него мышью
    //4. Кликнуть на кнопку «Quick view» внутри блока с товаром
    //5. Дождаться появления модального окна
    //6. Убедиться, что это нужный нам товар, проверив текст «Blouse» внутри модального окна
    // tests
    public function checkModalWindow(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top', 'Blouse');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeElement('#center_column > ul > li');
        $I->moveMouseOver("#center_column > ul > li > div");
        $I->seeElement('#center_column > ul > li > div > div.left-block > div > a.quick-view');
        $I->click('#center_column > ul > li > div > div.left-block > div > a.quick-view > span');
        $I->waitForElement('.fancybox-iframe', 10);
        $I->switchToIFrame('.fancybox-iframe');
        $I->seeElement('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
        $I->see('Blouse', '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');


    }
}
