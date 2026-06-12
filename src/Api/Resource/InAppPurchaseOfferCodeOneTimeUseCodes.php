<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeOneTimeUseCodeCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeOneTimeUseCodeUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeOneTimeUseCodes\InAppPurchaseOfferCodeOneTimeUseCodesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeOneTimeUseCodes\InAppPurchaseOfferCodeOneTimeUseCodesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeOneTimeUseCodes\InAppPurchaseOfferCodeOneTimeUseCodesUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeOneTimeUseCodes\InAppPurchaseOfferCodeOneTimeUseCodesValuesGetToOneRelated;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchaseOfferCodeOneTimeUseCodes extends BaseResource
{
    public function inAppPurchaseOfferCodeOneTimeUseCodesCreateInstance(
        InAppPurchaseOfferCodeOneTimeUseCodeCreateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodeOneTimeUseCodesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseOfferCodeOneTimeUseCodesGetInstance(
        string $id,
        ?array $fieldsinAppPurchaseOfferCodeOneTimeUseCodes = null,
        ?array $fieldsactors = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodeOneTimeUseCodesGetInstance($id, $fieldsinAppPurchaseOfferCodeOneTimeUseCodes, $fieldsactors, $include));
    }

    public function inAppPurchaseOfferCodeOneTimeUseCodesUpdateInstance(
        string $id,
        InAppPurchaseOfferCodeOneTimeUseCodeUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodeOneTimeUseCodesUpdateInstance($id, $payload));
    }

    public function inAppPurchaseOfferCodeOneTimeUseCodesValuesGetToOneRelated(string $id): Response
    {
        return $this->connector->send(new InAppPurchaseOfferCodeOneTimeUseCodesValuesGetToOneRelated($id));
    }
}
