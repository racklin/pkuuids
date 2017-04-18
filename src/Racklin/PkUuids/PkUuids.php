<?php

namespace Racklin\PkUuids;

use Ramsey\Uuid\Uuid;

/**
 * Trait PkUuids
 *
 * @package Racklin\PkUuids
 */
trait PkUuids
{
    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->getIncrementing() && empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
            }
        });
    }
}
