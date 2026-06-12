<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiTestResults;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciTestResults_getInstance
 */
class CiTestResultsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciTestResults/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsciTestResults
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsciTestResults = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[ciTestResults]' => $this->fieldsciTestResults], static fn (mixed $value): bool => $value !== null);
    }
}
