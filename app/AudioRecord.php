<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rule;

class AudioRecord extends Model
{
    protected $fillable = ['title', 'author_id', 'release_year'];

    public static function rules(AudioRecord $audioRecord)
    {
        return [
            'title' => [
                'required',
                Rule::unique('audio_records')->ignore($audioRecord->id)
            ],
            'release_year' => [
                'required',
                'integer',
                'max:' . date('Y'),
                'min:1950'
            ]

        ];
    }
}
