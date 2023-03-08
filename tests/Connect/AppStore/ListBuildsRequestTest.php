<?php

use Inventas\AppStoreConnectKit\AppStoreConnector;
use Inventas\AppStoreConnectKit\Connect\ListBuildsRequest;

test('list builds', function () {

    $connector = new AppStoreConnector();
    $request = new ListBuildsRequest();

    $response = $connector->send($request);

    expect($response->status())->toBe(200);

    $data = $response->json();

//    dd($data);

});
