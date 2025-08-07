<div
  class="mt-6 mb-6 rounded-2xl border border-gray-200 bg-gray-100 dark:border-gray-800 dark:bg-white/[0.03]"
>
  <div
    class="shadow-default rounded-2xl bg-white px-5 pb-11 pt-5 dark:bg-gray-900 sm:px-6 sm:pt-6"
  >
    <div class="flex justify-between">
      <div>
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
          Monthly Target
        </h3>
        <p class="mt-1 text-theme-sm text-gray-500 dark:text-gray-400">
          Target you've set for each month
        </p>
      </div>
      <div x-data="{openDropDown: false}" class="relative h-fit">
        <button
          @click="openDropDown = !openDropDown"
          :class="openDropDown ? 'text-gray-700 dark:text-white' : 'text-gray-400 hover:text-gray-700 dark:hover:text-white'"
        >
          <svg
            class="fill-current"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M10.2441 6C10.2441 5.0335 11.0276 4.25 11.9941 4.25H12.0041C12.9706 4.25 13.7541 5.0335 13.7541 6C13.7541 6.9665 12.9706 7.75 12.0041 7.75H11.9941C11.0276 7.75 10.2441 6.9665 10.2441 6ZM10.2441 18C10.2441 17.0335 11.0276 16.25 11.9941 16.25H12.0041C12.9706 16.25 13.7541 17.0335 13.7541 18C13.7541 18.9665 12.9706 19.75 12.0041 19.75H11.9941C11.0276 19.75 10.2441 18.9665 10.2441 18ZM11.9941 10.25C11.0276 10.25 10.2441 11.0335 10.2441 12C10.2441 12.9665 11.0276 13.75 11.9941 13.75H12.0041C12.9706 13.75 13.7541 12.9665 13.7541 12C13.7541 11.0335 12.9706 10.25 12.0041 10.25H11.9941Z"
              fill=""
            />
          </svg>
        </button>
        <div
          x-show="openDropDown"
          @click.outside="openDropDown = false"
          class="absolute right-0 top-full z-40 w-40 space-y-1 rounded-2xl border border-gray-200 bg-white p-2 shadow-theme-lg dark:border-gray-800 dark:bg-gray-dark"
        >
          <button
            class="flex w-full rounded-lg px-3 py-2 text-left text-theme-xs font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300"
          >
            View More
          </button>
          <button
            class="flex w-full rounded-lg px-3 py-2 text-left text-theme-xs font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300"
          >
            Delete
          </button>
        </div>
      </div>
    </div>
    <div class="relative max-h-[195px]">
      <div id="chartTwo" class="h-full"></div>
      <span
        class="absolute left-1/2 top-[85%] -translate-x-1/2 -translate-y-[85%] rounded-full bg-success-50 px-3 py-1 text-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500"
        >+10%</span
      >
    </div>
    <p
      class="mx-auto mt-1.5 w-full max-w-[380px] text-center text-sm text-gray-500 sm:text-base"
    >
      You earn $3287 today, it's higher than last month. Keep up your good work!
    </p>
  </div>

  <div
    class="flex items-center justify-center gap-5 px-6 py-3.5 sm:gap-8 sm:py-5"
  >
    <div>
      <p
        class="mb-1 text-center text-theme-xs text-gray-500 dark:text-gray-400 sm:text-sm"
      >
        Target
      </p>
      <p
        class="flex items-center justify-center gap-1 text-base font-semibold text-gray-800 dark:text-white/90 sm:text-lg"
      >
        $20K
        <svg
          width="16"
          height="16"
          viewBox="0 0 16 16"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M7.26816 13.6632C7.4056 13.8192 7.60686 13.9176 7.8311 13.9176C7.83148 13.9176 7.83187 13.9176 7.83226 13.9176C8.02445 13.9178 8.21671 13.8447 8.36339 13.6981L12.3635 9.70076C12.6565 9.40797 12.6567 8.9331 12.3639 8.6401C12.0711 8.34711 11.5962 8.34694 11.3032 8.63973L8.5811 11.36L8.5811 2.5C8.5811 2.08579 8.24531 1.75 7.8311 1.75C7.41688 1.75 7.0811 2.08579 7.0811 2.5L7.0811 11.3556L4.36354 8.63975C4.07055 8.34695 3.59568 8.3471 3.30288 8.64009C3.01008 8.93307 3.01023 9.40794 3.30321 9.70075L7.26816 13.6632Z"
            fill="#D92D20"
          />
        </svg>
      </p>
    </div>

    <div class="h-7 w-px bg-gray-200 dark:bg-gray-800"></div>

    <div>
      <p
        class="mb-1 text-center text-theme-xs text-gray-500 dark:text-gray-400 sm:text-sm"
      >
        Achieved
      </p>
      <p
        class="flex items-center justify-center gap-1 text-base font-semibold text-gray-800 dark:text-white/90 sm:text-lg"
      >
        $18K
        <svg
          width="16"
          height="16"
          viewBox="0 0 16 16"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M8.73184 2.3368C8.5944 2.1808 8.39314 2.0824 8.1689 2.0824C8.16852 2.0824 8.16813 2.0824 8.16774 2.0824C7.97555 2.0822 7.78329 2.1553 7.63661 2.3019L3.6365 6.29924C3.3435 6.59203 3.3433 7.0669 3.6361 7.3599C3.9289 7.65289 4.4038 7.65306 4.6968 7.36027L7.4189 4.64L7.4189 13.5C7.4189 13.9142 7.75469 14.25 8.1689 14.25C8.58312 14.25 8.9189 13.9142 8.9189 13.5L8.9189 4.6444L11.6365 7.36025C11.9295 7.65305 12.4043 7.6529 12.6971 7.35991C12.9899 7.06693 12.9898 6.59206 12.6968 6.29925L8.73184 2.3368Z"
            fill="#059669"
          />
        </svg>
      </p>
    </div>
  </div>
</div> 