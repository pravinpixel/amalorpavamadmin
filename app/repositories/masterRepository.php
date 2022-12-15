<?php
namespace App\Repositories;

use App\Interfaces\masterRepositoryInterface;
use App\Models\staffMasterAppoinmentOrder;
use App\Models\staffMasterAttendanceScheme;
use App\Models\staffMasterBloodGroup;
use App\Models\staffMasterCaste;
use App\Models\staffMasterClassHandling;
use App\Models\staffMasterCommunity;
use App\Models\staffMasterDepartment;
use App\Models\staffMasterDesignation;
use App\Models\staffMasterInstitutionType;
use App\Models\staffMasterLanguagesKnown;
use App\Models\staffMasterLevel;
use App\Models\staffMasterMaritalStatus;
use App\Models\staffMasterNatureOfEmployment;
use App\Models\staffMasterPlaceOfWork;
use App\Models\staffMasterReligion;
use App\Models\staffMasterReportingManager;
use App\Models\staffMasterStaffCategory;
use App\Models\staffMasterSubject;
use App\Models\staffMasterTeachingType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class masterRepository implements masterRepositoryInterface{
    public function getAllMasterTableColumns(){
        $data[]    = [ 
            "table_name" => "Appoinment Order",
            "table_slug" => "staff_master_appoinment_orders",
            "table_data" => staffMasterAppoinmentOrder::all()
        ];
        $data[]    = [ 
            "table_name" => "Attendance Scheme",
            "table_slug" => "staff_master_attendance_schemes",
            "table_data" => staffMasterAttendanceScheme::all()
        ];
        $data[]    = [ 
            "table_name" => "Blood Group",
            "table_slug" => "staff_master_blood_groups",
            "table_data" => staffMasterBloodGroup::all()
        ];
        $data[]    = [ 
            "table_name" => "Caste",
            "table_slug" => "staff_master_castes",
            "table_data" => staffMasterCaste::all()
        ];
        $data[]    = [ 
            "table_name" => "Class Handling",
            "table_slug" => "staff_master_class_handlings",
            "table_data" => staffMasterClassHandling::all()
        ];
        $data[]    = [ 
            "table_name" => "Community",
            "table_slug" => "staff_master_communities",
            "table_data" => staffMasterCommunity::all()
        ];
        $data[]    = [ 
            "table_name" => "Department",
            "table_slug" => "staff_master_departments",
            "table_data" => staffMasterDepartment::all()
        ];
        $data[]    = [ 
            "table_name" => "Designation",
            "table_slug" => "staff_master_designations",
            "table_data" => staffMasterDesignation::all()
        ];
        $data[]    = [ 
            "table_name" => "Institution Type",
            "table_slug" => "staff_master_institution_types",
            "table_data" => staffMasterInstitutionType::all()
        ];
        $data[]    = [ 
            "table_name" => "Languages Known",
            "table_slug" => "staff_master_languages_knowns",
            "table_data" => staffMasterLanguagesKnown::all()
        ];
        $data[]    = [ 
            "table_name" => "Level",
            "table_slug" => "staff_master_levels",
            "table_data" => staffMasterLevel::all()
        ];
        $data[]    = [ 
            "table_name" => "Marital Status",
            "table_slug" => "staff_master_marital_statuses",
            "table_data" => staffMasterMaritalStatus::all()
        ];
        $data[]    = [ 
            "table_name" => "Nature Of Employment",
            "table_slug" => "staff_master_nature_of_employments",
            "table_data" => staffMasterNatureOfEmployment::all()
        ];
        $data[]    = [ 
            "table_name" => "Place Of Work",
            "table_slug" => "staff_master_place_of_works",
            "table_data" => staffMasterPlaceOfWork::all()
        ];
        $data[]    = [ 
            "table_name" => "Religion",
            "table_slug" => "staff_master_religions",
            "table_data" => staffMasterReligion::all()
        ];
        $data[]    = [ 
            "table_name" => "Reporting Manager",
            "table_slug" => "staff_master_reporting_managers",
            "table_data" => staffMasterReportingManager::all()
        ];
        $data[]    = [ 
            "table_name" => "Category",
            "table_slug" => "staff_master_staff_categories",
            "table_data" => staffMasterStaffCategory::all()
        ];
        $data[]    = [ 
            "table_name" => "Subject",
            "table_slug" => "staff_master_subjects",
            "table_data" => staffMasterSubject::all()
        ];
        $data[]    = [ 
            "table_name" => "Teaching Type",
            "table_slug" => "staff_master_teaching_types",
            "table_data" => staffMasterTeachingType::all()
        ];

        return $data;
    }
    public function updateMasterTableColumnValues($reqs){
        $table = DB::table($reqs->tableName)->where('id',$reqs->data['id'])->update([
            'name'    => $reqs->data['name'],
            'status'  => $reqs->data['status'],
            'orderBy' => $reqs->data['orderBy'],
        ]); 
            return $table;
    }
    public function updateStateFromMasterTables($req){
        $table = DB::table($req->tableName)->where('id',$req->id)->update([
            'status'  => $req->stateTo,
        ]); 
        if($table){
            return 'success';
        }
        return 'error';
    }
    public function deleteValueFromMasterTable($reqs){
        $table = DB::table($reqs->tableName)->where('id',$reqs->id)->delete();
        if($table){
            return 'success';
        }
        else{
            return 'error';
        }
    }
    public function createValueFromMasterTable($req){
        $table = DB::table($req->tableName)->insert(
            [
                'name'=>$req->value['name'],
                'status'=>'1'
            ]
        );
        if($table){
            return 'success';
        }
        else{
            return 'error';
        }
    }
} 
