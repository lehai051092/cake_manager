<?php


namespace App\Http\Services;


interface CakeServiceInterface
{
    public function index();

    public function findById($id);

    public function update($request, $id);

    public function delete($id);

    public function add($request);

    public function search($request);
}
