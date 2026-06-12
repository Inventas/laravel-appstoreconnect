<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipAppStoreReviewDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipAppStoreReviewDetails_getInstance
 */
class AppClipAppStoreReviewDetailsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipAppStoreReviewDetails/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipAppStoreReviewDetails
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipAppStoreReviewDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipDefaultExperiences = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appClipAppStoreReviewDetails]' => $this->fieldsappClipAppStoreReviewDetails,
            'fields[appClipDefaultExperiences]' => $this->fieldsappClipDefaultExperiences,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
