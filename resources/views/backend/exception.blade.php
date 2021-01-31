@extends('backend.layouts.app')

@section('content')

    @if(isset($e))
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>{{ $e }}</p>
                </div>

                <div class="col-md-8 offset-md-4">
                    <a id="btn-exception" class="btn btn-light btn-lg" href="#" role="button">Back</a>
                </div>

            </div>
        </div>
    @endif

{{--    <script>--}}
{{--        $(document).ready(function (){--}}

{{--            $('#btn-exception').on('click', function (e){--}}
{{--                e.preventDefault();--}}
{{--                console.log('click en el button')--}}
{{--                window.history.back();--}}
{{--            });--}}
{{--        })--}}
{{--    </script>--}}

@endsection
