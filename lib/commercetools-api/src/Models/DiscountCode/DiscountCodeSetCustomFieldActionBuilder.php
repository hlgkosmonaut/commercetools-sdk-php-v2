<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeSetCustomFieldAction>
 */
final class DiscountCodeSetCustomFieldActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var null|mixed|mixed
     */
    private $value;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>The value of a Custom Field.
     * The data type of the value depends on the specific <a href="/projects/types#fieldtype">FieldType</a> given in the <code>type</code> field of the <a href="/ctp:api:type:FieldDefinition">FieldDefinition</a> for a Custom Field.
     * It can be any of the following:</p>
     * <p>| Field type                                                 | Data type                                                                                                                                                                 |
     * | ---------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
     * | <a href="ctp:api:type:CustomFieldBooleanType">CustomFieldBooleanType</a>                 | Boolean (<code>true</code> or <code>false</code>)                                                                                                                                                     |
     * | <a href="ctp:api:type:CustomFieldStringType">CustomFieldStringType</a>                   | String                                                                                                                                                                |
     * | <a href="ctp:api:type:CustomFieldLocalizedStringType">CustomFieldLocalizedStringType</a> | <a href="ctp:api:type:LocalizedString">LocalizedString</a>                                                                                                                             |
     * | <a href="ctp:api:type:CustomFieldEnumType">CustomFieldEnumType</a>                       | String. Must be a <code>key</code> of one of the <a href="ctp:api:type:CustomFieldEnumValue">EnumValues</a> defined in the <a href="ctp:api:type:CustomFiedEnumType">EnumType</a>                                     |
     * | <a href="ctp:api:type:CustomFieldLocalizedEnumType">CustomFieldLocalizedEnumType</a>     | String. Must be a <code>key</code> of one of the <a href="ctp:api:type:CustomFieldLocalizedEnumValue">LocalizedEnumValues</a> defined in the <a href="ctp:api:type:CustomFieldLocalizedEnumType">LocalizedEnumType</a> |
     * | <a href="ctp:api:type:CustomFieldNumberType">CustomFieldNumberType</a>                   | Number                                                                                                                                                                |
     * | <a href="ctp:api:type:CustomFieldMoneyType">CustomFieldMoneyType</a>                     | <a href="/../api/types#centprecisionmoney">CentPrecisionMoney</a>                                                                                                                                         |
     * | <a href="ctp:api:type:CustomFieldDateType">CustomFieldDateType</a>                       | <a href="ctp:api:type:Date">Date</a>                                                                                                                                                   |
     * | <a href="ctp:api:type:CustomFieldTimeType">CustomFieldTimeType</a>                       | <a href="ctp:api:type:Time">Time</a>                                                                                                                                                   |
     * | <a href="ctp:api:type:CustomFieldDateTimeType">CustomFieldDateTimeType</a>               | <a href="ctp:api:type:DateTime">DateTime</a>                                                                                                                                           |
     * | <a href="ctp:api:type:CustomFieldReferenceType">CustomFieldReferenceType</a>             | <a href="/../api/types#reference">Reference</a>                                                                                                                                         |
     * | <a href="ctp:api:type:CustomFieldSetType">CustomFieldSetType</a>                         | JSON array without duplicates consisting of <a href="ctp:api:type:CustomFieldValue">CustomFieldValues</a> of a single <a href="ctp:api:type:FieldType">FieldType</a>. For example, a Custom Field of SetType of DateType takes a JSON array of mutually different Dates for its value. The order of items in the array is not fixed. For more examples, see the <a href="ctp:api:type:FieldContainer">example FieldContainer</a>.|</p>
     *
     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function withValue($value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): DiscountCodeSetCustomFieldAction
    {
        return new DiscountCodeSetCustomFieldActionModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): DiscountCodeSetCustomFieldActionBuilder
    {
        return new self();
    }
}
