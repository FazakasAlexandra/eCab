<?php

namespace App\Models;

use CodeIgniter\Model;

class ExaminationsModel extends Model
{
    protected $table = 'examinations';
    protected $primaryKey = 'id';
    protected $allowedFields = ['examination', 'price'];

    public function getExaminations()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('examinations');
        $query = $builder->get()->getResult('array');
        return $query;
    }

    function getExaminationPrice($examId){
        $db = \Config\Database::connect();
        $builder = $db->table('examinations');

        $exam = $builder->where('id',$examId)->get()->getRowObject();
        return $exam->price;
    }
}
