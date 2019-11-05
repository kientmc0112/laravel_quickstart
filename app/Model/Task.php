<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
    ];

    public function search($id)
    {
        try {
            $task = Task::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            session()->flash('delete', 'Not successful!');
        }
        return $task;
    }
}
