<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS-LOGIN</title>
    <link rel="stylesheet" href="./styling/style.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>


<body class="bg-neutral-200 dark:bg-neutral-700">
    <section class="gradient-form h-screen ">
        <div class="contaDocumentiner h-full p-10 w-4/5 mx-auto">
          <div
            class="flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full">
              <div
                class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                <div class="g-0 lg:flex lg:flex-wrap">
                  <!-- Left column container-->
                  <div class="px-4 md:px-0 lg:w-6/12">
                    <div class="md:mx-6 md:p-12">
                      <!--Logo-->
                      <img
                          class="mx-auto w-48"
                          src="./Assets/logo.png"
                          alt="logo" /> 
                      <div class="text-center">
                        <!---->
                        <h4 class="mb-12 mt-1 pb-1 text-4xl font-semibold">
                          Staff Login
                        </h4>
                      </div>
      
                      <form>
                        <p class="mb-4">Please login to your account</p>
                        <!--Username input-->
                        <div class="relative mb-4" data-twe-input-wrapper-init>
                          <input
                            type="text"
                            class="peer block min-h-[auto] w-full border-b-2 border-neutral-500 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0" id="input1"
                            placeholder="Username" required/>
                          <label
                            for="input1"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary"
                            >Email  
                          </label>
                        </div>
      
                        <!--Password input-->
                        <div class="relative mb-4" data-twe-input-wrapper-init>
                          <input
                            type="password"
                            class="peer block min-h-[auto] w-full border-b-2 border-neutral-500 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                            id="input2"
                            placeholder="Password" required/>
                          <label
                            for="input2"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary"
                            >Password
                          </label>
                        </div>
      
                        <!--Submit button-->
                        <div class="mb-12 pb-1 pt-1 text-center">
                          <button
                            class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-dark-3 transition duration-150 ease-in-out hover:shadow-dark-2 focus:shadow-dark-2 focus:outline-none focus:ring-0 active:shadow-dark-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                            type="button"
                            data-twe-ripple-init
                            data-twe-ripple-color="light"
                            style="
                              background: linear-gradient(to left, #025376, #016e9c, #0185be, #008ec2);
                            ">
                            Log in
                          </button>
      
                          <!--Login As staff link-->
                          <a href="studentlogin.php">Login As Student</a>
                        </div>
                      </form>
                    </div>
                  </div>
      
                  <!-- Right column container with background and description-->
                  <div
                    class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-e-lg lg:rounded-bl-none"
                    style="background: linear-gradient(to right, #025376, #016e9c, #0185be, #008ec2)">
                    <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                      <h4 class="mb-6 text-2xl font-semibold">
                        Welcome to the school management system
                      </h4>
                      <p class="text-sm">
                        Empowering students with confidence and competence, we pave the way for excellence. Where every learner is 
                        inspired, every achievement is celebrated.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="script.js"></script>
</body>
</html>