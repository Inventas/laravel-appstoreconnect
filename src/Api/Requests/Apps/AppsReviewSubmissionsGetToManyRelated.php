<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_reviewSubmissions_getToManyRelated
 */
class AppsReviewSubmissionsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/reviewSubmissions";
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterstate
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
        protected ?array $filterplatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterstate = null,
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
        protected ?int $limit = null,
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
            'filter[platform]' => $this->filterplatform,
            'filter[state]' => $this->filterstate,
            'fields[reviewSubmissions]' => $this->fieldsreviewSubmissions,
            'fields[apps]' => $this->fieldsapps,
            'fields[reviewSubmissionItems]' => $this->fieldsreviewSubmissionItems,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[actors]' => $this->fieldsactors,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[items]' => $this->limititems,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
