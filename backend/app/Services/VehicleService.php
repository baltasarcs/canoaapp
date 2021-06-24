<?php

namespace App\Services;

use App\Repositories\VehicleRepository;
use Illuminate\Support\Facades\Validator;

class VehicleService
{
    protected $vehicleRepository;

    public function __construct(VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    public function save(array $param)
    {
        $rules = [
            'veiculo'   => 'required|min:5|max:100',
            'marca'     => 'required',
            'ano'       => 'required',
            'descricao' => 'required|max:255',
            'vendido'   => 'required'
        ];

        $validator = Validator::make($param, $rules);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return $this->vehicleRepository->save($param);
    }

    public function update(array $param)
    {
        $rules = [
            'id'        => 'required',
            'veiculo'   => 'required|min:5|max:100',
            'marca'     => 'required',
            'ano'       => 'required',
            'descricao' => 'required|max:255',
            'vendido'   => 'required'
        ];

        $validator = Validator::make($param, $rules);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return $this->vehicleRepository->update($param['id'], $param);
    }

    public function destroy(int $id): bool
    {
        return $this->vehicleRepository->destroy($id);
    }

    public function all(): object
    {
        return $this->vehicleRepository->all();
    }

    public function find(int $id): object
    {
        return $this->vehicleRepository->find($id);
    }
}
