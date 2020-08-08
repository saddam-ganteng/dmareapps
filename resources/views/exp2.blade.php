@extends('layout.main')
@section('content')
<div class="album text-muted">

    <div class="container p-4 text-monospace" style="background-color: white">
        <div class="card-deck">
            <div class="card">
                <img src="http://localhost:8000/assets/img/serti.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Sertifikat</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg">Large modal</button>

                        
                    </small>
                </div>
            </div>
            <div class="card">
                <img src="http://localhost:8000/assets/img/kunjin.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">This card has suppor</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
<div class="modal fade bd-example-modal-lg">
    <div class="modal-dialog bd-example-modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>