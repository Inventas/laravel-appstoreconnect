<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewAttachments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreReviewAttachments_getInstance
 */
class AppStoreReviewAttachmentsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreReviewAttachments/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreReviewAttachments
     * @param  array<int, string>|null  $fieldsappStoreReviewDetails
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreReviewAttachments = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreReviewDetails = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appStoreReviewAttachments]' => $this->fieldsappStoreReviewAttachments,
            'fields[appStoreReviewDetails]' => $this->fieldsappStoreReviewDetails,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
