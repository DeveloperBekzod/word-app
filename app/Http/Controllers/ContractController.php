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
        return view('contract');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContractRequest $request)
    {
        $request->validated();
        $docPattern   = storage_path('app/public/шартнома янги.docx');
        $pathToSave   = storage_path('app/public/Contracts.docx');
        $replacements = [
            [
                'contract_number'        => 7777,
                'contract_date'          => date('d.m.Y'),
                'person'                 => $request->input('person'),
                'passport'               => $request->input('passport'),
                'passport_date'          => date('d.m.Y', strtotime($request->input('passport_date'))),
                'givenBy'                => $request->input('givenBy'),
                'address'                => $request->input('address'),
                'phone'                  => $request->input('phone'),
                'product'                => $request->input('product'),
                'amount'                 => $request->input('amount'),
                'total'                  => $request->input('total'),
                'description'            => $request->input('description'),
                'buyer'                  => $request->input('buyer'),
                'buyer_passport'         => $request->input('buyer_passport'),
                'buyer_passport_givenBy' => $request->input('buyer_passport_givenBy'),
                'buyer_passport_date'    => date('d.m.Y', strtotime($request->input('passport_date'))),
                'buyer_address'          => $request->input('buyer_address'),
                'buyer_description'      => $request->input('buyer_description'),
                'paymentDate1'           => date('d.m.Y', strtotime($request->input('paymentDate1'))),
                'paymentAmount1'         => $request->input('paymentAmount1'),
                'paymentDate2'           => date('d.m.Y', strtotime($request->input('paymentDate2'))),
                'paymentAmount2'         => $request->input('paymentAmount2'),
                'paymentDate3'           => date('d.m.Y', strtotime($request->input('paymentDate3'))),
                'paymentAmount3'         => $request->input('paymentAmount3'),
                'paymentDate4'           => date('d.m.Y', strtotime($request->input('paymentDate4'))),
                'paymentAmount4'         => $request->input('paymentAmount4'),
                'paymentDate5'           => date('d.m.Y', strtotime($request->input('paymentDate5'))),
                'paymentAmount5'         => $request->input('paymentAmount5'),
                'paymentDate6'           => date('d.m.Y', strtotime($request->input('paymentDate6'))),
                'paymentAmount6'         => $request->input('paymentAmount6'),
                'paymentDate7'           => date('d.m.Y', strtotime($request->input('paymentDate7'))),
                'paymentAmount7'         => $request->input('paymentAmount7'),
                'paymentDate8'           => date('d.m.Y', strtotime($request->input('paymentDate8'))),
                'paymentAmount8'         => $request->input('paymentAmount8'),
                'paymentDate9'           => date('d.m.Y', strtotime($request->input('paymentDate9'))),
                'paymentAmount9'         => $request->input('paymentAmount9'),
                'paymentDate10'          => date('d.m.Y', strtotime($request->input('paymentDate10'))),
                'paymentAmount10'        => $request->input('paymentAmount10'),
                'paymentDate11'          => date('d.m.Y', strtotime($request->input('paymentDate11'))),
                'paymentAmount11'        => $request->input('paymentAmount11'),
                'paymentDate12'          => date('d.m.Y', strtotime($request->input('paymentDate12'))),
                'paymentAmount12'        => $request->input('paymentAmount12'),
            ],
        ];

        if (file_exists($docPattern)) {
            $templateProcessor = new TemplateProcessor($docPattern);
            $templateProcessor->cloneBlock('mainBLock', 0, true, false, $replacements);
            $templateProcessor->saveAs($pathToSave);
        }

        return redirect()->route('contract')->with('message', 'Contract successfully documented');
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
}
