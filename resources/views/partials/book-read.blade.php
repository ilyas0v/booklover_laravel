@auth
<div class="modal fade" id="myModal" role="dialog" style="z-index:10000000">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Book</h4>
        </div>
        <div class="modal-body">
          <embed src="{{asset('storage/'.$pdf)}}#toolbar=0" width="100%" height="400">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@else
  <div class="modal fade" id="myModal" role="dialog" style="z-index:10000000">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p>You have to login to read this book</p>
            <a href="{{route('login')}}" class="btn btn-success">Login</a>
          </div>
        </div>
      </div>
    </div>
@endauth
