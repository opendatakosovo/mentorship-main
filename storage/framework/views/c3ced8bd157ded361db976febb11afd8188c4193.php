
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card bg-blue order-card">
                                        <div class="card-block">
                                            <h6>Projects Assigned Total</h6>
                                            <h2 class="text-right"><i class="fas fa-chart-pie pull-left"></i><span>486</span></h2>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                    
                                        
                                            
                                            
                                            
                                        
                                    
                                
                                
                                    
                                        
                                            
                                            
                                            
                                        
                                    
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Projects</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fas fa-chevron-left"></i></li>
                                                    <li><i class="fas fa-window-maximize full-card"></i></li>
                                                    <li><i class="fas fa-minus minimize-card"></i></li>
                                                    <li><i class="fas fa-times close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <table class="table" id="myTable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Project Name</th>
                                                    <th scope="col">Start Date</th>
                                                    <th scope="col">End Date</th>
                                                    <th scope="col">Local Mentor</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>
                                                        
                                                        
                                                        <button type="button" class="btn btn-warning">View Members</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                    <td>
                                                        
                                                        
                                                        <button type="button" class="btn btn-warning">View Members</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                    <td>
                                                        
                                                        
                                                        <button type="button" class="btn btn-warning">View Members</button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                  <div class="card">
                                    <div class="card-block">
                                  <div class="short-cut-wrap">
                                                  <h2>Account</h2>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <a href="<?php echo e(guard_url('profile')); ?>">
                                                              <div class="short-cut-item">
                                                                  <div class="icon"><i class="far fa-user-circle"></i></div>
                                                                  <div class="body">
                                                                      <h4>Account details</h4>
                                                                      <p>Edit your account details</p>
                                                                  </div>
                                                              </div>
                                                          </a>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <a href="<?php echo e(guard_url('password')); ?>">
                                                              <div class="short-cut-item">
                                                                  <div class="icon"><i class="fas fa-key"></i></div>
                                                                  <div class="body">
                                                                      <h4>Change Password</h4>
                                                                      <p>Reset your password</p>
                                                                  </div>
                                                              </div>
                                                          </a>
                                                      </div>
                                                  </div>

                                              </div>
                                            </div>
                                          </div>
                                </div>
                            </div>
                        </div>


                        <script>
                            $(document).ready( function () {
                                $('#myTable').DataTable();
                            } );
                        </script><?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/client/views/home.blade.php ENDPATH**/ ?>