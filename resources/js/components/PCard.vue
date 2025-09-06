<script setup lang="ts">

import { PlayerCard } from '@/types';

const props = defineProps<{
    card: PlayerCard
}>()
</script>

<template>
    <div class="card">
        <div class="card-body">
            <div>
                <img :src="props.card.player_card_image" :alt="`Image of ${props.card.player.name}`" class="w-32 h-32 object-cover rounded-md" />
            </div>
            <div>
                <h5 class="card-title">{{ props.card.player.name }}</h5>
                <p class="card-text">Position: {{ props.card.player.position }}</p>
                <p class="card-text">Rarity: {{ props.card.rarity }}</p>
                <p class="card-text">Rating: {{ props.card.overall_rating }}</p>
            </div>


        </div>
    </div>
</template>

<style scoped>
.card {
    border: 1px solid #222;
    border-radius: 8px;
    padding: 16px;
    background-color: #111;
    color: #ddd;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 10px auto;
}
.card-title {
    font-size: 1.25rem;
    margin-bottom: 8px;
}
.card-body {
    display: flex;
    align-items: center;
    gap: 16px;
}

.card-text {
    margin: 4px 0;
}

</style>
