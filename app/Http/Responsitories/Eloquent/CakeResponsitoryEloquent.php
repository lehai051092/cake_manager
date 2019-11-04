<?php


namespace App\Http\Responsitories\Eloquent;


use App\Cake;
use App\Http\Responsitories\CakeResponsitoryInterface;

class CakeResponsitoryEloquent implements CakeResponsitoryInterface
{
    protected $cake;
    public function __construct(Cake $cake)
    {
        $this->cake = $cake;
    }

    public function index()
    {
       return $this->cake->paginate(5);
    }

    public function findById($id)
    {
       return $this->cake->findOrFail($id);
    }

    public function save($obj)
    {
        return $obj->save();
    }

    public function delete($obj)
    {
        return $obj->delete();
    }

    public function search($request)
    {
        return $this->cake->where("nameCake","like","%$request%")->paginate(5);
    }
}
