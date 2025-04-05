@include('care.includes.header')

@yield('content')


@include('care.includes.footer')

@if (session()->has('alert_message'))
<div class="modal fade" id="alert-message-modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center alert alert-{{ session()->get('alert_message')['icon'] }}">
                    {{ session()->get('alert_message')['message'] }}
                </div>
                {{ session()->forget('alert_message') }}
            </div>
        </div>
    </div>
</div>
@endif



<script>
    $("#alert-message-modal").modal('show');
    $("#errors-modal").modal('show');
</script>