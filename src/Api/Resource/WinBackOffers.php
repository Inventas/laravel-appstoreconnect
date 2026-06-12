<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\WinBackOfferCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\WinBackOfferUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers\WinBackOffersCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers\WinBackOffersDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers\WinBackOffersGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers\WinBackOffersPricesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers\WinBackOffersPricesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers\WinBackOffersUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class WinBackOffers extends BaseResource
{
    public function winBackOffersCreateInstance(
        WinBackOfferCreateRequest $payload,
    ): Response {
        return $this->connector->send(new WinBackOffersCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldswinBackOffers
     * @param  array<int, string>|null  $fieldswinBackOfferPrices
     * @param  array<int, string>|null  $include
     */
    public function winBackOffersGetInstance(
        string $id,
        ?array $fieldswinBackOffers = null,
        ?array $fieldswinBackOfferPrices = null,
        ?array $include = null,
        ?int $limitprices = null,
    ): Response {
        return $this->connector->send(new WinBackOffersGetInstance($id, $fieldswinBackOffers, $fieldswinBackOfferPrices, $include, $limitprices));
    }

    public function winBackOffersDeleteInstance(string $id): Response
    {
        return $this->connector->send(new WinBackOffersDeleteInstance($id));
    }

    public function winBackOffersUpdateInstance(
        string $id,
        WinBackOfferUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new WinBackOffersUpdateInstance($id, $payload));
    }

    public function winBackOffersPricesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new WinBackOffersPricesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldswinBackOfferPrices
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $include
     */
    public function winBackOffersPricesGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldswinBackOfferPrices = null,
        ?array $fieldsterritories = null,
        ?array $fieldssubscriptionPricePoints = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new WinBackOffersPricesGetToManyRelated($id, $filterterritory, $fieldswinBackOfferPrices, $fieldsterritories, $fieldssubscriptionPricePoints, $limit, $include));
    }
}
