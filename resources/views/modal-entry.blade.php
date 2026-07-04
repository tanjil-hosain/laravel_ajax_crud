        <div class="modal" id="myModal">
            <div class="modal-dialog">
                 <form  id="studentform" method="post">
                    @csrf
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Student</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">

                       
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter Name"
                                    name="name">
                                    <span class="text-danger error_text name_error"></span>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    name="email">
                                    <span class="text-danger error_text email_error"></span>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Address:</label>
                                <textarea name="address" id="email" class="form-control"></textarea>
                                <span class="text-danger error_text address_error"></span>
                            </div>

                     
                  
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" >Save</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
                 </form>
            </div>
        </div>
