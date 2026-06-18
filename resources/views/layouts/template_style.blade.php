@extends('layouts.app-with-sidebar')

@section('title', isset($title) ? $title : 'SJG - Sistema Jurídico')
@section('breadcrumb', isset($breadcrumb) ? $breadcrumb : 'Sistema')

@section('content')
    @yield('content', $slot ?? '')
@endsection

<style>
@keyframes zoom {
    from { opacity: 0; transform: scale(0.9); }
    to   { opacity: 1; transform: scale(1); }
}
.animate-zoom { animation: zoom .25s ease-out; }
</style>

</body>
</html>
