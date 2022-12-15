<?php

namespace App\Http\Controllers;

use App\Interfaces\masterRepositoryInterface;
use App\Models\staffMasterBloodGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class masterController extends Controller
{
    private masterRepositoryInterface $masterRepository;
    public function __construct(masterRepositoryInterface $masterRepository){
        $this->masterRepository=$masterRepository;
    }
    public function index(){
        $masterTables= $this->masterRepository->getAllMasterTableColumns();
       return response()->json([
        'data'=>$masterTables
       ],200);
       
    }
    public function update(Request $req){
        $validator=Validator::make($req->data,[
            'name'=>'required | unique:'.$req->tableName.',name,'.$req->data['id'],
            'status'=>'required'
        ]);
        if($validator->fails()){
            return response()->json([
                'msg'=>'error',
                'errors'=>$validator->errors()->toArray()
            ],400);
        }
        else{
            $masterTables= $this->masterRepository->updateMasterTableColumnValues($req);
        }
        return response()->json([
            'msg'=>'updated'
        ],200);
    }
    public function stateChange(Request $req){
        $masterTables= $this->masterRepository->updateStateFromMasterTables($req);
        if($masterTables=='success'){
            return response()->json([
                'msg'=>'state updated'
            ],200);
        }
        else{
            return response()->json([
                'msg'=>'error made by dev'
            ],400);
        }
    }
    public function delete(Request $req){
        $masterTables= $this->masterRepository->deleteValueFromMasterTable($req);
        if($masterTables=='success'){
            return response()->json([
                'msg'=>'row deleted'
            ],200);
        }
        else{
            return response()->json([
                'msg'=>'error made by dev'
            ],400);
        }
    }
    public function create(Request $req){
        $validator=Validator::make($req->value,[
            'name'=>'required | unique:'.$req->tableName.',name',
        ]);
        if($validator->fails()){
            return response()->json([
                'msg'=>'error',
                'errors'=>$validator->errors()->toArray()
            ],400);
        }
        else{
            $masterTables= $this->masterRepository->createValueFromMasterTable($req);
        }
        if($masterTables=='success'){
            return response()->json([
                'msg'=>'row created'
            ],200);
        }
        else{
            return response()->json([
                'msg'=>'error made by dev'
            ],400);
        }
    }
    public function users(){
       return view('pages.masters.pages.users');
    }
    public function roles(){
        return view('pages.masters.pages.roles');
    }
}
