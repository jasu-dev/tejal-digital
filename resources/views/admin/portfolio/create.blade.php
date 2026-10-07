@extends('layouts.admin')
@section('title', 'Add Portfolio Item')
@section('page-title', 'Add Portfolio Item')
@section('breadcrumbs') <a href="{{ route('admin.portfolio.index') }}" class="hover:text-[#D64523]">Portfolio</a> / Add New @endsection

@section('content')
<div class="max-w-3xl">
    <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @include('admin.portfolio._form', ['portfolio' => null])
        <div class="flex items-center gap-3 pt-2">
            <button type="submit" class="bg-[#D64523] hover:bg-[#bf3d1f] text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition-colors">
                Save Portfolio Item
            </button>
            <a href="{{ route('admin.portfolio.index') }}" class="text-sm text-zinc-500 hover:text-zinc-700">Cancel</a>
        </div>
    </form>
</div>
@endsection

