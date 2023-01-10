<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCipoHirdetesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //$table->string("gyarto",12)->nullable(false);
            //            $table->string("nev",12)->nullable(false);
            //            $table->string("szin",12)->nullable(false);
            //            $table->string("nem",5)->nullable(false);
            //            $table->integer("meret")->nullable(false);
            //            $table->integer("ar")->nullable(false);
            //            $table->dateTime("lejarat")->nullable(false);
            //            $table->integer("aktiv")->nullable(false);

        ];
    }
}
