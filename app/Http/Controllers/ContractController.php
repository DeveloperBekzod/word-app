<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\UpdateContractRequest;
use App\Models\Contract;
use App\Models\PaymentSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use PhpOffice\PhpWord\TemplateProcessor;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = (count(Schema::getColumnListing('payment_schedules')) - 4) / 2;
        return view('contract', compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        /* $requestData  = $request->validate([
            'contract_number'        => "required|numeric",
            'contract_date'          => "required|date",
            'person'                 => "required|string|max:255",
            'passport'               => 'required|max:10|min:9',
            'passport_date'          => 'required|date',
            'givenBy'                => 'required|string|max:255',
            'address'                => 'required|string',
            'phone'                  => 'required',
            'product'                => 'required|string|max:255',
            'amount'                 => 'required|numeric',
            'total'                  => 'required|numeric',
            'description'            => 'required|string',
            'buyer'                  => 'required|string|max:255',
            'buyer_passport'         => 'required|max:10|min:9',
            'buyer_passport_givenBy' => 'required|string|max:255',
            'buyer_passport_date'    => 'required|date',
            'buyer_address'          => 'required|string',
            'buyer_description'      => 'required|string',
            'paymentDate1' => 'required|date',
            'paymentAmount1' => 'required|numeric',
            'paymentDate2' => 'required|date',
            'paymentAmount2' => 'required|numeric',
            'paymentDate3' => 'required|date',
            'paymentAmount3' => 'required|numeric',
            'paymentDate4' => 'required|date',
            'paymentAmount4' => 'required|numeric',
            'paymentDate5' => 'required|date',
            'paymentAmount5' => 'required|numeric',
            'paymentDate6' => 'required|date',
            'paymentAmount6' => 'required|numeric',
            'paymentDate7' => 'required|date',
            'paymentAmount7' => 'required|numeric',
            'paymentDate8' => 'required|date',
            'paymentAmount8' => 'required|numeric',
            'paymentDate9' => 'required|date',
            'paymentAmount9' => 'required|numeric',
            'paymentDate10' => 'required|date',
            'paymentAmount10' => 'required|numeric',
            'paymentDate11' => 'required|date',
            'paymentAmount11' => 'required|numeric',
            'paymentDate12' => 'required|date',
            'paymentAmount12' => 'required|numeric',
        ]);
        $contract     = Contract::query()->create($requestData);
        $data         = $contract->getAttributes();
        $requestData['contract_id'] = $data['id'];
        $payment     = PaymentSchedule::query()->create($requestData);
        $paymentData = $payment->getAttributes();
        foreach ($paymentData as $key => $value) {
            if (strpos($key, 'Date')) {
                $paymentData[$key] = date('d.m.Y', strtotime($paymentData[$key]));
            }
        }
        $replacements = [
            [
                'contract_number'        => $requestData['contract_number'],
                'contract_date'          => date('d.m.Y', strtotime($requestData['contract_date'])),
                'person'                 => $data['person'],
                'passport'               => $data['passport'],
                'passport_date'          => date('d.m.Y', strtotime($data['passport_date'])),
                'givenBy'                => $data['givenBy'],
                'address'                => $data['address'],
                'phone'                  => $data['phone'],
                'product'                => $data['product'],
                'amount'                 => $data['amount'],
                'total'                  => $data['total'],
                'description'            => $data['description'],
                'buyer'                  => $data['buyer'],
                'buyer_passport'         => $data['buyer_passport'],
                'buyer_passport_givenBy' => $data['buyer_passport_givenBy'],
                'buyer_passport_date'    => date('d.m.Y', strtotime($data['passport_date'])),
                'buyer_address'          => $data['buyer_address'],
                'buyer_description'      => $data['buyer_description'],
                ...$paymentData,
            ],
        ];

        12 talik grafik uchun
        $docPattern = storage_path('app/local/шартнома янги.docx');
        $pathToSave = storage_path('app/public/Contract.docx');
        if (file_exists($docPattern)) {
            $templateProcessor = new TemplateProcessor($docPattern);
            $templateProcessor->cloneBlock('mainBLock', 0, true, false, $replacements);
            $templateProcessor->saveAs($pathToSave);
        } */





        // Save with generated table
        $request->validate([
            'contract_number'        => "required|numeric",
            'contract_date'          => "required|date",
            'person'                 => "required|string|max:255",
            'passport'               => 'required|max:10|min:9',
            'passport_date'          => 'required|date',
            'givenBy'                => 'required|string|max:255',
            'address'                => 'required|string',
            'phone'                  => 'required',
            'product'                => 'required|string|max:255',
            'amount'                 => 'required|numeric',
            'price'                  => 'required|numeric',
            'total'                  => 'required|numeric',
            'description'            => 'required|string',
            'buyer'                  => 'required|string|max:255',
            'buyer_passport'         => 'required|max:10|min:9',
            'buyer_passport_givenBy' => 'required|string|max:255',
            'buyer_passport_date'    => 'required|date',
            'buyer_address'          => 'required|string',
            'buyer_description'      => 'required|string',
        ]);
        $requestData  = $request->all();
        $values = [
            'contract_number'        => $requestData['contract_number'],
            'contract_date'          => date('d.m.Y', strtotime($requestData['contract_date'])),
            'person'                 => $requestData['person'],
            'passport'               => $requestData['passport'],
            'passport_date'          => date('d.m.Y', strtotime($requestData['passport_date'])),
            'givenBy'                => $requestData['givenBy'],
            'address'                => $requestData['address'],
            'phone'                  => $requestData['phone'],
            'product'                => $requestData['product'],
            'price'                  => $requestData['price'],
            'amount'                 => $requestData['amount'],
            'product_amount'         => (int)$requestData['amount'] * (int)$requestData['price'],
            'total'                  => $requestData['total'],
            'description'            => $requestData['description'],
            'buyer'                  => $requestData['buyer'],
            'buyer_passport'         => $requestData['buyer_passport'],
            'buyer_passport_givenBy' => $requestData['buyer_passport_givenBy'],
            'buyer_passport_date'    => date('d.m.Y', strtotime($requestData['passport_date'])),
            'buyer_address'          => $requestData['buyer_address'],
            'buyer_description'      => $requestData['buyer_description'],
        ];
        $paymentSchedule = [];
        $next = date('d.m.Y', strtotime($requestData['contract_date']));
        for ($i = 1; $i <= (int)$requestData['payment_type']; $i++) {
            $next = date('d.m.Y', strtotime('+1 month', strtotime($next)));
            $paymentSchedule[$i - 1] = [
                'payment' => $i,
                'paymentDate' => $next,
                'paymentAmount' => round($requestData['total'] / (int)$requestData['payment_type'], 2),
            ];
        }
        $docPattern = storage_path('app/local/шартнома янги2.docx');
        $pathToSave = storage_path('app/public/Contract.docx');
        if (file_exists($docPattern)) {
            $templateProcessor = new TemplateProcessor($docPattern);
            $templateProcessor->setValues($values);
            $templateProcessor->cloneRowAndSetValues('payment', $paymentSchedule);
            $templateProcessor->saveAs($pathToSave);
        }


        // Save to DB
        $contract     = Contract::query()->create($requestData);
        $data         = $contract->getAttributes();
        foreach ($paymentSchedule as $key => $value) {
            $payment = PaymentSchedule::query()->create([
                'contract_id' => $data['id'],
                'paymentDate' => date('Y-m-d H:i:s', strtotime($value['paymentDate'])),
                'paymentAmount' => $value['paymentAmount'],
            ]);
        }

        return to_route('download')->with('message', 'Shartnoma muvaffaqqiyatli tuzildi !');
    }

    public function download()
    {
        return view('download');
    }
}
