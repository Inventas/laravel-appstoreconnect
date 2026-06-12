<?php

use Inventas\AppStoreConnectKit\Api\Dto\AccessibilityDeclarationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AccessibilityDeclarationCreateRequestData;
use Inventas\AppStoreConnectKit\Api\Dto\AccessibilityDeclarationCreateRequestDataAttributes;
use Inventas\AppStoreConnectKit\Api\Dto\AccessibilityDeclarationCreateRequestDataRelationships;
use Inventas\AppStoreConnectKit\Api\Dto\AccessibilityDeclarationCreateRequestDataRelationshipsApp;
use Inventas\AppStoreConnectKit\Api\Dto\AccessibilityDeclarationCreateRequestDataRelationshipsAppData;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionCreateRequestData;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionCreateRequestDataAttributes;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionCreateRequestDataRelationships;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionCreateRequestDataRelationshipsApp;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionCreateRequestDataRelationshipsAppData;
use Inventas\AppStoreConnectKit\Api\Dto\DeviceFamily;
use Inventas\AppStoreConnectKit\Api\Dto\Platform;
use Inventas\AppStoreConnectKit\Api\Requests\AccessibilityDeclarations\AccessibilityDeclarationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsGetCollection;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;

it('preserves false generated query values', function () {
    $request = new AppsGetCollection(existsgameCenterEnabledVersions: false);

    expect($request->defaultQuery())->toHaveKey('exists[gameCenterEnabledVersions]', false);
});

it('serializes generated dto payloads as request bodies', function () {
    $payload = new AccessibilityDeclarationCreateRequest(
        data: new AccessibilityDeclarationCreateRequestData(
            type: 'accessibilityDeclarations',
            attributes: new AccessibilityDeclarationCreateRequestDataAttributes(
                deviceFamily: DeviceFamily::IPHONE,
                supportsAudioDescriptions: false,
                supportsCaptions: null,
            ),
            relationships: new AccessibilityDeclarationCreateRequestDataRelationships(
                app: new AccessibilityDeclarationCreateRequestDataRelationshipsApp(
                    data: new AccessibilityDeclarationCreateRequestDataRelationshipsAppData(
                        type: 'apps',
                        id: '123456789',
                    ),
                ),
            ),
        ),
    );
    $request = new AccessibilityDeclarationsCreateInstance($payload);

    expect($request)->toBeInstanceOf(HasBody::class)
        ->and($request->defaultBody())->toBe([
            'data' => [
                'type' => 'accessibilityDeclarations',
                'attributes' => [
                    'deviceFamily' => 'IPHONE',
                    'supportsAudioDescriptions' => false,
                    'supportsCaptions' => null,
                ],
                'relationships' => [
                    'app' => [
                        'data' => [
                            'type' => 'apps',
                            'id' => '123456789',
                        ],
                    ],
                ],
            ],
        ]);
});

it('serializes generated enum values in nested dto payloads', function () {
    $payload = new AppStoreVersionCreateRequest(
        data: new AppStoreVersionCreateRequestData(
            type: 'appStoreVersions',
            attributes: new AppStoreVersionCreateRequestDataAttributes(
                platform: Platform::IOS,
                versionString: '1.0.0',
            ),
            relationships: new AppStoreVersionCreateRequestDataRelationships(
                app: new AppStoreVersionCreateRequestDataRelationshipsApp(
                    data: new AppStoreVersionCreateRequestDataRelationshipsAppData(
                        type: 'apps',
                        id: '123456789',
                    ),
                ),
            ),
        ),
    );

    expect(PayloadSerializer::serialize($payload)['data']['attributes']['platform'])->toBe('IOS');
});
