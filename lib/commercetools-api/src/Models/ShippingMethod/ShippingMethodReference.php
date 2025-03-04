<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded Review. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for ShippingMethods.</p>
     *
     * @return null|ShippingMethod
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:ShippingMethod">ShippingMethod</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?ShippingMethod $obj
     */
    public function setObj(?ShippingMethod $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
