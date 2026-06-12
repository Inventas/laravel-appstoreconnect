<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_appStoreReviewDetail_getToOneRelated
 */
class AppStoreVersionsAppStoreReviewDetailGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/appStoreReviewDetail";
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreReviewDetails
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappStoreReviewAttachments
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreReviewDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreReviewAttachments = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappStoreReviewAttachments = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appStoreReviewDetails]' => $this->fieldsappStoreReviewDetails,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[appStoreReviewAttachments]' => $this->fieldsappStoreReviewAttachments,
            'include' => $this->include,
            'limit[appStoreReviewAttachments]' => $this->limitappStoreReviewAttachments,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
