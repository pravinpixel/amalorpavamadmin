<?php
namespace App\Interfaces;
use App\Repositories\masterRepository;

Interface masterRepositoryInterface {
    public function getAllMasterTableColumns();
    public function updateMasterTableColumnValues($array);
    public function updateStateFromMasterTables($array1);
    public function deleteValueFromMasterTable($req);
    public function createValueFromMasterTable($req);
}
