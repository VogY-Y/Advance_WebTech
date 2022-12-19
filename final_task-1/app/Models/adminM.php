<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class adminM extends Model{

    use HasFactory;

    protected $table = "admin";

    public $timestamps = false;

    protected $primaryKey = 'admin_id';

}
?>