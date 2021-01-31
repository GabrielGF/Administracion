{{--@canany(['view-questions', 'edit-questions', 'delete-questions'])--}}
    <div class="dropdown">
        <a class="btn btn-outline-primary dropdown-toggle px-2" href="#" role="button" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-list"></i>
            <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" role="menu">
{{--            @can('view-questions')--}}
                <a class="dropdown-item" href="{{ route('backend.role.index', ['id' => $role->id]) }}" data-toggle="tooltip" data-placement="bottom" title="@lang(':verb :description', ['verb' => __('Show'), 'description' => $role->description])">
                    <i class="fas fa-fw fa-eye"></i> @lang('Show')
                </a>
{{--            @endcan--}}
{{--            @can('edit-questions')--}}
                <a class="dropdown-item" href="{{ route('backend.role.edit', ['id' => $role->id]) }}" data-toggle="tooltip" data-placement="bottom" title="@lang('Edit :description', ['description' => $role->description])">
                    <i class="fas fa-fw fa-edit"></i> @lang('Edit')
                </a>
{{--            @endcan--}}
{{--            @if(!$question->users_count)--}}
{{--                @can('delete-questions')--}}
{{--                    <a class="dropdown-item" data-target="#destroy-form-{{ $role->id }}" href="{{ route('frontend.question.destroy', $role->id) }}" title="{{ __('Delete :description', ['name' => $role->description]) }}"--}}
{{--                       onclick="event.preventDefault(); $($(this).data('target')).submit();"--}}
{{--                    >--}}
{{--                        <i class="fas fa-fw fa-eraser"></i> @lang('Delete')--}}
{{--                    </a>--}}
{{--                    <form id="destroy-form-{{ $question->id }}" method="POST" action="{{ route('frontend.question.destroy', $question->id) }}" style="display: none;">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                    </form>--}}
{{--                @endcan--}}
{{--            @endif--}}
        </div>
    </div>
{{--@endcanany--}}
