<?php

use SebastianBergmann\CodeCoverage\Report\Text;

class KolesaAcceptanceCest
{

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
