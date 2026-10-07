<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\LeadStatus;
use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LeadsController extends Controller
{
    public function index(Request $request): View
    {
        $query = ContactRequest::latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search): void {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('service', 'like', "%{$search}%");
            });
        }

        $leads    = $query->paginate(20)->withQueryString();
        $statuses = LeadStatus::cases();

        return view('admin.leads.index', compact('leads', 'statuses'));
    }

    public function show(ContactRequest $lead): View
    {
        if ($lead->status === LeadStatus::New) {
            $lead->update(['status' => LeadStatus::Read]);
        }

        return view('admin.leads.show', compact('lead'));
    }

    public function updateStatus(Request $request, ContactRequest $lead): RedirectResponse
    {
        $request->validate([
            'status' => ['required', 'in:' . implode(',', array_column(LeadStatus::cases(), 'value'))],
        ]);

        $lead->update(['status' => $request->status]);

        return back()->with('success', 'Lead status updated.');
    }

    public function destroy(ContactRequest $lead): RedirectResponse
    {
        $lead->delete();
        return redirect()->route('admin.leads.index')->with('success', 'Lead deleted.');
    }
}
