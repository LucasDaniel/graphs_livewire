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
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i></h5>
                    {{ $error }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>