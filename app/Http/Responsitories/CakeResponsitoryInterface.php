<?php


namespace App\Http\Responsitories;


interface CakeResponsitoryInterface
{
    public function index();

    public function findById($id);

    public function save($obj);

    public function delete($obj);

    public function search($obj);
}
