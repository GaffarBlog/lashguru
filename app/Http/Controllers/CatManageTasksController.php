<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CatManageTasks;

class CatManageTasksController extends Controller
{

    public function index()
    {
        return view('cat-manage-tasks');
    }

    public function store(request $request)
    {
        $cat_manage_tasks = Str::of($request->cwaddbc)->explode(',');
        if( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) && isset($_GET['levelfive']) && isset($_GET['levelsix']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_five_id = $_GET['levelfive'];
            $level_six_id = $_GET['levelsix'];
            foreach ($cat_manage_tasks as $cat_manage_tasks) {
                CatManageTasks::create([
                    'task_name' => $cat_manage_tasks,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                    'level_four' => $level_four_id,
                    'level_five' => $level_five_id,
                    'level_six' => $level_six_id,
                ]);
            }
            return redirect('cat-manage-tasks?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id . '&levelfour=' . $level_four_id . '&levelfive=' . $level_five_id . '&levelsix=' . $level_six_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) && isset($_GET['levelfive']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_five_id = $_GET['levelfive'];
            foreach ($cat_manage_tasks as $cat_manage_tasks) {
                CatManageTasks::create([
                    'task_name' => $cat_manage_tasks,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                    'level_four' => $level_four_id,
                    'level_five' => $level_five_id,
                ]);
            }
            return redirect('cat-manage-tasks?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id . '&levelfour=' . $level_four_id . '&levelfive=' . $level_five_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            foreach ($cat_manage_tasks as $cat_manage_tasks) {
                CatManageTasks::create([
                    'task_name' => $cat_manage_tasks,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                    'level_four' => $level_four_id,
                ]);
            }
            return redirect('cat-manage-tasks?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id . '&levelfour=' . $level_four_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            foreach ($cat_manage_tasks as $cat_manage_tasks) {
                CatManageTasks::create([
                    'task_name' => $cat_manage_tasks,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                ]);
            }
            return redirect('cat-manage-tasks?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            foreach ($cat_manage_tasks as $cat_manage_tasks) {
                CatManageTasks::create([
                    'task_name' => $cat_manage_tasks,
                    'level_two' => $level_two_id,
                ]);
            }
            return redirect('cat-manage-tasks?leveltwo=' . $level_two_id)->with('success', 'Category has been successfully added!');
        } else {
            foreach ($cat_manage_tasks as $cat_manage_tasks) {
                CatManageTasks::create([
                    'task_name' => $cat_manage_tasks,
                ]);
            }
            return redirect('cat-manage-tasks')->with('success', 'Category has been successfully added!');
        }
    }

    public function view()
    { 
        $count = [];
        if( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) && isset($_GET['levelfive']) && isset($_GET['levelsix']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_five_id = $_GET['levelfive'];
            $level_six_id = $_GET['levelsix'];
            $level_six = CatManageTasks::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id ], 
                    ['level_four', $level_four_id], 
                    ['level_five', $level_five_id], 
                    ['level_six', $level_six_id],
                ]
            )->get();
            return view('cat-manage-tasks', ['level_six' => $level_six]);
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) && isset($_GET['levelfive']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_five_id = $_GET['levelfive'];
            $level_five = CatManageTasks::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id], 
                    ['level_four', $level_four_id], 
                    ['level_five', $level_five_id], 
                    ['level_six', 0],
                ]
            )->get();
            foreach( $level_five as $category ) {
                $count[] = CatManageTasks::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->level_three], 
                        ['level_four', $category->level_four], 
                        ['level_five', $category->level_five], 
                        ['level_six', $category->id],
                    ]
                )->count();
            }
            return view('cat-manage-tasks', ['level_five' => $level_five, 'count' => $count]);
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_four = CatManageTasks::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id ], 
                    ['level_four', $level_four_id], 
                    ['level_five', 0], 
                    ['level_six', 0],
                ]
            )->get();
            foreach( $level_four as $category ) {
                $count[] = CatManageTasks::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->level_three], 
                        ['level_four', $category->level_four], 
                        ['level_five', $category->id], 
                        ['level_six', 0],
                    ]
                )->count();
            }
            return view('cat-manage-tasks', ['level_four' => $level_four, 'count' => $count]);
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_three = CatManageTasks::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id ], 
                    ['level_four', 0], 
                    ['level_five', 0], 
                    ['level_six', 0],
                ]
            )->get();
            foreach( $level_three as $category ) {
                $count[] = CatManageTasks::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->level_three], 
                        ['level_four', $category->id], 
                        ['level_five', 0], 
                        ['level_six', 0],
                    ]
                )->count();
            }
            return view('cat-manage-tasks', ['level_three' => $level_three, 'count' => $count]);
        } elseif( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_two = CatManageTasks::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', 0], 
                    ['level_four', 0], 
                    ['level_five', 0], 
                    ['level_six', 0],
                ] 
            )->get();
            foreach( $level_two as $category ) {
                $count[] = CatManageTasks::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->id], 
                        ['level_four', 0], 
                        ['level_five', 0], 
                        ['level_six', 0],
                    ]
                )->count();
            }
            return view('cat-manage-tasks', ['level_two' => $level_two, 'count' => $count]);
        } else {
            $cat_manage_tasks = CatManageTasks::where('level_two', 0)->get();
            foreach( $cat_manage_tasks as $category ) {
                $count[] = CatManageTasks::where( 
                    [
                        ['level_two', $category->id], 
                        ['level_three', 0], 
                        ['level_four', 0], 
                        ['level_five', 0], 
                        ['level_six', 0],
                    ]
                )->count();
            }
            return view('cat-manage-tasks', ['cat_manage_tasks' => $cat_manage_tasks, 'count' => $count]);
        }
    }

    public function destroy($id)
    {
        $current_category = CatManageTasks::where('id', $id)->first();
        if( $current_category->level_two == 0 && $current_category->level_three == 0 && $current_category->level_four == 0 && $current_category->level_five == 0 && $current_category->level_six == 0 ) {
            CatManageTasks::where('id', $id)->delete();
            CatManageTasks::where('level_two', $id)->delete();
        } elseif( $current_category->level_three == 0 && $current_category->level_four == 0 && $current_category->level_five == 0 && $current_category->level_six == 0 ) {
            CatManageTasks::where('id', $id)->delete();
            CatManageTasks::where('level_three', $id)->delete();
        } elseif( $current_category->level_four == 0 && $current_category->level_five == 0 && $current_category->level_six == 0 ) {
            CatManageTasks::where('id', $id)->delete();
            CatManageTasks::where('level_four', $id)->delete();
        } elseif( $current_category->level_five == 0 && $current_category->level_six == 0 ) {
            CatManageTasks::where('id', $id)->delete();
            CatManageTasks::where('level_five', $id)->delete();
        } elseif( $current_category->level_six == 0 ) {
            CatManageTasks::where('id', $id)->delete();
            CatManageTasks::where('level_six', $id)->delete();
        } else {
            CatManageTasks::where('id', $id)->delete();
        }

        return response()->json([
            'status' => true,
            'message' => 'Category successfully delted!',
        ]);

        return response()->json([
            'status' => false,
            'message' => "Failed to delete the category."
        ]);
    }

    public function edit($id)
    {
        $cat_manage_tasks  = CatManageTasks::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'cat_manage_tasks' => $cat_manage_tasks
        ]);
    }

    public function update(request $request , $id)
    {
        $cat_manage_tasks = CatManageTasks:: where('id', $id)->update([
            'task_name' => $request->catname,
        
        ]);
        if ($cat_manage_tasks) {
            return response()->json([
                'status' => true,
                'message' => "Category updated successfully."
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Failed to update the category."
        ]);
    }
}
