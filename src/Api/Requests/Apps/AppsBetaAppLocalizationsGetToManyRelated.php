<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_betaAppLocalizations_getToManyRelated
 */
class AppsBetaAppLocalizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/betaAppLocalizations";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppLocalizations
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppLocalizations = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[betaAppLocalizations]' => $this->fieldsbetaAppLocalizations, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
