<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\ReviewSubmissionItemCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\ReviewSubmissionItemUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissionItems\ReviewSubmissionItemsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissionItems\ReviewSubmissionItemsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissionItems\ReviewSubmissionItemsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ReviewSubmissionItems extends BaseResource
{
    public function reviewSubmissionItemsCreateInstance(
        ReviewSubmissionItemCreateRequest $payload,
    ): Response {
        return $this->connector->send(new ReviewSubmissionItemsCreateInstance($payload));
    }

    public function reviewSubmissionItemsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new ReviewSubmissionItemsDeleteInstance($id));
    }

    public function reviewSubmissionItemsUpdateInstance(
        string $id,
        ReviewSubmissionItemUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new ReviewSubmissionItemsUpdateInstance($id, $payload));
    }
}
