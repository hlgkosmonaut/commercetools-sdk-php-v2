<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<Update>
 */
final class UpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?UpdateActionCollection
     */
    private $actions;

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|UpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withActions(?UpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): Update
    {
        return new UpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): UpdateBuilder
    {
        return new self();
    }
}
