<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_appEncryptionDeclarations_getToManyRelated
 */
class AppsAppEncryptionDeclarationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/appEncryptionDeclarations";
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarationDocuments
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterplatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEncryptionDeclarations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEncryptionDeclarationDocuments = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitbuilds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[platform]' => $this->filterplatform,
            'filter[builds]' => $this->filterbuilds,
            'fields[appEncryptionDeclarations]' => $this->fieldsappEncryptionDeclarations,
            'fields[apps]' => $this->fieldsapps,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[appEncryptionDeclarationDocuments]' => $this->fieldsappEncryptionDeclarationDocuments,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[builds]' => $this->limitbuilds,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
