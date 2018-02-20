@component('profiles.activities.activity')
    @slot('heading')
        <i class="mr-2 text-right fas fa-comment"></i>
        {{ $profileUser->name }} replied to&nbsp;
        <a class="text-blue-dark hover:text-blue" href="{{ $activity->subject->thread->path() }}">"{{ $activity->subject->thread->title }}"</a>
    @endslot

    @slot('body')
        {!! $activity->subject->body !!}
    @endslot
@endcomponent
