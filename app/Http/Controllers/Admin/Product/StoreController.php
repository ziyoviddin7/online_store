<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Product\BaseController;
use App\Http\Requests\Admin\Product\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($request, $data);

        return redirect()->route('admin.product.create')->with('success', 'Товар успешно создан.');
    }
}
