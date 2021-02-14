<?php

namespace App\Http\Controllers;

use App\Models\BankBranches;
use Illuminate\Http\Request;

class BankBranchesController extends Controller
{
    public function index(){
        $branches = BankBranches::all();
        // return $branches;
        return view('branches.branchList', compact('branches'));
    }

    public function edit($id){
        $branches = BankBranches::where('id', $id)->get();
        // return $branches;
        return view('branches.branchEdit', compact('branches'));
    }

    public function update(Request $request, $id){
        $branch = BankBranches::find($id);
        $branch->branch_name = $request->input('branch_name');
        $branch->branch_code = $request->input('branch_code');
        $branch->update();
        return redirect('');

    }
}
