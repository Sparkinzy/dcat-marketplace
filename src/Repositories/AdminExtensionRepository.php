<?php

namespace Sparkinzy\DcatMarketPlace\Repositories;

use Dcat\Admin\Repositories\EloquentRepository;
use Sparkinzy\DcatMarketPlace\Models\AdminExtensionRepository as Model;

class AdminExtensionRepository extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
