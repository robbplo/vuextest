<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Ramsey\Uuid\Uuid;

trait Uuids
{
    /**
     * Binds creating/saving events to create UUIDs (and also prevent them from being overwritten).
     *
     * @return void
     */
    protected static function bootUuids()
    {
        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });

        static::saving(function ($model) {
            $originalId = $model->getOriginal('id');

            if ($originalId !== $model->id) {
                $model->id = $originalId;
            }
        });
    }

}
