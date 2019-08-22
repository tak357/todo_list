<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFolder;

class FolderController extends Controller
{
    public function showCreateForm()
    {
        return view('folders/create');
    }

    public function create(CreateFolder $request)
    {
        $folder = new Folder();

        // タイトルに入力値を代入する
        $folder->title = $request->title;

        // インスタンスの状態をデータベースに書き込む
        $folder->save();

        // return redirect('tasks.index', // この記述方法でもOK
        return redirect()->route('tasks.index',
        [
            'id' => $folder->id,
        ]);
    }
}
