{{--
  Template Name: Blade Demo Template
--}}
@extends('layouts.app')

@section('content')
@while ('have_posts()') @php(the_post())
  <div class="template full-width-template no-header">
  @includeFirst(['partials.content-page','partials.content'])
  </div>
@endwhile
@endsection
