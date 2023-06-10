<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class InvoicesFilter extends ApiFilter {
    protected $safeParams = [
         'cutomerId' => ['eq'],
         'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
         'status' => ['eq', 'ne'],
         'billedDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
         'paidDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
    ];

    protected $columnMap = [
        'cutomerId' => 'customer_id',
        'billedDate' => 'build_date',
        'paidDate' => 'paid_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];

}