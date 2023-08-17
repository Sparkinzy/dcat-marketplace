<?php

namespace Sparkinzy\DcatExtensionClient\Repositories;

use Dcat\Admin\Repositories\EloquentRepository;
use Sparkinzy\DcatExtensionClient\Models\AdminExtensionRepository as Model;

class AdminExtensionRepository extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
