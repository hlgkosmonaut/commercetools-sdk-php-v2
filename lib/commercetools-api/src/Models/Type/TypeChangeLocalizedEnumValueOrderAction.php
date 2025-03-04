<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeChangeLocalizedEnumValueOrderAction extends TypeUpdateAction
{
    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_KEYS = 'keys';

    /**
     * <p><code>name</code> of the <a href="ctp:api:type:FieldDefinition">Field Definition</a> to update.</p>
     *
     * @return null|string
     */
    public function getFieldName();

    /**
     * <p>Must match the set of <code>key</code>s of the LocalizedEnumValues in the FieldDefinition (up to order).</p>
     *
     * @return null|array
     */
    public function getKeys();

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void;

    /**
     * @param ?array $keys
     */
    public function setKeys(?array $keys): void;
}
