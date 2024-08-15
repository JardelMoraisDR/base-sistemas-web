<x-filament-panels::page>
    <form wire:submit.prevent="submit">
        {{ $this->form }}
        <div class="text-right" style="margin-top:12px;">
            <x-filament::button type="submit">
                Salvar
            </x-filament::button>
        </div>
    </form>
</x-filament-panels::page>