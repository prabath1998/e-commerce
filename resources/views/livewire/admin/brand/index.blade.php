<div>

@include('livewire.admin.brand.modal-form')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Brand List
                        <a href="" class="btn btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#addBrandModal">Add Brands</a>
                    </h4>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@push('script')
<script>
    window.addEventListener('close-modal',event => {
        $('#addBrandModal').modal('hide');
    })
</script>
@endpush
