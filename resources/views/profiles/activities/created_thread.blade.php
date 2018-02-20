@component('profiles.activities.activity')
    @slot('heading')
        <div class="flex">
            <i class="mr-2 text-right fas fa-book"></i>
            {{ $profileUser->name }} published&nbsp;
            <a class="text-blue-dark hover:text-blue" href="{{ $activity->subject->path() }}">{{ $activity->subject->title }}</a>
        </div>
    @endslot

    @slot('body')
        {!! $activity->subject->body !!}
    @endslot
@endcomponent
