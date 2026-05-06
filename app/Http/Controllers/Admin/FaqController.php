<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq; // Correct model name (capital F, lowercase aq)
use App\Models\Service;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // FaqController.php

public function index()
{
    $faqs = FAQ::with('service')->paginate(10); // 10 FAQs per page
    return view('admin.faq.index', compact('faqs'));
}


    public function create()
    {
        $services = Service::all(); // Service list ko fetch karna
        return view('admin.faq.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Faq::create($request->all()); // Create FAQ

        return redirect()->route('admin.faq.index')->with('success', 'FAQ created successfully');
    }

    public function edit(Faq $faq)
    {
        $services = Service::all();
        return view('admin.faq.edit', compact('faq', 'services'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq->update($request->all());

        return redirect()->route('admin.faq.index')->with('success', 'FAQ updated successfully');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('admin.faq.index')->with('success', 'FAQ deleted successfully');
    }
}
