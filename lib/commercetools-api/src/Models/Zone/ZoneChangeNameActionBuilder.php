<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ZoneChangeNameAction>
 */
final class ZoneChangeNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * <p>New name of the Zone.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
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


    public function build(): ZoneChangeNameAction
    {
        return new ZoneChangeNameActionModel(
            $this->name
        );
    }

    public static function of(): ZoneChangeNameActionBuilder
    {
        return new self();
    }
}
