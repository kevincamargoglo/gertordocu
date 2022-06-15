<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'file',
        'collection_name',
        'file_name',
        'file_type',
        'file_extension',
        'file_url',
        'file_departamento',
        'description',
        'created_by_id',
        'folder_id',
        'subfolder_id'
    ];
    public function subfolder(){
        return $this->belongsTo(Subfolder::class);
    }
}
