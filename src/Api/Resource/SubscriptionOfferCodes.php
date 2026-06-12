<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionOfferCodeCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionOfferCodeUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes\SubscriptionOfferCodesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes\SubscriptionOfferCodesCustomCodesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes\SubscriptionOfferCodesCustomCodesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes\SubscriptionOfferCodesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes\SubscriptionOfferCodesOneTimeUseCodesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes\SubscriptionOfferCodesOneTimeUseCodesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes\SubscriptionOfferCodesPricesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes\SubscriptionOfferCodesPricesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes\SubscriptionOfferCodesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionOfferCodes extends BaseResource
{
    public function subscriptionOfferCodesCreateInstance(
        SubscriptionOfferCodeCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodePrices
     * @param  array<int, string>|null  $include
     */
    public function subscriptionOfferCodesGetInstance(
        string $id,
        ?array $fieldssubscriptionOfferCodes = null,
        ?array $fieldssubscriptions = null,
        ?array $fieldssubscriptionOfferCodeOneTimeUseCodes = null,
        ?array $fieldssubscriptionOfferCodeCustomCodes = null,
        ?array $fieldssubscriptionOfferCodePrices = null,
        ?array $include = null,
        ?int $limitcustomCodes = null,
        ?int $limitoneTimeUseCodes = null,
        ?int $limitprices = null,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodesGetInstance($id, $fieldssubscriptionOfferCodes, $fieldssubscriptions, $fieldssubscriptionOfferCodeOneTimeUseCodes, $fieldssubscriptionOfferCodeCustomCodes, $fieldssubscriptionOfferCodePrices, $include, $limitcustomCodes, $limitoneTimeUseCodes, $limitprices));
    }

    public function subscriptionOfferCodesUpdateInstance(
        string $id,
        SubscriptionOfferCodeUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodesUpdateInstance($id, $payload));
    }

    public function subscriptionOfferCodesCustomCodesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionOfferCodesCustomCodesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $include
     */
    public function subscriptionOfferCodesCustomCodesGetToManyRelated(
        string $id,
        ?array $fieldssubscriptionOfferCodeCustomCodes = null,
        ?array $fieldssubscriptionOfferCodes = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodesCustomCodesGetToManyRelated($id, $fieldssubscriptionOfferCodeCustomCodes, $fieldssubscriptionOfferCodes, $limit, $include));
    }

    public function subscriptionOfferCodesOneTimeUseCodesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionOfferCodesOneTimeUseCodesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $include
     */
    public function subscriptionOfferCodesOneTimeUseCodesGetToManyRelated(
        string $id,
        ?array $fieldssubscriptionOfferCodeOneTimeUseCodes = null,
        ?array $fieldssubscriptionOfferCodes = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodesOneTimeUseCodesGetToManyRelated($id, $fieldssubscriptionOfferCodeOneTimeUseCodes, $fieldssubscriptionOfferCodes, $limit, $include));
    }

    public function subscriptionOfferCodesPricesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionOfferCodesPricesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodePrices
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $include
     */
    public function subscriptionOfferCodesPricesGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldssubscriptionOfferCodePrices = null,
        ?array $fieldsterritories = null,
        ?array $fieldssubscriptionPricePoints = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodesPricesGetToManyRelated($id, $filterterritory, $fieldssubscriptionOfferCodePrices, $fieldsterritories, $fieldssubscriptionPricePoints, $limit, $include));
    }
}
