<?php
/**
 * Created by PhpStorm.
 * User: victorpupim
 * Date: 11/4/16
 * Time: 5:19 PM
 */
namespace App\models;

use Illuminate\Database\Eloquent;

Class Investment extends Eloquent\Model {

    protected $fillable = ['clientid', 'fundid', 'moneyamount', 'date'];

}