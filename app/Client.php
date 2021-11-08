<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    CONST TYPE_INDIVIDUAL = 'individual';
    CONST TYPE_LEGAL = 'legal';
    const MARITAL_STATUS = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];

    protected  $fillable = [
        'name',
        'document_number',
        'email',
        'phone',
        'defaulter',
        'date_birth',
        'sex',
        'marital_status',
        'physical_disability',
        'company_name',
        'client_type'
    ];

    public static function getClientType($type) {
        return $type == Client::TYPE_LEGAL ? $type : Client::TYPE_INDIVIDUAL;
    }
}

//$table->increments('id');
//$table->string('name');
//$table->string('document_number'); //modificar o tamanho do cfp/cnpj
//$table->string('email');
//$table->string('phone');
//$table->boolean('dafaulter'); // inadimplente
//$table->date('date_birth');
//$table->char('sex', 10);
//$table->enum('marital_status', array_keys(\App\Client::MARITAL_STATUS));
//$table->string('physical_disability')->nullable();