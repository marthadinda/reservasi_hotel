<div class="modal fade" id="modalDelete" data-backdrop="static" data-keyboard="false" tabindex="-1"
  <div class="modal-dialog modal-sm">
    <form class="modal-content" method="post" action="#">
        @method('delete')
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span> 
        </button>
      </div>
      <div class="modal-body">
        Apakah yakin akan dihapus!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
      </div>
    </form>
  </div>
</div>