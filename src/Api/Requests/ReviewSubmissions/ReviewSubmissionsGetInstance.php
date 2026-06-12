<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * reviewSubmissions_getInstance
 */
class ReviewSubmissionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/reviewSubmissions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsreviewSubmissions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsreviewSubmissionItems
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsreviewSubmissions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsreviewSubmissionItems = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsactors = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limititems = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[reviewSubmissions]' => $this->fieldsreviewSubmissions,
            'fields[apps]' => $this->fieldsapps,
            'fields[reviewSubmissionItems]' => $this->fieldsreviewSubmissionItems,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[actors]' => $this->fieldsactors,
            'include' => $this->include,
            'limit[items]' => $this->limititems,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
