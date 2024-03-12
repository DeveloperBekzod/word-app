<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;
use App\Models\Contract;
use PhpOffice\PhpWord\TemplateProcessor;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contract');
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
    public function store(StoreContractRequest $request)
    {
        $request->validated();
        $docPattern   = storage_path('app/local/шартнома янги.docx');
        $pathToSave   = storage_path('app/public/Contract.docx');

        $requestData = $request->all();
        $contract =  Contract::create($requestData);
        $data = $contract->getAttributes();
        $replacements = [
            [
                'contract_number'        => $data['id'],
                'contract_date'          => date('d.m.Y', strtotime($data['created_at'])),
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
                'paymentDate1'           => date('d.m.Y', strtotime($data['paymentDate1'])),
                'paymentAmount1'         => $data['paymentAmount1'],
                'paymentDate2'           => date('d.m.Y', strtotime($data['paymentDate2'])),
                'paymentAmount2'         => $data['paymentAmount2'],
                'paymentDate3'           => date('d.m.Y', strtotime($data['paymentDate3'])),
                'paymentAmount3'         => $data['paymentAmount3'],
                'paymentDate4'           => date('d.m.Y', strtotime($data['paymentDate4'])),
                'paymentAmount4'         => $data['paymentAmount4'],
                'paymentDate5'           => date('d.m.Y', strtotime($data['paymentDate5'])),
                'paymentAmount5'         => $data['paymentAmount5'],
                'paymentDate6'           => date('d.m.Y', strtotime($data['paymentDate6'])),
                'paymentAmount6'         => $data['paymentAmount6'],
                'paymentDate7'           => date('d.m.Y', strtotime($data['paymentDate7'])),
                'paymentAmount7'         => $data['paymentAmount7'],
                'paymentDate8'           => date('d.m.Y', strtotime($data['paymentDate8'])),
                'paymentAmount8'         => $data['paymentAmount8'],
                'paymentDate9'           => date('d.m.Y', strtotime($data['paymentDate9'])),
                'paymentAmount9'         => $data['paymentAmount9'],
                'paymentDate10'          => date('d.m.Y', strtotime($data['paymentDate10'])),
                'paymentAmount10'        => $data['paymentAmount10'],
                'paymentDate11'          => date('d.m.Y', strtotime($data['paymentDate11'])),
                'paymentAmount11'        => $data['paymentAmount11'],
                'paymentDate12'          => date('d.m.Y', strtotime($data['paymentDate12'])),
                'paymentAmount12'        => $data['paymentAmount12'],
            ],
        ];

        if (file_exists($docPattern)) {
            $templateProcessor = new TemplateProcessor($docPattern);
            $templateProcessor->cloneBlock('mainBLock', 0, true, false, $replacements);
            $templateProcessor->saveAs($pathToSave);
        }

        return redirect()->route('download')->with('message', 'Shartnoma muvaffaqqiyatli tuzildi !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContractRequest $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
        //
    }

    public function download()
    {
        return view('download');
    }
}
