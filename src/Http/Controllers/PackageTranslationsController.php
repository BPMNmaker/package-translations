<?php

namespace ProcessMaker\Package\Translations\Http\Controllers;

use Illuminate\Http\Request;
use ProcessMaker\Http\Controllers\Controller;
use ProcessMaker\Http\Resources\ApiCollection;
use ProcessMaker\Package\Translations\Models\Translatable;
use RBAC;
use URL;

class TranslationsController extends Controller
{
    public function index()
    {
        return view('package-translations::index');
    }

    public function fetch(Request $request)
    {
        $query = Translatable::query();

        $filter = $request->input('filter', '');
        if (!empty($filter)) {
            $filter = '%' . $filter . '%';
            $query->where(function ($query) use ($filter) {
                $query->Where('name', 'like', $filter);
            });
        }

        $order_by = $request->has('order_by') ? $order_by = $request->get('order_by') : 'name';
        $order_direction = $request->has('order_direction') ? $request->get('order_direction') : 'ASC';

        $response =
            $query->orderBy(
                $request->input('order_by', $order_by),
                $request->input('order_direction', $order_direction)
            )->paginate($request->input('per_page', 10));

        return new ApiCollection($response);
    }

    public function store(Request $request)
    {
        $sample = new Translatable();
        $sample->fill($request->json()->all());
        $sample->saveOrFail();

        return $sample;
    }

    public function update(Request $request, $license_generator)
    {
        Translatable::where('id', $license_generator)->update([
            'name' => $request->get('name'),
            'status' => $request->get('status'),
        ]);

        return response([], 204);
    }

    public function destroy($license_generator)
    {
        Translatable::find($license_generator)->delete();

        return response([], 204);
    }

    public function generate($license_generator)
    {
    }
}
