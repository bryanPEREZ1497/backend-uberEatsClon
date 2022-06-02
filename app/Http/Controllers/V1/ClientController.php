<?php

namespace App\Http\Controllers\V1;

use App\Exceptions\ClientNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Clients\DestroyClientRequest;
use App\Http\Requests\V1\Clients\StoreClientRequest;
use App\Http\Requests\V1\Clients\UpdateClientRequest;
use App\Http\Resources\V1\Clients\ClientCollection;
use App\Http\Resources\V1\Clients\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

  public function __construct()
  {
    $this->middleware('role:admin|client|delivery');
  }
  public function index()
  {
    return new ClientCollection(Client::paginate());
  }

  public function store(StoreClientRequest $request)
  {

    $client = new Client();
    $client->address = $request->input('address');
    $client->payment_method = $request->input('paymentMethod');
    $client->save();

    return response()->json(
      [
        'data' => $client,
        'msg' => [
          'summary' => 'consulta correcta',
          'detail' => 'Se creo correctamente',
          'code' => '201'
        ]
      ],
      201
    );
  }

  public function show($user)
  {
    // return $user;
    $client = DB::select('select * from app.clients where user_id =?', [$user]);
    return response()->json(
      [
        'data' => $client,
        'msg' => [
          'summary' => 'Obtenido correctamente',
          'detail' => 'Cliente obtenido exitosamente',
          'code' => '201'
        ]
      ],
      201
    );
  }

  public function update(UpdateClientRequest $request,  Client $client)
  {
    $client->address = $request->input('address');
    $client->payment_method = $request->input('paymentMethod');
    $client->save();

    return response()->json(
      [
        'data' => $client,
        'msg' => [
          'summary' => 'consulta correcta',
          'detail' => 'Se actualizo correctamente ',
          'code' => '201'
        ]
      ],
      201
    );
  }

  public function destroy(Client $client)
  {
    $client->delete();
    return response()->json(
      [
        'data' => $client,
        'msg' => [
          'summary' => 'consulta correcta',
          'detail' => 'Se elimino correctamente ',
          'code' => '201'
        ]
      ],
      201
    );
  }

  public function destroys(DestroyClientRequest $request)
  {
    Client::destroy($request->input('ids'));

    return response()->json(
      [
        'data' => null,
        'msg' => [
          'summary' => 'Cliente/s Eliminado/s',
          'detail' => '',
          'code' => '201'
        ]
      ],
      201
    );
  }

  public function updateClient($id)
  {
    $clients = 'Bodega1';
    return response()->json(
      [
        'data' => $clients,
        'msg' => [
          'summary' => 'consulta correcta',
          'detail' => 'Se actualizo el estado correctamente ',
          'code' => '201'
        ]
      ],
      201
    );
  }
}
