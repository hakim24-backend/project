<form action="{{route('frontend.search')}}" method="post">
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content">
            <div class="container-try">
                @csrf
                <input name="search" type="text" placeholder="Search...">
              <div class="search-try"></div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
      <!-- /.modal-dialog -->
    </div>
  </form>