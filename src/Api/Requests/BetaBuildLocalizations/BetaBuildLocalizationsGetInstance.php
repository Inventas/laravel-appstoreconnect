<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaBuildLocalizations_getInstance
 */
class BetaBuildLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaBuildLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaBuildLocalizations
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaBuildLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[betaBuildLocalizations]' => $this->fieldsbetaBuildLocalizations,
            'fields[builds]' => $this->fieldsbuilds,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
