<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreReviewAttachmentCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreReviewAttachmentUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewAttachments\AppStoreReviewAttachmentsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewAttachments\AppStoreReviewAttachmentsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewAttachments\AppStoreReviewAttachmentsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewAttachments\AppStoreReviewAttachmentsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreReviewAttachments extends BaseResource
{
    public function appStoreReviewAttachmentsCreateInstance(
        AppStoreReviewAttachmentCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreReviewAttachmentsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreReviewAttachments
     * @param  array<int, string>|null  $fieldsappStoreReviewDetails
     * @param  array<int, string>|null  $include
     */
    public function appStoreReviewAttachmentsGetInstance(
        string $id,
        ?array $fieldsappStoreReviewAttachments = null,
        ?array $fieldsappStoreReviewDetails = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppStoreReviewAttachmentsGetInstance($id, $fieldsappStoreReviewAttachments, $fieldsappStoreReviewDetails, $include));
    }

    public function appStoreReviewAttachmentsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppStoreReviewAttachmentsDeleteInstance($id));
    }

    public function appStoreReviewAttachmentsUpdateInstance(
        string $id,
        AppStoreReviewAttachmentUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreReviewAttachmentsUpdateInstance($id, $payload));
    }
}
