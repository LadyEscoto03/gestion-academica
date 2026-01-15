 <div x-data="{ isExpanded: false }">
     <!-- info Checkbox -->
     <label for="checkboxInfo"
         class="flex items-center gap-2 text-sm font-medium text-on-surface dark:text-on-surface-dark has-checked:text-on-surface-strong dark:has-checked:text-on-surface-dark-strong has-disabled:opacity-75 has-disabled:cursor-not-allowed">
         <span class="relative flex items-center">
             <input id="checkboxInfo" type="checkbox" x-model="isExpanded"
                 class="before:content[''] peer relative size-4 appearance-none overflow-hidden rounded-sm border border-outline bg-surface-alt before:absolute before:inset-0 checked:border-info checked:before:bg-info focus:outline-2 focus:outline-offset-2 focus:outline-outline-strong checked:focus:outline-info active:outline-offset-0 disabled:cursor-not-allowed dark:border-outline-dark dark:bg-surface-dark-alt dark:checked:border-info dark:checked:before:bg-info dark:focus:outline-outline-dark-strong dark:checked:focus:outline-info"
                 checked />
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor"
                 fill="none" stroke-width="4"
                 class="pointer-events-none invisible absolute left-1/2 top-1/2 size-3 -translate-x-1/2 -translate-y-1/2 text-on-info peer-checked:visible dark:text-on-info-dark">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
             </svg>
         </span>
         <span>info</span>
     </label>
     <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region"
         aria-labelledby="controlsAccordionItemThree" x-collapse>
         <div class="pb-4 text-sm sm:text-base text-pretty">
             Please refer to our <a href="#"
                 class="underline underline-offset-2 text-primary dark:text-primary-dark">refund policy
                 page</a> on the website for detailed information regarding eligibility, timeframes, and the
             process for requesting a refund.
         </div>
     </div>
 </div>
