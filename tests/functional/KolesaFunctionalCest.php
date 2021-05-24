<?php

use SebastianBergmann\CodeCoverage\Report\Text;

class KolesaFunctionalCest
{

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
