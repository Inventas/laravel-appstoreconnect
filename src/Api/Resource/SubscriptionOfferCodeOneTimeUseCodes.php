<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionOfferCodeOneTimeUseCodeCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionOfferCodeOneTimeUseCodeUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeOneTimeUseCodes\SubscriptionOfferCodeOneTimeUseCodesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeOneTimeUseCodes\SubscriptionOfferCodeOneTimeUseCodesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeOneTimeUseCodes\SubscriptionOfferCodeOneTimeUseCodesUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeOneTimeUseCodes\SubscriptionOfferCodeOneTimeUseCodesValuesGetToOneRelated;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionOfferCodeOneTimeUseCodes extends BaseResource
{
    public function subscriptionOfferCodeOneTimeUseCodesCreateInstance(
        SubscriptionOfferCodeOneTimeUseCodeCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodeOneTimeUseCodesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $include
     */
    public function subscriptionOfferCodeOneTimeUseCodesGetInstance(
        string $id,
        ?array $fieldssubscriptionOfferCodeOneTimeUseCodes = null,
        ?array $fieldssubscriptionOfferCodes = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodeOneTimeUseCodesGetInstance($id, $fieldssubscriptionOfferCodeOneTimeUseCodes, $fieldssubscriptionOfferCodes, $include));
    }

    public function subscriptionOfferCodeOneTimeUseCodesUpdateInstance(
        string $id,
        SubscriptionOfferCodeOneTimeUseCodeUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodeOneTimeUseCodesUpdateInstance($id, $payload));
    }

    public function subscriptionOfferCodeOneTimeUseCodesValuesGetToOneRelated(string $id): Response
    {
        return $this->connector->send(new SubscriptionOfferCodeOneTimeUseCodesValuesGetToOneRelated($id));
    }
}
