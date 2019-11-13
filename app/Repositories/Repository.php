<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Repositories\IRepository;


class Repository implements IRepository
{
    // https://medium.com/employbl/use-the-repository-design-pattern-in-a-laravel-application-13f0b46a3dce
    // model property on class instances
    protected $model;

    // constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // get all instances of model
    public function readAll()
    {
        return $this->model->all();
    }
    // create a new record in the database
    public function create($data)
    {
        return $this->model->create($data);
    }
    // show the record with the given id
    public function read($id)
    {
        return $this->model->findOrFail($id);
    }
    // update record in the database
    public function update($data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }
    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    // get the associated model
    public function getModel()
    {
        return $this->model;
    }
    // set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }
    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }
}
