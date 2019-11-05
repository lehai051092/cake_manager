<?php

namespace App\Http\Controllers;


use App\Http\Requests\CakesCreateRequest;
use App\Http\Requests\CakesEditRequest;
use App\Http\Services\CakeServiceInterface;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    protected $cakeService;

    public function __construct(CakeServiceInterface $cakeService)
    {
        $this->cakeService = $cakeService;
        $this->middleware('auth');
    }

    public function index()
    {
        $cakes = $this->cakeService->index();

        return view('cakes.list', compact('cakes'));
    }

    public function show()
    {
        $cakes = $this->cakeService->index();
        return view("cakes.index", compact('cakes'));
    }

    public function edit($id)
    {
        $cake = $this->cakeService->findById($id);
        return view("cakes.edit", compact("cake"));
    }

    public function update(CakesEditRequest $request, $id)
    {
        $this->cakeService->update($request, $id);
        return redirect()->route('cakes.index');
    }

    public function delete($id)
    {

        $this->cakeService->delete($id);
        return redirect()->route('cakes.index');
    }

    public function create()
    {
        return view("cakes.create");
    }

    public function add(CakesCreateRequest $request)
    {
        $this->cakeService->add($request);
        return redirect()->route("cakes.index");
    }

    public function search(Request $request)
    {
        $cakes = $this->cakeService->search($request);
        return view("cakes.list", compact("cakes"));
    }

    public function detail($id) {
        $cake =$this->cakeService->findById($id);
        return view("cakes.detail", compact("cake"));
    }

}
