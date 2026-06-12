<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaAppReviewDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewDetails\BetaAppReviewDetailsAppGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewDetails\BetaAppReviewDetailsAppGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewDetails\BetaAppReviewDetailsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewDetails\BetaAppReviewDetailsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewDetails\BetaAppReviewDetailsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaAppReviewDetails extends BaseResource
{
    /**
     * @param  array<int, string>  $filterapp
     * @param  array<int, string>|null  $fieldsbetaAppReviewDetails
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function betaAppReviewDetailsGetCollection(
        array $filterapp,
        ?array $fieldsbetaAppReviewDetails = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaAppReviewDetailsGetCollection($filterapp, $fieldsbetaAppReviewDetails, $fieldsapps, $limit, $include));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppReviewDetails
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function betaAppReviewDetailsGetInstance(
        string $id,
        ?array $fieldsbetaAppReviewDetails = null,
        ?array $fieldsapps = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaAppReviewDetailsGetInstance($id, $fieldsbetaAppReviewDetails, $fieldsapps, $include));
    }

    public function betaAppReviewDetailsUpdateInstance(
        string $id,
        BetaAppReviewDetailUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaAppReviewDetailsUpdateInstance($id, $payload));
    }

    public function betaAppReviewDetailsAppGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BetaAppReviewDetailsAppGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function betaAppReviewDetailsAppGetToOneRelated(string $id, ?array $fieldsapps = null): Response
    {
        return $this->connector->send(new BetaAppReviewDetailsAppGetToOneRelated($id, $fieldsapps));
    }
}
