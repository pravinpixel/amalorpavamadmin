<?php

namespace App\Http\Controllers;

use App\Interfaces\masterRepositoryInterface;
use Illuminate\Http\Request;

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
    public function users(){
       return view('pages.masters.pages.users');
    }
    public function roles(){
        return view('pages.masters.pages.roles');
    }
}
