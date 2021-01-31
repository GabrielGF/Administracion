@extends('backend.layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed table-custom">
                        <thead>
                        <th style="width: 10%;" class="text-center">@lang('ID')</th>
                        <th>@lang('Description')</th>
                        <th style="width:10%;">@lang('Actions')</th>
                        </thead>
                        <tbody id="role-list">
                        @forelse($roles as $role)
                            <tr>
                                <td class="text-center">{{ $role->id }}</td>
                                <td>{{ $role->description }}</td>
                                <td class="text-center">
                                    @include('backend.role.shared.actions', ['role' => $role])
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="100%" class="text-center">
                                    @lang('No results found')
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="d-flex">--}}
{{--        <div class="mx-auto">--}}
{{--            {!! $roles->appends(Request::except('page'))->render() !!}--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
