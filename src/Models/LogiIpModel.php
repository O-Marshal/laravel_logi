<?php
namespace Ckryo\Laravel\Http\Models;
use Illuminate\Database\Eloquent\Model;


class LogiIpModel extends Model
{
    protected $table = 'logi_ips';
    protected $connection = 'mysql';
    public $timestamps = false;
}