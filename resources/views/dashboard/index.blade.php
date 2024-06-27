@extends('layouts.main')
@section('page-title')
 dashboard
@endsection
@section('bread-crumb')
<li class="breadcrumb-item">asd</li>
<li class="breadcrumb-item">asd</li>
@endsection
@section('content')
  <div>
    <a href="#" class="btn btn-sm btn-primary"  title="{{__('Create New Journal')}}" data-url="{{ route('dashboard.create') }}" data-size="xl" data-bs-toggle="modal"  data-bs-target="#exampleModal">
        <i class="ti ti-plus"></i>
    </a>
</div>

@endsection
