<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_appStoreVersionSubmission_getToOneRelated
 */
class AppStoreVersionsAppStoreVersionSubmissionGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/appStoreVersionSubmission";
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionSubmissions
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionSubmissions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appStoreVersionSubmissions]' => $this->fieldsappStoreVersionSubmissions,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
