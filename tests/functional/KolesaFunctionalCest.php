<?php

use SebastianBergmann\CodeCoverage\Report\Text;

class KolesaFunctionalCest
{

    //1. Зайти на http://automationpractice.com/index.php
    //2. В поле поиска написать «Printed dress»
    //3. Кликнуть на кнопку поиска
    //4. На странице результатов убедиться, что было найдено 5 товаров (считать карточки товаров)

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeElement('//*[@id="center_column"]/ul/li');
        $I->seeNumberOfElements('//*[@id="center_column"]/ul/li',5);


    }
}
