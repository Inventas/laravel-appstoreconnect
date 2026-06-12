<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEvents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEvents_localizations_getToManyRelationship
 */
class AppEventsLocalizationsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appEvents/{$this->id}/relationships/localizations";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
