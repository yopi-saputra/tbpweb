<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    const STATUS_DRAFT = 0;
    const STATUS_SUBMITTED = 1;
    const STATUS_ACCEPTED = 2;
    const STATUS_REVISED = 3;
    const STATUS_REJECTED = 4;

    const STATUSES = [
        self::STATUS_DRAFT => 'Draft',
        self::STATUS_SUBMITTED => 'Submitted',
        self::STATUS_ACCEPTED => 'Diterima',
        self::STATUS_REVISED => 'Perlu Revisi',
        self::STATUS_REJECTED => 'Ditolak'
    ];

    public function proposal()
    {
        return $this->belongsTo(InternshipProposal::class, 'internship_proposal_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function getStatusTextAttribute($value){
        switch ($this->status){
            case self::STATUS_DRAFT:
                return "<span class=\"badge badge-secondary\">Draft</span>";
                break;
            case self::STATUS_SUBMITTED:
                return "<span class=\"badge badge-info\">Submitted</span>";
                break;
            case self::STATUS_ACCEPTED:
                return "<span class=\"badge badge-success\">Diterima</span>";
                break;
            case self::STATUS_REVISED:
                return "<span class=\"badge badge-warning\">Revised</span>";
                break;
            case self::STATUS_REJECTED:
                return "<span class=\"badge badge-danger\">Rejected</span>";
                break;
        }
    }
}
