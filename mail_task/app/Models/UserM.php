<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserM extends Model{

    use HasFactory;

    protected $table = "customer";

    public $timestamps = false;

    protected $primaryKey = 'ID';

}
?>

