<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        $tasks = (new TaskModel())->allByDate();

        return view('tasks', [
            'pageTitle'  => 'All tasks',
            'activePage' => 'tasks',
            'tasks'      => $tasks,
        ]);
    }
}
