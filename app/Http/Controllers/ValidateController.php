<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFormRequest;


class ValidateController extends Controller
{
    public function index()
    {
        return view('form-validate');
    }

    public function store(StoreFormRequest $request)
    {
        $data = $request->validated();
        $item = Item::create($data);
        return back();

    }
}
