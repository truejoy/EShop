<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface IRepository
{
    public function readAll();
    public function create($data);
    public function read($id);
    public function update($data, $id);
    public function delete($id);
}
