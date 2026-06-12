<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\DiagnosticSignatures\DiagnosticSignaturesLogsGetToManyRelated;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class DiagnosticSignatures extends BaseResource
{
    public function diagnosticSignaturesLogsGetToManyRelated(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new DiagnosticSignaturesLogsGetToManyRelated($id, $limit));
    }
}
