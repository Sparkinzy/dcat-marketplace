<?php

namespace Sparkinzy\DcatExtensionClient\Repositories;

use Sparkinzy\DcatExtensionClient\Models\AdminExtensionRepository as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AdminExtensionRepository extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
