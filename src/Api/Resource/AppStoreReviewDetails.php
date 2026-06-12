<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreReviewDetailCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreReviewDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewDetails\AppStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewDetails\AppStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewDetails\AppStoreReviewDetailsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewDetails\AppStoreReviewDetailsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewDetails\AppStoreReviewDetailsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreReviewDetails extends BaseResource
{
    public function appStoreReviewDetailsCreateInstance(
        AppStoreReviewDetailCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreReviewDetailsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreReviewDetails
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappStoreReviewAttachments
     * @param  array<int, string>|null  $include
     */
    public function appStoreReviewDetailsGetInstance(
        string $id,
        ?array $fieldsappStoreReviewDetails = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappStoreReviewAttachments = null,
        ?array $include = null,
        ?int $limitappStoreReviewAttachments = null,
    ): Response {
        return $this->connector->send(new AppStoreReviewDetailsGetInstance($id, $fieldsappStoreReviewDetails, $fieldsappStoreVersions, $fieldsappStoreReviewAttachments, $include, $limitappStoreReviewAttachments));
    }

    public function appStoreReviewDetailsUpdateInstance(
        string $id,
        AppStoreReviewDetailUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreReviewDetailsUpdateInstance($id, $payload));
    }

    public function appStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreReviewAttachments
     * @param  array<int, string>|null  $fieldsappStoreReviewDetails
     * @param  array<int, string>|null  $include
     */
    public function appStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelated(
        string $id,
        ?array $fieldsappStoreReviewAttachments = null,
        ?array $fieldsappStoreReviewDetails = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelated($id, $fieldsappStoreReviewAttachments, $fieldsappStoreReviewDetails, $limit, $include));
    }
}
