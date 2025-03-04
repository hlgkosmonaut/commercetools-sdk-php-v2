<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeChangeLabelAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_LABEL = 'label';

    /**
     * @return null|string
     */
    public function getAttributeName();

    /**
     * <p>JSON object where the keys are of type <a href="ctp:api:type:Locale">Locale</a>, and the values are the strings used for the corresponding language.</p>
     *
     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void;
}
