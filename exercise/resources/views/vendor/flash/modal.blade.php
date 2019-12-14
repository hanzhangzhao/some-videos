<div id="flash-overlay-modal" class="modal fade {{ isset($modalClass) ? $modalClass : '' }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Notice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-2">
                        <i class="fa fa-info-circle fa-4x"></i>
                    </div>
                    <div class="col-sm-9">
                        {!! $body !!}
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
