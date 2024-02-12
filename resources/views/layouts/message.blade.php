<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-exclamation-triangle"></i>
                Message
                </h3>
            </div>
            <div class="card-body">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i></h5>
                    @if($msg == 1) User Created.
                    @elseif($msg == 2) User Updated.
                    @elseif($msg == 3) User Deleted.
                    @else User ???
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>