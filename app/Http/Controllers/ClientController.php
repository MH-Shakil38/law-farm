<?php

namespace App\Http\Controllers;

use App\Http\Requests\client\StoreRequest;
use App\Http\Requests\client\UpdateRequest;
use App\Models\CaseType;
use App\Models\Client;
use App\Models\ClientFile;
use App\Models\User;
use App\Services\ActivityLogService;
use App\Services\CaseService;
use App\Services\ClientService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function PHPSTORM_META\type;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $clientService;
    protected $caseService;
    public function __construct(ClientService $clientService,CaseService $caseService){
         $this->clientService = $clientService;
         $this->caseService = $caseService;
         return $this;
    }
    public function index(Request $request)
    {
        $data['caseTypes'] = $this->caseService->getCaseType();
        $data['clients'] = $this->clientService->getAll(true);
        // $log_data = activity_data('Access Client Info',)
        // ActivityLogService::LogInfo('Client');
        if ($request->ajax()) {
            $data = $this->clientService->ajaxClientInfo($data);
            return response()->json($data);
        }
        return view('admin.client.list')->with($data);
    }


    public function create()
    {
        $data['caseTypes'] = $this->caseService->getCaseType();
        return view('admin.client.craete')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try{
            DB::beginTransaction();
            $data = $request->validated();
            $store = $this->clientService->storeClient($data);
            DB::commit();
            return redirect()->back()->with('success','Successfully Client Created');
        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error','Error Client Created',$e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
       $data = $this->clientService->getClient($client);
        return view('admin.client.details')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $data = $this->clientService->getClient($client);
        return view('admin.client.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Client $client)
    {
        try{
            DB::beginTransaction();

            $info = $this->clientService->updateClient($client);
            DB::commit();
            return redirect()->route('clients.show',$info->id)->with('success','Successfully Client Updated');
        }catch(\Throwable $e){
            DB::rollBack();
            $this->errorDD($e);
            return redirect()->back()->with('error','Error Client Created',$e);
        }
    }

    public function fileStore(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx,jpg,jpeg',
        ]);
        try{
            DB::beginTransaction();
            $this->clientService->fileStore();
            DB::commit();
            return redirect()->back()->with('success','Successfully File Uploaded');
        }catch(\Throwable $e){
                DB::rollBack();
                $this->errorDD($e);
                return redirect()->back()->with('error','Error Client Created',$e);
            }
    }

    public function import(Request $request){
        // dd($request->all());
        try{
            DB::beginTransaction();
            $request->validate(['file' =>'required']);
            $file = $request->file('file');
            $filePath = $file->getRealPath();
            $data = array_map('str_getcsv', file($filePath));
            if (!empty($data)) {
                $header = $data[0]; // Assuming the first row is the header
                unset($data[0]); // Remove the header from data
                foreach ($data as $row) {
                    $rowData = array_combine($header, $row);
                    $data = [
                        'name' => $row[0].' '. $rowData['CLIENT\'S LAST NAME'],
                        'first_name' => $row[0],
                        'last_name' => $rowData['CLIENT\'S LAST NAME'],
                        'email' => $rowData['E-MAIL'] ??  $row[0].'@gmail.com',
                        'phone' => $rowData['PHONE'], // Phone Number
                        'phone2' => $rowData['PHONE'], // Phone Number
                        'address' =>  $rowData['CLIENT\'S ADDRES'], // Address CLIENT'S ADDRES
                        'city' => $rowData['CITY'], // City
                        'state' => $rowData['STATE'], // State
                        'zip_code' => $rowData['ZIP CODE'], // Postal Code
                        'country' => $rowData['COUNTRY'] ?? null, // Country
                        'case_type' => $this->caseType($rowData['TYPE CASE']), // Case Type (assuming a case_types table)
                        'case_number' => $rowData['CASE NUMBER'] ?? null, // Case Number
                        'case_details' => $rowData['CASE DETAILS'] ?? null, // Case Details
                        'short_details' => $rowData['SHORT DESCRIPTION'] ?? null, // Short Details
                        'date_of_birth' => Carbon::createFromFormat('m/d/Y', $rowData['CLIENT\'S DATE OF BIRTH'])->format('Y-m-d'), // Date of Birth
                        'nationality' => $rowData['NATIONALITY'] ?? null, // Nationality
                        'passport_number' => $rowData['PASSPORT NUMBER'] ?? null, // Passport Number
                        'status' => $rowData['OFFICE STATUS'] == 'ACTIVE' ? 1 : 0, // Status
                        'image' => NULL,
                        'ref_by' => $rowData['REF BY'] ?? null,
                        'gender' => $rowData['GENDER'] ?? null, // Gender
                        'marrital_status' => $rowData['MARRITAL STATUS'] ?? null,
                        'direction' => $rowData['DIRECTION'] ?? null,
                        'lawyer_id' => $this->checkLawyer($rowData['PARALEGAL IN CHARGE']),
                        'hearing_date' =>$rowData['HEARING DATE'] ?? null ,
                        'hearing_time' => $rowData['HEARING TIME'] ?? null,
                        'last_update' => $rowData['LAST UPDATES'] ?? NULL,
                    ];
                    if(Client::query()->where('name',$data['name'])->where('email',$data['email'])->where('phone',$data['phone'])->exists()){
                        dd(123);
                    }else{
                       $client = Client::create($data);
                    }
                }
            }
            DB::commit();
            return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        } catch (\Throwable $e) {
            dd($e);
        }
    }

    public function caseType($type){
        if($type){
            $exists = CaseType::query()->where('name',$type)->exists();
            if($exists == true){
                $casetype = CaseType::query()->where('name',$type)->first();
                return $casetype->id;
            }else{
                $casetype = CaseType::query()->create(['name'=>$type]);
                return $casetype->id;
            }
        }else{
            return null;
        }

    }

    public function checkLawyer($lawyer){
        if($lawyer){
            $exists = User::query()->where('name',$lawyer)->where('user_type',3)->exists();
            if($exists == true){
                $user = User::query()->where('name',$lawyer)->first();
                return $user->id;
            }else{
                $user = User::query()->create([
                        'name'=>$lawyer,
                        'user_type'=>3,
                        'email'=>$lawyer.'@gmail.com',
                        'password'=>bcrypt($lawyer),
                        ]);
                return $user->id;
            }
        }else{
            return null;
        }

    }
}
