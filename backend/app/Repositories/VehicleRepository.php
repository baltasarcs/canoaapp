<?php

namespace App\Repositories;

use App\Models\Vehicle;
use App\Repositories\BaseRepository;

class VehicleRepository extends BaseRepository
{
    protected $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        parent::__construct($vehicle);
    }
}
