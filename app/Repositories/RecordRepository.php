<?php


namespace App\Repositories;


use App\AudioRecord;

class RecordRepository
{
    public function getAll() {
        $records = AudioRecord::query()
            ->join('authors', 'authors.id', '=', 'audio_records.author_id')
            ->select('audio_records.*', 'authors.first_name', 'authors.last_name')
            ->orderBy('id')
            ->paginate(10);
        return $records;
    }

}