 <div class="container">

     <!-- Outer Row -->
     <div class="row justify-content-center">

         <div class="col-lg-7">

             <div class="card o-hidden border-0 shadow-lg my-5">
                 <div class="card-body p-0">
                     <!-- Nested Row within Card Body -->
                     <div class="row">
                         <div class="col-lg">
                             <div class="p-5">
                                 <div class="text-center">
                                     <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                 </div>
                                 <?= $this->session->flashdata('message'); ?>
                                 <form class="user" action="<?php echo site_url('auth/login'); ?>" method="POST">
                                     <div class="form-group">
                                         <input type="text" class="form-control form-control-user" name="username" placeholder="Username" required>
                                     </div>
                                     <div class="form-group">
                                         <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                                     </div>
                                     <button type="submit" value="login" class="btn btn-primary btn-user btn-block">
                                         Login
                                     </button>
                                 </form>
                                 <hr>
                                 <div class="text-center">
                                     <a class="small" href="<?= base_url('index.php/auth/registration') ?>">Create an Account!</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>

     </div>

 </div>