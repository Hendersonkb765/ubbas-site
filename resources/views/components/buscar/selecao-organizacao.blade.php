<div class="orderByBox">
    <p class="titulo">Ordernar Por:</p>

    <select  wire:model="selectedFilter" wire:click="getOrganizar" name="" id="">
        <option value="0">Ordem Alfabética</option>
        <option value="1">Ordenar por CEP</option>
        <option value="2">Ordenar por Cestas</option>
        <option value="3">Mais recente</option>
    </select>
</div>