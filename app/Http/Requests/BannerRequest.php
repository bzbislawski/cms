<?php

namespace App\Http\Requests;

use App\Banner;

class BannerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $banner = Banner::find($this->banner);

        switch ($this->method()) {
            case 'PATCH':
            {
                return ['title' => 'required'];
            }
            default:
            {
                return [
                    'title' => 'required',
                    'image' => 'required',
                ];
                break;
            }
        }
    }

    /**
     * DISABLED FOR MEMORY
     * Overwrites default error messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //'title.required' => 'Brakuje: tytułu',
            //'image.required' => 'Brakuje: obrazu',
        ];
    }
}
