<x-filament::page>
    <form wire:submit.prevent="save">
        {{ $this->form }}

        <div class="mt-6">
            <x-filament::button type="submit">
                Lưu cấu hình
            </x-filament::button>
        </div>
    </form>
</x-filament::page>
