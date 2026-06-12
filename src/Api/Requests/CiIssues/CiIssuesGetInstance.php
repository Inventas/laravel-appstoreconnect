<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiIssues;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciIssues_getInstance
 */
class CiIssuesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciIssues/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsciIssues
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsciIssues = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[ciIssues]' => $this->fieldsciIssues], static fn (mixed $value): bool => $value !== null);
    }
}
