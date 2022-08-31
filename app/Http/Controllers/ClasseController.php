<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClasseRequest;
use App\Http\Requests\UpdateClasseRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ClasseRepository;
use Illuminate\Http\Request;
use Flash;

class ClasseController extends AppBaseController
{
    /** @var ClasseRepository $classeRepository*/
    private $classeRepository;

    public function __construct(ClasseRepository $classeRepo)
    {
        $this->classeRepository = $classeRepo;
    }

    /**
     * Display a listing of the Classe.
     */
    public function index(Request $request)
    {
        $classes = $this->classeRepository->paginate(10);

        return view('classes.index')
            ->with('classes', $classes);
    }

    /**
     * Show the form for creating a new Classe.
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created Classe in storage.
     */
    public function store(CreateClasseRequest $request)
    {
        $input = $request->all();

        $classe = $this->classeRepository->create($input);

        Flash::success('Classe saved successfully.');

        return redirect(route('classes.index'));
    }

    /**
     * Display the specified Classe.
     */
    public function show($id)
    {
        $classe = $this->classeRepository->find($id);

        if (empty($classe)) {
            Flash::error('Classe not found');

            return redirect(route('classes.index'));
        }

        return view('classes.show')->with('classe', $classe);
    }

    /**
     * Show the form for editing the specified Classe.
     */
    public function edit($id)
    {
        $classe = $this->classeRepository->find($id);

        if (empty($classe)) {
            Flash::error('Classe not found');

            return redirect(route('classes.index'));
        }

        return view('classes.edit')->with('classe', $classe);
    }

    /**
     * Update the specified Classe in storage.
     */
    public function update($id, UpdateClasseRequest $request)
    {
        $classe = $this->classeRepository->find($id);

        if (empty($classe)) {
            Flash::error('Classe not found');

            return redirect(route('classes.index'));
        }

        $classe = $this->classeRepository->update($request->all(), $id);

        Flash::success('Classe updated successfully.');

        return redirect(route('classes.index'));
    }

    /**
     * Remove the specified Classe from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $classe = $this->classeRepository->find($id);

        if (empty($classe)) {
            Flash::error('Classe not found');

            return redirect(route('classes.index'));
        }

        $this->classeRepository->delete($id);

        Flash::success('Classe deleted successfully.');

        return redirect(route('classes.index'));
    }
}
