<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Product\BaseController;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Product;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $updateRequest, Product $product)
    {
        $data = $updateRequest->validated();

        $this->service->update($product, $data);

        return redirect()->route('admin.product.show', $product->id)->with('success', 'Товар успешно изменен.');
    }
}
