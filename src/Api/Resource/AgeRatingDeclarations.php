<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AgeRatingDeclarationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AgeRatingDeclarations\AgeRatingDeclarationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AgeRatingDeclarations extends BaseResource
{
    public function ageRatingDeclarationsUpdateInstance(
        string $id,
        AgeRatingDeclarationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AgeRatingDeclarationsUpdateInstance($id, $payload));
    }
}
