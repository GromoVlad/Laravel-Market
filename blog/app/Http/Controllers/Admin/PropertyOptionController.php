<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyOptionRequest;
use App\Model\Property;
use App\Model\PropertyOption;

class PropertyOptionController extends Controller
{
    public function index(Property $property)
    {
        $propertyOptions = PropertyOption::where('property_id', $property->id)->paginate(10);
        return view('auth.property_options.index', compact('propertyOptions', 'property'));
    }

    public function create(Property $property)
    {
        return view('auth.property_options.formCreate', compact('property'));
    }

    public function store(PropertyOptionRequest $request, Property $property)
    {
        $params = $request->all();
        $params['property_id'] = $request->property->id;
        PropertyOption::create($params);
        return redirect()->route('property_option.index', $property);
    }

    public function show(Property $property, PropertyOption $propertyOption)
    {
        return view('auth.property_options.show', compact('propertyOption'));
    }

    public function edit(Property $property, PropertyOption $propertyOption)
    {
        return view('auth.property_options.formUpdate', compact('property', 'propertyOption'));
    }

    public function update(Property $property, PropertyOption $propertyOption, PropertyOptionRequest $request)
    {
        $propertyOption->update($request->all());
        return redirect()->route('property_option.index', $property);
    }

    public function destroy(Property $property, PropertyOption $propertyOption)
    {
        $propertyOption->delete();
        return redirect()->route('property_option.index', $property);
    }
}
