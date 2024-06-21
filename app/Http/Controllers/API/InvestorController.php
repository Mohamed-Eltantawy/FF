<?php



//namespace App\Http\Controllers\API;

/*use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investor; // استبدال Investor بالنموذج المناسب إذا لزم الأمر

class InvestorController extends Controller
{
    public function index()
    {
        $investors = Investor::all();
        return response()->json(['investors' => $investors]);
    }

    public function show($id)
    {
        $investor = Investor::findOrFail($id);
        return response()->json(['investor' => $investor]);
    }

    public function store(Request $request)
    {
        $investor = new Investor();
        $investor->name = $request->input('name');
        $investor->email = $request->input('email');
        $investor->password = $request->input('password');
        // أضف المزيد من الحقول هنا حسب احتياجاتك
        $investor->save();

        return response()->json(['investor' => $investor], 201); // 201 تعني Created
    }

    public function update(Request $request, $id)
    {
        $investor = Investor::findOrFail($id);
        $investor->name = $request->input('name');
        // أضف المزيد من الحقول هنا حسب احتياجاتك
        $investor->save();

        return response()->json(['investor' => $investor]);
    }

    public function destroy($id)
    {
        $investor = Investor::findOrFail($id);
        $investor->delete();

        return response()->json(['message' => 'Investor deleted successfully']);
    }
}*/







namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investor;

class InvestorController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:investors',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        // Create a new investor
        $investor = Investor::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        // Return a response
        return response()->json(['investor' => $investor], 201); // 201 means Created
    }
}
