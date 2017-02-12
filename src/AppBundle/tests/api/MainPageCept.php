<?php use AppBundle\ApiTester;
$I = new ApiTester($scenario);
$I->wantTo('visit main page');
$I->sendGET('');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->seeResponseIsJson();
$I->seeResponseContainsJson();
$I->seeResponseContains('{"products":[]}');
