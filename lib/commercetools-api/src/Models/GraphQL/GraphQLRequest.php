<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQL;

use Commercetools\Base\JsonObject;

interface GraphQLRequest extends JsonObject
{
    const FIELD_QUERY = 'query';
    const FIELD_OPERATION_NAME = 'operationName';
    const FIELD_VARIABLES = 'variables';

    /**
     * @return null|string
     */
    public function getQuery();

    /**
     * @return null|string
     */
    public function getOperationName();

    /**
     * @return null|GraphQLVariablesMap
     */
    public function getVariables();

    public function setQuery(?string $query): void;

    public function setOperationName(?string $operationName): void;

    public function setVariables(?GraphQLVariablesMap $variables): void;
}
