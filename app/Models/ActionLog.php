<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionLog extends Model
{
    public $timestamps = false;
    protected $table = 'action_logs';

    public function setLog($params, $result) {
        $this->operationType = $params['expression'];
        $this->log = $params['a'] . $params['expression'] . $params['b'] . '=' . $result;
        $this->save();
    }
}
