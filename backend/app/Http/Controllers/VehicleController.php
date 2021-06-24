<?php

namespace App\Http\Controllers;

//use App\Models\Vehicle;
use App\Services\VehicleService;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    protected $vehicleService;

    public function __construct(VehicleService $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle = $this->vehicleService->all();

        return response()->json($vehicle->toArray(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = $this->vehicleService->save($request->all());

        if (!$response) {
            return response()->json(['error' => $response], 422);
        }

        return response()->json('Veículo inserido!', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $vehicle = $this->vehicleService->find($id);

        return response()->json($vehicle->toArray(), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $response = $this->vehicleService->update($request->all());

        if (!$response) {
            return response()->json(['error' => $response], 422);
        }

        return response()->json('Veículo atualizado!', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $this->vehicleService->destroy($id);

        return response()->json('Veículo excluído!', 200);
    }
}
