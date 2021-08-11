<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPatientRecordRequest;
use App\Http\Requests\StorePatientRecordRequest;
use App\Http\Requests\UpdatePatientRecordRequest;
use App\Models\PatientRecord;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PatientRecordController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('patient_record_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = PatientRecord::query()->select(sprintf('%s.*', (new PatientRecord())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'patient_record_show';
                $editGate = 'patient_record_edit';
                $deleteGate = 'patient_record_delete';
                $crudRoutePart = 'patient-records';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('pi_1', function ($row) {
                return $row->pi_1 ? $row->pi_1 : '';
            });
            $table->editColumn('department', function ($row) {
                return $row->department ? PatientRecord::DEPARTMENT_SELECT[$row->department] : '';
            });
            $table->editColumn('state_status', function ($row) {
                return $row->state_status ? PatientRecord::STATE_STATUS_SELECT[$row->state_status] : '';
            });
            $table->editColumn('position', function ($row) {
                return $row->position ? PatientRecord::POSITION_SELECT[$row->position] : '';
            });
            $table->editColumn('unit', function ($row) {
                return $row->unit ? PatientRecord::UNIT_SELECT[$row->unit] : '';
            });
            $table->editColumn('employment_info', function ($row) {
                return $row->employment_info ? $row->employment_info : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.patientRecords.index');
    }

    public function create()
    {
        abort_if(Gate::denies('patient_record_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patientRecords.create');
    }

    public function store(StorePatientRecordRequest $request)
    {
        $patientRecord = PatientRecord::create($request->all());

        return redirect()->route('admin.patient-records.index');
    }

    public function edit(PatientRecord $patientRecord)
    {
        abort_if(Gate::denies('patient_record_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patientRecords.edit', compact('patientRecord'));
    }

    public function update(UpdatePatientRecordRequest $request, PatientRecord $patientRecord)
    {
        $patientRecord->update($request->all());

        return redirect()->route('admin.patient-records.index');
    }

    public function show(PatientRecord $patientRecord)
    {
        abort_if(Gate::denies('patient_record_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patientRecords.show', compact('patientRecord'));
    }

    public function destroy(PatientRecord $patientRecord)
    {
        abort_if(Gate::denies('patient_record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $patientRecord->delete();

        return back();
    }

    public function massDestroy(MassDestroyPatientRecordRequest $request)
    {
        PatientRecord::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}