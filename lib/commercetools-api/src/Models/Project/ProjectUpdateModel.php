<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectUpdateModel extends JsonObjectModel implements ProjectUpdate
{
    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?ProjectUpdateActionCollection
     */
    protected $actions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $version = null,
        ?ProjectUpdateActionCollection $actions = null
    ) {
        $this->version = $version;
        $this->actions = $actions;
    }

    /**
     * <p>Expected version of the Project on which the changes should be applied. If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> will be returned.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the Project.</p>
     *
     * @return null|ProjectUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = ProjectUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }


    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?ProjectUpdateActionCollection $actions
     */
    public function setActions(?ProjectUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }
}
