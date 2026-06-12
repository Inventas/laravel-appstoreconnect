<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\CustomerReviews\CustomerReviewsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CustomerReviews\CustomerReviewsResponseGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CustomerReviews\CustomerReviewsResponseGetToOneRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CustomerReviews extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldscustomerReviews
     * @param  array<int, string>|null  $fieldscustomerReviewResponses
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function customerReviewsGetInstance(
        string $id,
        ?array $fieldscustomerReviews = null,
        ?array $fieldscustomerReviewResponses = null,
        ?array $fieldsterritories = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CustomerReviewsGetInstance($id, $fieldscustomerReviews, $fieldscustomerReviewResponses, $fieldsterritories, $include));
    }

    public function customerReviewsResponseGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new CustomerReviewsResponseGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldscustomerReviewResponses
     * @param  array<int, string>|null  $fieldscustomerReviews
     * @param  array<int, string>|null  $include
     */
    public function customerReviewsResponseGetToOneRelated(
        string $id,
        ?array $fieldscustomerReviewResponses = null,
        ?array $fieldscustomerReviews = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CustomerReviewsResponseGetToOneRelated($id, $fieldscustomerReviewResponses, $fieldscustomerReviews, $include));
    }
}
