@extends('layouts.writer')
@section('content')
  you are logged to the writers account
  <form method="POST" action="{{ route('logout') }}">
      @csrf

      <x-dropdown-link :href="route('logout')"
                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
          {{ __('Log Out') }}
      </x-dropdown-link>
  </form>
@endsection
