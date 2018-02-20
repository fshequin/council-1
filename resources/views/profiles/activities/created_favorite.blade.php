@component('profiles.activities.activity')
    @slot('heading')
        <i class="mr-2 text-right fas fa-star"></i>
        <a class="text-blue-dark hover:text-blue" href="{{ $activity->subject->favorited->path() }}">
            {{ $profileUser->name }} favorited a reply.
        </a>
    @endslot

    @slot('body')
        {!! $activity->subject->favorited->body !!}
    @endslot
@endcomponent
