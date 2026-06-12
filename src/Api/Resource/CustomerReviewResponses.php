<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\CustomerReviewResponseV1createRequest;
use Inventas\AppStoreConnectKit\Api\Requests\CustomerReviewResponses\CustomerReviewResponsesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CustomerReviewResponses\CustomerReviewResponsesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CustomerReviewResponses\CustomerReviewResponsesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CustomerReviewResponses extends BaseResource
{
    public function customerReviewResponsesCreateInstance(
        CustomerReviewResponseV1createRequest $payload,
    ): Response {
        return $this->connector->send(new CustomerReviewResponsesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldscustomerReviewResponses
     * @param  array<int, string>|null  $fieldscustomerReviews
     * @param  array<int, string>|null  $include
     */
    public function customerReviewResponsesGetInstance(
        string $id,
        ?array $fieldscustomerReviewResponses = null,
        ?array $fieldscustomerReviews = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CustomerReviewResponsesGetInstance($id, $fieldscustomerReviewResponses, $fieldscustomerReviews, $include));
    }

    public function customerReviewResponsesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new CustomerReviewResponsesDeleteInstance($id));
    }
}
