<?php

namespace FreddieGar\Base\Traits;

use Carbon\Carbon;
use FreddieGar\Base\Constants\BlameColumn;

/**
 * Trait BlameColumnsTrait
 * @package FreddieGar\Base\Traits
 */
trait BlameColumnsTrait
{
    /**
     * @param null $createdBy
     * @return $this|int
     */
    public function createdBy($createdBy = null)
    {
        if (func_num_args() > 0) {
            $this->{BlameColumn::CREATED_BY} = $createdBy;

            return $this;
        }

        return $this->{BlameColumn::CREATED_BY};
    }

    /**
     * @param null $updatedBy
     * @return $this|int
     */
    public function updatedBy($updatedBy = null)
    {
        if (func_num_args() > 0) {
            $this->{BlameColumn::UPDATED_BY} = $updatedBy;

            return $this;
        }

        return $this->{BlameColumn::UPDATED_BY};
    }

    /**
     * @param null $deletedBy
     * @return $this|int
     */
    public function deletedBy($deletedBy = null)
    {
        if (func_num_args() > 0) {
            $this->{BlameColumn::DELETED_BY} = $deletedBy;

            return $this;
        }

        return $this->{BlameColumn::DELETED_BY};
    }

    /**
     * @param null $createdAt
     * @return $this|Carbon
     */
    public function createdAt($createdAt = null)
    {
        if (func_num_args() > 0) {
            $this->{BlameColumn::CREATED_AT} = $createdAt;

            return $this;
        }

        return $this->{BlameColumn::CREATED_AT};
    }

    /**
     * @param null $updatedAt
     * @return $this|Carbon
     */
    public function updatedAt($updatedAt = null)
    {
        if (func_num_args() > 0) {
            $this->{BlameColumn::UPDATED_AT} = $updatedAt;

            return $this;
        }

        return $this->{BlameColumn::UPDATED_AT};
    }

    /**
     * @param null $deletedAt
     * @return $this|Carbon
     */
    public function deletedAt($deletedAt = null)
    {
        if (func_num_args() > 0) {
            $this->{BlameColumn::DELETED_AT} = $deletedAt;

            return $this;
        }

        return $this->{BlameColumn::DELETED_AT};
    }
}
