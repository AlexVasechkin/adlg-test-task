<?php

namespace Bukin\ProductsPackage\Vendors\Presentation\Http\Requests\Api\Resource;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;
use Bukin\ProductsPackage\Vendors\Application\Actions\Resource\Destroy\DestroyItemData;

class DestroyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [];
    }

    public function rules(): array
    {
        return [];
    }

    /**
     * @throws UnknownProperties
     */
    public function getDataObject(): ?DataTransferObject
    {
        return new DestroyItemData(
            id: $this->route('vendor')
        );
    }
}
