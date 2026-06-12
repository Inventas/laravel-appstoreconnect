<?php

use Inventas\AppStoreConnectKit\AppStoreConnector;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

test('list builds', function () {
    MockClient::destroyGlobal();

    MockClient::global([
        MockResponse::make([
            'data' => [],
        ]),
    ]);

    $response = (new AppStoreConnector)->builds()->buildsGetCollection();

    expect($response->status())->toBe(200);

    $data = $response->json();

    expect($data)->toBe(['data' => []]);

    MockClient::destroyGlobal();
});
