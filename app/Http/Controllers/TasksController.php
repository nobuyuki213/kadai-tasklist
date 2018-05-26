<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * タスク一覧リストページ
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $tasks = $user->tasks()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'tasks' => $tasks
                ];
            $data += $this->counts($user);
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     * タスク新規作成ページ
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = new Task;
        return view('tasks.create', ['task' => $task]);
    }

    /**
     * Store a newly created resource in storage.
     * タスク新規作成実行
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'content' => 'required|max:191',
            // 'status' => 'required',
            ]);
        $request->user()->tasks()->create([
            'content' => $request->content,
            ]);
        // $task = new Task;
        // $task->content = $request->content;
        // $task->status = $request->status;
        // $task->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     * タスク詳細ページ
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show',['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     * タスク編集ページ
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        
        if (\Auth::user()->id === $task->user_id) {
            return view('tasks.edit', ['task' => $task]);
        }else {
            return redirect('/');
        }
        
    }

    /**
     * Update the specified resource in storage.
     * タスク更新実行
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        if (\Auth::user()->id === $task->user_id) {
            
            $this->validate($request,[
                'content' => 'required|max:191',
                // 'status' => 'required',
                ]);
            $task = Task::find($id);
            $task->content = $request->content;
            // $task->status = $request->status;
            $task->save();
            return redirect('/');
        }else {
            return redirect('/');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     * タスク削除実行
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        if (\Auth::user()->id === $task->user_id) {
            $task->delete();
        }
        
        return redirect('/');
    }
}
