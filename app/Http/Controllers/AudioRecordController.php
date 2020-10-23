<?php

namespace App\Http\Controllers;

use App\AudioRecord;
use App\Repositories\RecordRepository;
use Illuminate\Http\Request;

class AudioRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param RecordRepository $recordRepository
     * @return \Illuminate\Http\Response
     */
    public function index(RecordRepository $recordRepository)
    {
        $records = $recordRepository->getAll();
        return view('audio.index')->with('records', $records);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AudioRecord  $audioRecord
     * @return \Illuminate\Http\Response
     */
    public function show(AudioRecord $audioRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AudioRecord  $audioRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(AudioRecord $audioRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AudioRecord  $audioRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AudioRecord $audioRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AudioRecord  $audioRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(AudioRecord $audioRecord)
    {
        $audioRecord->delete();
        return redirect()->route('audio')->with('success', 'Запись удалена успешно!');
    }
}
