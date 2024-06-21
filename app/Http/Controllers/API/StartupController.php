<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Startup; // استبدال Startup بالنموذج المناسب إذا لزم الأمر
use App\Models\Investor; // استبدال Investor بالنموذج المناسب إذا لزم الأمر

class StartupController extends Controller
{
    public function index()
    {
        $startups = Startup::all();
        return response()->json(['startups' => $startups]);
    }

    public function show($id)
    {
        $startup = Startup::findOrFail($id);
        return response()->json(['startup' => $startup]);
    }

    public function store(Request $request)
    {
        $startup = new Startup();
        $startup->name = $request->input('name');
        // أضف المزيد من الحقول هنا حسب احتياجاتك
        $startup->save();

        return response()->json(['startup' => $startup], 201); // 201 تعني Created
    }

    public function update(Request $request, $id)
    {
        $startup = Startup::findOrFail($id);
        $startup->name = $request->input('founder_name');
        $startup->name = $request->input('name');
        $startup->email= $request->input('email');
        // أضف المزيد من الحقول هنا حسب احتياجاتك
        $startup->save();

        return response()->json(['startup' => $startup]);
    }

    public function destroy($id)
    {
        $startup = Startup::findOrFail($id);
        $startup->delete();

        return response()->json(['message' => 'Startup deleted successfully']);
    }
}

