<form action="{{ route('location-manage-add') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="location_name">Email</label>
                                                    <input type="text" class="form-control" name="email">
                                                </div>
                                            </div>

                                 
                                          <br>

                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="name">Name</label>
                                                    <input type="text" class="form-control" name="test">
                                                </div>
                                            </div>



                                          
                                    <hr class="my-4" />
                                    <input type="submit" value="เพิ่ม" class="btn btn-success " style="margin-left: 40%">
                                
                                </form>