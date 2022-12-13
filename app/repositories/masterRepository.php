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

class masterRepository implements masterRepositoryInterface{
    public function getAllMasterTableColumns(){
        $data['appoinmentOrder']    = staffMasterAppoinmentOrder::all();
        $data['attendanceScheme']   = staffMasterAttendanceScheme::all();
        $data['BloodGroup']         = staffMasterBloodGroup::all();
        $data['Caste']              = staffMasterCaste::all();
        $data['ClassHandling']      = staffMasterClassHandling::all();
        $data['Community']          = staffMasterCommunity::all();
        $data['Department']         = staffMasterDepartment::all();
        $data['Designation']        = staffMasterDesignation::all();
        $data['InstitutionType']    = staffMasterInstitutionType::all();
        $data['LanguagesKnown']     = staffMasterLanguagesKnown::all();
        $data['Level']              = staffMasterLevel::all();
        $data['MaritalStatus']      = staffMasterMaritalStatus::all();
        $data['NatureOfEmployment'] = staffMasterNatureOfEmployment::all();
        $data['PlaceOfWork']        = staffMasterPlaceOfWork::all();
        $data['Religion']           = staffMasterReligion::all();
        $data['ReportingManager']   = staffMasterReportingManager::all();
        $data['Category']           = staffMasterStaffCategory::all();
        $data['Subject']            = staffMasterSubject::all();
        $data['TeachingType']       = staffMasterTeachingType::all();
        // $datas=[];
        // array_push($datas,$data);
        return $data;
    }
} 
