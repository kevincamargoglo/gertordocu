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
        'folder_id'
    ];
    public function files(){
        return $this->belongsTo(Folder::class);
    }
}
