<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderStateTransitionMessagePayloadModel extends JsonObjectModel implements OrderStateTransitionMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderStateTransition';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?StateReference
     */
    protected $state;

    /**
     * @var ?StateReference
     */
    protected $oldState;

    /**
     * @var ?bool
     */
    protected $force;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StateReference $state = null,
        ?StateReference $oldState = null,
        ?bool $force = null
    ) {
        $this->state = $state;
        $this->oldState = $oldState;
        $this->force = $force;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateReference
     */
    public function getOldState()
    {
        if (is_null($this->oldState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->oldState = StateReferenceModel::of($data);
        }

        return $this->oldState;
    }

    /**
     * @return null|bool
     */
    public function getForce()
    {
        if (is_null($this->force)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_FORCE);
            if (is_null($data)) {
                return null;
            }
            $this->force = (bool) $data;
        }

        return $this->force;
    }


    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?StateReference $oldState
     */
    public function setOldState(?StateReference $oldState): void
    {
        $this->oldState = $oldState;
    }

    /**
     * @param ?bool $force
     */
    public function setForce(?bool $force): void
    {
        $this->force = $force;
    }
}
