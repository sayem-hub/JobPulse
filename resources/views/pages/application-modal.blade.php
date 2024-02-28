<div class="col-span-5 ltr:ml-auto rtl:mr-auto">
    <ul class="flex items-center gap-4">
        <li>

            <div class="relative z-50 hidden modal" id="modal-id_form" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed top-0 bottom-0 left-0 right-0 z-50 overflow-hidden">
                    <div class="absolute inset-0 transition-opacity bg-black bg-opacity-60 modal-overlay"></div>
                    <div class="box-content p-4 mx-auto animate-translate sm:max-w-lg">
                        <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl top-36 dark:bg-neutral-800">
                            <div class="p-12 bg-white dark:bg-neutral-800">
                                <div class="mb-4 text-center">
                                    <h5 class="mb-1 text-gray-800 dark:text-gray-50">Submit Application</h5>
                                    <p class="text-gray-500 dark:text-gray-300">Please read <a href="#"
                                            class="text-violet-500">terms & conditions</a> before apply.</p>
                                </div>

                                <form id="jobApplicationForm" action="" method="POST">
                                    @csrf
                                    
                                    <input type="hidden" name="job_id" value="">
                                <div class="mb-4">
                                    <label for="expected_salary" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Expected Salary</label>
                                    <input type="number" class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600" id="expected_salary" name="expected_salary" placeholder="Input expected salary here...">
                                </div>
                                <div class="mb-4">
                                    
                                    <label for="cover_letter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Short Cover Letter</label>
                                    <textarea id="cover_letter" name="cover_letter" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="You can write short cover letter here..."></textarea>

                                </div>
                                
                                <div class="mb-3 ltr:float-left rtl:float-right">
                                    <a href="#!">
                                        <input class="mr-1 align-middle rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:ring-0 checked:ring-offset-0 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-violet-500/20" type="checkbox" id="flexCheckDefault">
                                        <label class="dark:text-gray-50" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="underline group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Terms and conditions</a></label>
                                    </a>
                                </div>

                              
                                <div class="text-center">
                                    <button class="w-full mt-4 text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">Submit</button>
                                </div>
                            </form>
                                <div class="mt-4 text-center">
                                    <p class="mb-0 text-gray-800 dark:text-gray-300">Don't a member ? <a href="sign-in.html" class="font-medium underline group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"> Sign Up </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        
    </ul>

    <script>
        $(document).ready(function() {
            // Handle click event on Apply Now button
            $('.btn-open-modal').click(function() {
                // Get the job ID from data attribute
                var jobId = $(this).data('job-id');
                // Update the form action of the modal with the job ID
                $('#jobApplicationForm').attr('action', '/apply-job/' + jobId);
            });
        });
    </script>
</div>