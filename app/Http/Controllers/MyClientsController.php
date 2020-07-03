<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMyClientsRequest;
use App\Http\Requests\UpdateMyClientsRequest;
use App\Repositories\MyClientsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MyClientsController extends AppBaseController
{
    /** @var  MyClientsRepository */
    private $myClientsRepository;

    public function __construct(MyClientsRepository $myClientsRepo)
    {
        $this->myClientsRepository = $myClientsRepo;
    }

    /**
     * Display a listing of the MyClients.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $myClients = $this->myClientsRepository->all();

        return view('my_clients.index')
            ->with('myClients', $myClients);
    }

    /**
     * Show the form for creating a new MyClients.
     *
     * @return Response
     */
    public function create()
    {
        return view('my_clients.create');
    }

    /**
     * Store a newly created MyClients in storage.
     *
     * @param CreateMyClientsRequest $request
     *
     * @return Response
     */
    public function store(CreateMyClientsRequest $request)
    {
        $input = $request->all();

        $myClients = $this->myClientsRepository->create($input);

        Flash::success('My Clients saved successfully.');

        return redirect(route('myClients.index'));
    }

    /**
     * Display the specified MyClients.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $myClients = $this->myClientsRepository->find($id);

        if (empty($myClients)) {
            Flash::error('My Clients not found');

            return redirect(route('myClients.index'));
        }

        return view('my_clients.show')->with('myClients', $myClients);
    }

    /**
     * Show the form for editing the specified MyClients.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $myClients = $this->myClientsRepository->find($id);

        if (empty($myClients)) {
            Flash::error('My Clients not found');

            return redirect(route('myClients.index'));
        }

        return view('my_clients.edit')->with('myClients', $myClients);
    }

    /**
     * Update the specified MyClients in storage.
     *
     * @param int $id
     * @param UpdateMyClientsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMyClientsRequest $request)
    {
        $myClients = $this->myClientsRepository->find($id);

        if (empty($myClients)) {
            Flash::error('My Clients not found');

            return redirect(route('myClients.index'));
        }

        $myClients = $this->myClientsRepository->update($request->all(), $id);

        Flash::success('My Clients updated successfully.');

        return redirect(route('myClients.index'));
    }

    /**
     * Remove the specified MyClients from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $myClients = $this->myClientsRepository->find($id);

        if (empty($myClients)) {
            Flash::error('My Clients not found');

            return redirect(route('myClients.index'));
        }

        $this->myClientsRepository->delete($id);

        Flash::success('My Clients deleted successfully.');

        return redirect(route('myClients.index'));
    }
}
