<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FinPal</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="antialiased">
        

        <div class="hero min-h-screen bg-neutral-content">
            <div class="hero-content flex-col lg:flex-row-reverse">
                <div class="card flex-shrink-0 w-full shadow-2xl bg-base-500">
                    <form class="card-body">
                      <div class="form-control">
                        <h1 class="text-4xl text-base-100 font-bold mb-4">Welcome To FinPal</h1>

                        <a class="btn btn-primary mb-4" href="<?php echo e(route('login')); ?>">Sign in</a>
                      </div>
                      <div class="form-control">
                       
                        <a class="btn btn-outline btn-primary" href="<?php echo e(route('register')); ?>">Create Account</a>
                        
                      </div>
                     
                    </form>
                  </div>
              <div class="text-center lg:text-left">
                
              </div>
              
            </div>
          </div>
    </body>
</html>
<?php /**PATH /var/www/finpal/resources/views/welcome.blade.php ENDPATH**/ ?>