@if (Session::has('error'))
    <div id="toast-container" class="toast-top-center" aria-live="polite" role="alert">
        <div class="toast toast-error">
            <button class="toast-close-button" role="button">×</button>
            <div class="toast-title">Error!</div>
            <div class="toast-message">{{session('error')}}</div>
        </div>
    </div>

@endif

@if (Session::has('success'))

    <div id="toast-container" class="toast-top-center" aria-live="polite" role="alert">
        <div class="toast toast-success">
            <button class="toast-close-button" role="button">×</button>
            <div class="toast-title">Success</div>
            <div class="toast-message">{{session('success')}}</div>
        </div>
    </div>
@endif

@if (Session::has('warning'))

    <div id="toast-container" class="toast-top-center" aria-live="polite" role="alert">
        <div class="toast toast-warning">
            <button class="toast-close-button" role="button">×</button>
            <div class="toast-title">Warning!</div>
            <div class="toast-message">{{session('warning')}}</div>
        </div>
    </div>
@endif
{{--<script>--}}

    {{--setTimeout(function(){--}}
        {{--var msg =  document.getElementById("toast-container");--}}
        {{--msg.close() }, 3000);--}}
    {{--</script>--}}