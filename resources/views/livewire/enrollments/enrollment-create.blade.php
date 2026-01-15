<div class="flex h-full w-full flex-col p-4 bg-surface-alt dark:bg-surface-dark-alt rounded-lg shadow-md">
    <form {{-- wire:submit='save' --}}>

        <div x-data="{
            selected: 1,
            total: $refs.stepContent.children.length,
            previous() {
                if (this.selected > 1) {
                    this.selected--;
                }
            },
            next() {
                if (this.selected < this.total) {
                    this.selected++;
                }
        
            },
            isSelected(stepItemId) {
                return 'step-item-' + this.selected === stepItemId;
            }

        }" x-cloack>
            <div x-ref="stepContent">
                <div x-show="isSelected($id('step-item'))" x-id="['step-item']" :id="$id('step-item')">
                    Stem 1 Content
                </div>
                <div x-show="isSelected($id('step-item'))" x-id="['step-item']" :id="$id('step-item')">
                    Stem 2 Content
                </div>
                <div x-show="isSelected($id('step-item'))" x-id="['step-item']" :id="$id('step-item')">
                    Stem 3 Content
                </div>

            </div>
            <div>
                <button type="button" @click="next">Next</button>
                <button type="button" @click="previous">Previous</button>

            </div>

        </div>



        <!-- primary Button -->
        {{-- <button type="submit"
            class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            {{ request()->routeIs('students.create') ? 'Agregar' : 'Actualizar' }}</button> --}}
    </form>
</div>
