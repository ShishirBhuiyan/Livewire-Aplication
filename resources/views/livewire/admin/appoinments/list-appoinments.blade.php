<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            </div>

            <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="d-flex justify-content-between w-100">
                            <a href="{{ route("admin.appoinments.create") }}">
                                <button class="btn btn-dark">
                                    <i class="fas fa-plus text-danger m2-2"></i>
                                        <span>Add New Appoinments</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Status</th>
                                <th scope="col">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    
                                    <td>
                                        <a href="" wire:click.prevent="showEditUserModal()">
                                            <i class="fas fa-edit text-warning m2-2"></i>
                                        </a>
                                        <a href="" wire:click.prevent="showDeleteUserModal()">
                                            <i class="fas fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                       {{-- Laravel default paginating. This also required for livewire pagination --}}
                       {{-- {{ $users->links() }} --}}
                    </div>
                </div>
            </section>
            </div>
        </div>
    </section>

  <!-- Add New user modal Modal -->
    <!-- Modal -->

        <!-- Modal -->
        <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h3 class="">
                               Confirm Delete User !
                            </h3>
                        </div>
                        <div class="modal-body d-flex justify-content-center p-2">
                            <img src="{{ asset('image/danger.png') }}" height="150px" width="150px"alt="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Cancle</button>
                            <button  type="button" wire:click.prevent="confirmUserDelete" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Delete</button>
                        </div>
                    </div>
            </div>
          </div>
</div>


<script>
    // Open user add mdal
    window.addEventListener('Add_Edit_UserModalOpen', event =>{
        $('#add_Edit_UserForm').modal('show');
    });

    // Modal close when form is submitted
    window.addEventListener('Add_Edit_UserModalClose', event =>{
        $('#add_Edit_UserForm').modal('hide');

        // Show toast notification alert
        toastr.success(event.detail.message, 'Success!');
    });


    window.addEventListener('openConfirmDeleteModel', event =>{
            $('#deleteUserModal').modal('show');
    });

    window.addEventListener('hideDeleteUserModal', event =>{
            $('#deleteUserModal').modal('hide');
            toastr.success(event.detail.message, 'Success!');
    });

</script>