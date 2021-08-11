<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCasesListRequest;
use App\Http\Requests\StoreCasesListRequest;
use App\Http\Requests\UpdateCasesListRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CasesListController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cases_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.casesLists.index');
    }

    public function create()
    {
        abort_if(Gate::denies('cases_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.casesLists.create');
    }

    public function store(StoreCasesListRequest $request)
    {
        $casesList = CasesList::create($request->all());

        return redirect()->route('admin.cases-lists.index');
    }

    public function edit(CasesList $casesList)
    {
        abort_if(Gate::denies('cases_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.casesLists.edit', compact('casesList'));
    }

    public function update(UpdateCasesListRequest $request, CasesList $casesList)
    {
        $casesList->update($request->all());

        return redirect()->route('admin.cases-lists.index');
    }

    public function show(CasesList $casesList)
    {
        abort_if(Gate::denies('cases_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.casesLists.show', compact('casesList'));
    }

    public function destroy(CasesList $casesList)
    {
        abort_if(Gate::denies('cases_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $casesList->delete();

        return back();
    }

    public function massDestroy(MassDestroyCasesListRequest $request)
    {
        CasesList::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}