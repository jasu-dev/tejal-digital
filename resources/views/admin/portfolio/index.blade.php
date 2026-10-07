@extends('layouts.admin')
@section('title', 'Portfolio')
@section('page-title', 'Portfolio Manager')
@section('breadcrumbs') Admin / Portfolio @endsection

@section('content')
<div class="space-y-4">
    {{-- Header --}}
    <div class="flex items-center justify-between">
        <p class="text-sm text-zinc-500">{{ $items->total() }} item(s) total</p>
        <a href="{{ route('admin.portfolio.create') }}"
           class="inline-flex items-center gap-2 bg-[#D64523] hover:bg-[#bf3d1f] text-white text-sm font-medium px-4 py-2 rounded-xl transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
            </svg>
            Add New
        </a>
    </div>

    {{-- Table --}}
    <div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden">
        @if($items->isEmpty())
            <div class="text-center py-16 text-zinc-400">
                <svg class="w-10 h-10 mx-auto mb-3 opacity-40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <p class="text-sm">No portfolio items yet.</p>
                <a href="{{ route('admin.portfolio.create') }}" class="text-sm text-[#D64523] hover:underline mt-1 inline-block">Add your first item</a>
            </div>
        @else
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-zinc-50 border-b border-zinc-200">
                    <tr>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider">Title</th>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider hidden sm:table-cell">Category</th>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider">Status</th>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider hidden md:table-cell">Order</th>
                        <th class="text-right px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @foreach($items as $item)
                    <tr class="hover:bg-zinc-50 transition-colors">
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-3">
                                @if($item->image_path)
                                    <img src="{{ Storage::disk('public')->url($item->image_path) }}" alt="" class="w-10 h-8 object-cover rounded-lg">
                                @else
                                    <div class="w-10 h-8 rounded-lg bg-gradient-to-br {{ $item->gradient }} flex items-center justify-center text-xs text-zinc-500 font-bold">
                                        {{ strtoupper(substr($item->title, 0, 2)) }}
                                    </div>
                                @endif
                                <div>
                                    <p class="font-medium text-zinc-900 truncate max-w-[180px]">{{ $item->title }}</p>
                                    <p class="text-xs text-zinc-400">/portfolio/{{ $item->slug }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-4 hidden sm:table-cell text-zinc-600">{{ $item->category }}</td>
                        <td class="px-5 py-4">
                            <form action="{{ route('admin.portfolio.toggle-status', $item) }}" method="POST">
                                @csrf @method('PATCH')
                                <button type="submit" class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-medium {{ $item->status->badgeClass() }} hover:opacity-75 transition-opacity">
                                    {{ $item->status->label() }}
                                </button>
                            </form>
                        </td>
                        <td class="px-5 py-4 hidden md:table-cell text-zinc-500">{{ $item->sort_order }}</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ $item->detail_url }}" target="_blank"
                                   class="p-1.5 rounded-lg text-zinc-400 hover:text-zinc-700 hover:bg-zinc-100 transition-colors" title="View">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                </a>
                                <a href="{{ route('admin.portfolio.edit', $item) }}"
                                   class="p-1.5 rounded-lg text-zinc-400 hover:text-blue-600 hover:bg-blue-50 transition-colors" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </a>
                                <form action="{{ route('admin.portfolio.destroy', $item) }}" method="POST"
                                      onsubmit="return confirm('Delete {{ addslashes($item->title) }}? This cannot be undone.');">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-1.5 rounded-lg text-zinc-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="Delete">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>

    {{-- Pagination --}}
    @if($items->hasPages())
        <div class="flex justify-end">{{ $items->links() }}</div>
    @endif
</div>
@endsection

