<?php


namespace App\Http\Services\Imp;


use App\Cake;
use App\Http\Responsitories\CakeResponsitoryInterface;
use App\Http\Services\CakeServiceInterface;
use Illuminate\Support\Facades\Storage;

class CakeServiceImp implements CakeServiceInterface
{
    protected $cakeResponsitory;

    public function __construct(CakeResponsitoryInterface $cakeResponsitory)
    {
        $this->cakeResponsitory = $cakeResponsitory;
    }

    public function index()
    {
        return $this->cakeResponsitory->index();
    }

    public function findById($id)
    {
        return $this->cakeResponsitory->findById($id);
    }

    public function update($request, $id)
    {

        $cake = $this->cakeResponsitory->findById($id);
        $cake->nameCake = $request->nameCake;
        $cake->priceCake = $request->priceCake;

        if ($request->imageCake) {
            $image = $request->file('imageCake');
            $path = $image->store("images", "public");
            Storage::delete('public/' . $cake->imageCake);
            $cake->imageCake = $path;
        }
        $cake->save();
    }

    public function delete($id)
    {
        $cake = $this->cakeResponsitory->findById($id);
        Storage::delete('public/' . $cake->imageCake);
        $this->cakeResponsitory->delete($cake);
    }

    public function add($request)
    {
        $cake = new Cake();
        $cake->nameCake = $request->nameCake;
        $cake->priceCake = $request->priceCake;

        if ($request->imageCake) {
            $image = $request->file('imageCake');
            $path = $image->store("images", "public");
            $cake->imageCake = $path;
        }
        $this->cakeResponsitory->save($cake);
    }

    public function search($request)
    {
        $data = $request->search;
       return $this->cakeResponsitory->search($data);
    }
}
