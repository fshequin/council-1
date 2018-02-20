@extends('layouts.app')

@section('content')
    <div class="pb-10">
        <div class="mt-6 mb-0 pb-4">
            <avatar-form :user="{{ $profileUser }}"></avatar-form>
        </div>

        @forelse ($activities as $date => $activity)
            <h3 class="text-grey-darker text-left page-header mb-6 mt-8">{{ Carbon\Carbon::parse($date)->format('F d, Y') }}</h3>

            @foreach ($activity as $record)
                @if (view()->exists("profiles.activities.{$record->type}"))
                    @include ("profiles.activities.{$record->type}", ['activity' => $record])
                @endif
            @endforeach
        @empty
            <p>There is no activity for this user yet.</p>
        @endforelse
    </div>
@endsection