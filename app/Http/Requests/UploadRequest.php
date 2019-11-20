<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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

//        $rules = [
//            'file' => 'txt|size:5000'
//        ];

        $photos = count($this->input('files'));
//        var_dump($photos);

        foreach(range(0, $photos) as $index) {
            $rules['files.' . $index] = 'txt|max:3000';
        }

        return $rules;



    }
}
