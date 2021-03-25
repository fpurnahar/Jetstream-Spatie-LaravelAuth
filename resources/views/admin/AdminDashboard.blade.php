@extends('admin.layouts.main')

@sectionMissing('navigation')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        @include('admin.layouts.menuAdmin')
    </aside>
@endif

@section('directed', '/admin')
    
@section('title', 'Welcome Admin')

@section('content')
     <!-- Small boxes (Stat box) -->
     <div class="card">
        <div class="card-header">
          <h3 class="card-title">@yield('title')</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Start creating your amazing application <strong style="color: red">{{ Auth::user()->name}}</strong>!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
@endsection