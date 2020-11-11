<!-- Add Book Modal -->
<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Book Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Book</h4>
            </div>
            <div class="modal-body">
                <form id="addBook" name="addBook" action="{{ route('read.store') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="txtName">Name:</label>
                        <input type="text" class="form-control" id="txtName" placeholder="Enter  Name" name="txtName">
                    </div>
                    <div class="form-group">
                        <label for="txtDescriptions">Descriptions</label>
                        <input type="text" class="form-control" id="txtDescriptions" placeholder="Enter Descriptions" name="txtDescriptions">
                    </div>
                    <div class="form-group">
                        <label for="txtUrl">Image</label>
                        <input type="file" class="form-control" id="txtUrl" placeholder="Enter Descriptions" name="txtUrl">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Update Book Modal -->
<div id="updateModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Book Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Book</h4>
            </div>
            <div class="modal-body">
                <form id="updateBook" name="updateBook" action="{{ route('read.update') }}" method="post">
                    <input type="hidden" name="hdnBookId" id="hdnBookId"/>
                    @csrf
                    <div class="form-group">
                        <label for="txtName">Name:</label>
                        <input type="text" class="form-control" id="txtName" placeholder="Enter First Name" name="txtName">
                    </div>
                    <div class="form-group">
                        <label for="txtDescriptions">Descriptions:</label>
                        <input type="text" class="form-control" id="txtDescriptions" placeholder="Enter Descriptions" name="txtDescriptions">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
