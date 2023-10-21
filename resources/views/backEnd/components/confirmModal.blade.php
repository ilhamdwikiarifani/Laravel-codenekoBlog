{{-- Modal Delete --}}
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-3 shadow">
            <div class="modal-body p-4 text-center">
                @csrf
                @method('DELETE')
                <h5 class="mb-0">Delete</h5>
                <p class="mb-0">Are you sure you want to real delete.
                </p>
            </div>
            <div class="modal-footer flex-nowrap p-0">
                <button type="submit"
                    class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 border-end"><strong>Yes,
                        Sure</strong></button>
                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0"
                    data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal End --}}