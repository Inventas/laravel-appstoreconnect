<?php

use Inventas\AppStoreConnectKit\AppStoreConnector;
use Inventas\AppStoreConnectKit\Connect\ListAppsRequest;

test('list apps', function () {

    $connector = new AppStoreConnector();
    $request = new ListAppsRequest();

    $response = $connector->send($request);

    expect($response->status())->toBe(200);

    $data = $response->json();

    dd($data);

});
