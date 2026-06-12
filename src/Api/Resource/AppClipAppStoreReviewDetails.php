<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipAppStoreReviewDetailCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppClipAppStoreReviewDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipAppStoreReviewDetails\AppClipAppStoreReviewDetailsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipAppStoreReviewDetails\AppClipAppStoreReviewDetailsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipAppStoreReviewDetails\AppClipAppStoreReviewDetailsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppClipAppStoreReviewDetails extends BaseResource
{
    public function appClipAppStoreReviewDetailsCreateInstance(
        AppClipAppStoreReviewDetailCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipAppStoreReviewDetailsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipAppStoreReviewDetails
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $include
     */
    public function appClipAppStoreReviewDetailsGetInstance(
        string $id,
        ?array $fieldsappClipAppStoreReviewDetails = null,
        ?array $fieldsappClipDefaultExperiences = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppClipAppStoreReviewDetailsGetInstance($id, $fieldsappClipAppStoreReviewDetails, $fieldsappClipDefaultExperiences, $include));
    }

    public function appClipAppStoreReviewDetailsUpdateInstance(
        string $id,
        AppClipAppStoreReviewDetailUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipAppStoreReviewDetailsUpdateInstance($id, $payload));
    }
}
