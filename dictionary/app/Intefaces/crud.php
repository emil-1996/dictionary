<?php

namespace App\Intefaces;

use Illuminate\Http\Request;

interface crud
{
    public function index();
    public function show($id);
    public function changeStatus($id);
    public function add(Request $request);
    public function edit(Request $request);
    public function delete($id);
}

